<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Whislist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin1',
            'email' => 'admin1@test.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 1,
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user1@test.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@test.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);

        User::create([
            'name' => 'user3',
            'email' => 'user3@test.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 0,
        ]);

        Product::create([
            'name' => 'Buku IPA',
            'category_id' => 1,
            'slug' => 'buku-ipa',
            'link' => 'https://example.com/users/buku-ipa',
            'image' => 'img/products/ebookedu/ipa.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '52000'
        ]);

        Product::create([
            'name' => 'Komputer Jaringan',
            'category_id' => 1,
            'slug' => 'komputer-jaringan',
            'link' => 'https://example.com/users/komputer-jaringan',
            'image' => 'img/products/ebookedu/komputer.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '60000'
        ]);

        Product::create([
            'name' => 'Matematika Diskrit',
            'category_id' => 1,
            'slug' => 'matematika-diskrit',
            'link' => 'https://example.com/users/matematika-diskrit',
            'image' => 'img/products/ebookedu/mm.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '45000'
        ]);

        Product::create([
            'name' => 'Conan',
            'category_id' => 2,
            'slug' => 'conan',
            'link' => 'https://example.com/users/conan',
            'image' => 'img/products/ebookcom/conan.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '32000'
        ]);

        Product::create([
            'name' => 'One Piece',
            'category_id' => 2,
            'slug' => 'one-piece',
            'link' => 'https://example.com/users/one-piece',
            'image' => 'img/products/ebookcom/op.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '22000'
        ]);

        Product::create([
            'name' => 'Naruto',
            'category_id' => 2,
            'slug' => 'naruto',
            'link' => 'https://example.com/users/naruto',
            'image' => 'img/products/ebookcom/naruto.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '27000'
        ]);

        Product::create([
            'name' => 'F9',
            'category_id' => 3,
            'slug' => 'f9',
            'link' => 'https://example.com/users/f9',
            'image' => 'img/products/film/f9.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '50000'
        ]);

        Product::create([
            'name' => 'Guardian of The Galaxy',
            'category_id' => 3,
            'slug' => 'gotg',
            'link' => 'https://example.com/users/gotg',
            'image' => 'img/products/film/gotg.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '49000'
        ]);

        Product::create([
            'name' => 'Matrix',
            'category_id' => 3,
            'slug' => 'matrix',
            'link' => 'https://example.com/users/matrix',
            'image' => 'img/products/film/matrix.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '51000'
        ]);

        Product::create([
            'name' => 'Lightroom Mobile',
            'category_id' => 4,
            'slug' => 'lr-mobile',
            'link' => 'https://example.com/users/lr-mobile',
            'image' => 'img/products/androidapp/lr.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '27000'
        ]);

        Product::create([
            'name' => 'Capcut',
            'category_id' => 4,
            'slug' => 'capcut',
            'link' => 'https://example.com/users/capcut',
            'image' => 'img/products/androidapp/capcut.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '30000'
        ]);

        Product::create([
            'name' => 'Pictsart',
            'category_id' => 4,
            'slug' => 'pictsart',
            'link' => 'https://example.com/users/pictsart',
            'image' => 'img/products/androidapp/pictsart.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '33000'
        ]);

        Product::create([
            'name' => 'Internet Download Manager',
            'category_id' => 5,
            'slug' => 'idm',
            'link' => 'https://example.com/users/idm',
            'image' => 'img/products/softpc/idm.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '20000'
        ]);

        Product::create([
            'name' => 'Photoshop',
            'category_id' => 5,
            'slug' => 'ps',
            'link' => 'https://example.com/users/ps',
            'image' => 'img/products/softpc/ps.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '22000'
        ]);

        Product::create([
            'name' => 'Office',
            'category_id' => 5,
            'slug' => 'office',
            'link' => 'https://example.com/users/office',
            'image' => 'img/products/softpc/office.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '26000'
        ]);

        Product::create([
            'name' => 'Voucher Mobile Legend',
            'category_id' => 6,
            'slug' => 'voucher-ml',
            'link' => 'https://example.com/users/voucher-ml',
            'image' => 'img/products/softpc/ml.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '20000'
        ]);

        Product::create([
            'name' => 'Voucher Steam',
            'category_id' => 6,
            'slug' => 'voucher-steam',
            'link' => 'https://example.com/users/voucher-steam',
            'image' => 'img/products/softpc/steam.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '20000'
        ]);

        Product::create([
            'name' => 'Voucher Point Blank',
            'category_id' => 6,
            'slug' => 'voucher-pb',
            'link' => 'https://example.com/users/voucher-pb',
            'image' => 'img/products/softpc/pb.jpg',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolorem ad ratione incidunt rem quia mollitia ut atque labore quisquam.',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia blanditiis ut ab hic quasi doloribus natus nobis! Quidem mollitia exercitationem corrupti qui cumque sequi ducimus voluptate sapiente eveniet impedit aspernatur dolores pariatur odio aliquam cupiditate assumenda expedita tempora hic accusamus rerum, itaque recusandae laboriosam? Voluptas provident dignissimos numquam in sit accusamus ullam, debitis libero facere quae, necessitatibus, possimus quibusdam iste. Commodi itaque ducimus, doloribus tempora repellendus necessitatibus optio consequuntur dolores in quisquam tempore explicabo. Alias non suscipit recusandae animi similique facilis culpa, possimus neque, laudantium rem nam veniam sunt tempore cupiditate deserunt adipisci! Voluptatem nihil porro aspernatur, adipisci doloribus similique.',
            'price' => '20000'
        ]);

        Category::create([
            'name' => 'E-Book Education',
            'slug' => 'e-book-education'
        ]);

        Category::create([
            'name' => 'E-Book Comic',
            'slug' => 'e-book-comic'
        ]);

        Category::create([
            'name' => 'Film',
            'slug' => 'film'
        ]);

        Category::create([
            'name' => 'Android Apps',
            'slug' => 'android-apps'
        ]);

        Category::create([
            'name' => 'Software PC',
            'slug' => 'software-pc'
        ]);

        Category::create([
            'name' => 'Voucher Game',
            'slug' => 'voucher-game'
        ]);

        Transaction::create([
            'product_id' => 3,
            'user_id' => 2,
            'no_invoice' => 'EDU-001',
            'status' => 'Transaksi Berhasil'
        ]);

        Transaction::create([
            'product_id' => 3,
            'user_id' => 3,
            'no_invoice' => 'EDU-002',
            'status' => 'Transaksi Berhasil'
        ]);

        Transaction::create([
            'product_id' => 5,
            'user_id' => 2,
            'no_invoice' => 'COM-001',
            'status' => 'Transaksi Berhasil'
        ]);

        Cart::create([
            'product_id' => 5,
            'user_id' => 2,
        ]);

        Cart::create([
            'product_id' => 7,
            'user_id' => 2,
        ]);

        Whislist::create([
            'product_id' => 5,
            'user_id' => 2,
        ]);

        Whislist::create([
            'product_id' => 7,
            'user_id' => 2,
        ]);

    }
}
