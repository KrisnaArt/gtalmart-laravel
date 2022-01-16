<?php

namespace App\Http\Controllers;

use App\Models\Whislist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhislistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('whislist.index', [
            'whislists' => Whislist::where('user_id',Auth::id())->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWhistlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'user_id' => request('user_id'),
            'product_id' => request('product_id')
        ];

        $whistlist = Whislist::where('product_id', request('product_id'))->first();

        if ($whistlist == null){

            Whislist::create($data);

            request()->session()->flash('suscess', 'cart added');

            return redirect('/whistlist');
        }else{
            
            request()->session()->flash('gagal', 'barang sudah ditambahkan');

            return redirect('/whistlist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whistlist  $whistlist
     * @return \Illuminate\Http\Response
     */
    public function show(Whislist $whistlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whistlist  $whistlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Whislist $whistlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWhistlistRequest  $request
     * @param  \App\Models\Whistlist  $whistlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whislist $whistlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whistlist  $whistlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whislist $whislist)
    {
        Whislist::destroy($whislist->id);
        return redirect('/whislists')->with('suscess', 'product adeleted');
    }
}
