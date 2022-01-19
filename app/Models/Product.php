<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Whislist;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function whislist()
    {
        return $this->hasMany(Whislist::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search)
        {
            return $query->where('name', 'like', '%'.$search.'%');
        });

        $query->when($filters['min'] ?? false, function ($query, $min)
        {
            return $query->where('price','>=',$min);
        })->when($filters['max'] ?? false, function ($query, $max)
        {
            return $query->where('price','<=',$max);
        });
    }
}
