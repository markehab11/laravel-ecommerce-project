<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => hash::make('admin1234'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
         ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => hash::make('user1234'),
            'role' => 'user',
            'remember_token' => Str::random(10),
        ]);
//
//        \App\Models\Website_info::factory()->create([
//            'address' => '123 Street, New York, USA',
//            'email' => 'info@example.com',
//            'phone' =>'+012 345 67890',
//            'facebook' => 'facebook',
//            'twiter' => 'twiter',
//            'instgram' => 'instgram',
//            'youtube' => 'youtube',
//        ]);
//
//        \App\Models\Slider::factory()->create([
//            'name' => 'Reasonable Price',
//            'image' => '1697709581.jpg',
//            'title' => '10% OFF YOUR FIRST ORDER',
//        ]);
//
//        \App\Models\Slider::factory()->create([
//            'name' => 'Fashionable Dress',
//            'image' => '1696276991.jpg',
//            'title' => '10% OFF YOUR FIRST ORDER',
//        ]);
//
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Mens dresses',
//            'image' => '1696276192.jpg',
//            'title' =>'Mens dresses',
//        ]);
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Womens dresses',
//            'image' => '1696276272.jpg',
//            'title' =>'Womens dresses',
//        ]);
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Babys dresses',
//            'image' => '1696276292.jpg',
//            'title' =>'Mens dresses',
//        ]);
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Accerssories',
//            'image' => '1697647539.jpg',
//            'title' =>'Accerssories',
//        ]);
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Bags',
//            'image' => '1697647526.jpg',
//            'title' =>'Bags',
//        ]);
//        \App\Models\Categorie::factory()->create([
//            'name' => 'Shoes',
//            'image' => '1697647510.jpg',
//            'title' =>'Shoes',
//        ]);
//
//
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1696277171.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '2',
//            'slider_id' =>'1',
//            'price' =>'123',
//            'descount' =>'100',
//            'quantity' =>'4',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697710864.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '3',
//            'slider_id' =>'1',
//            'price' =>'150',
//            'descount' =>'120',
//            'quantity' =>'6',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697914582.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '1',
//            'slider_id' =>'0',
//            'price' =>'123',
//            'descount' =>'0',
//            'quantity' =>'11',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697914715.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '2',
//            'slider_id' =>'1',
//            'price' =>'300',
//            'descount' =>'250',
//            'quantity' =>'3',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697914792.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '2',
//            'slider_id' =>'0',
//            'price' =>'50',
//            'descount' =>'0',
//            'quantity' =>'9',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697914792.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '1',
//            'slider_id' =>'0',
//            'price' =>'600',
//            'descount' =>'500',
//            'quantity' =>'9',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697914953.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '2',
//            'slider_id' =>'2',
//            'price' =>'200',
//            'descount' =>'150',
//            'quantity' =>'3',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697915053.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '5',
//            'slider_id' =>'0',
//            'price' =>'60',
//            'descount' =>'55',
//            'quantity' =>'6',
//        ]);
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697915179.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '7',
//            'slider_id' =>'0',
//            'price' =>'200',
//            'descount' =>'0',
//            'quantity' =>'6',
//        ]);
//
//        \App\Models\Product::factory()->create([
//            'name' => 'Colorful Stylish Shirt',
//            'image' => '1697915275.jpg',
//            'title' =>'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et,',
//            'description' => 'Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea. Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy.',
//            'categorie_id' => '6',
//            'slider_id' =>'0',
//            'price' =>'199',
//            'descount' =>'0',
//            'quantity' =>'9',
//        ]);
//
//        \App\Models\Color::factory()->create([
//            'product_id ' => '1',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '1',
//            'name' =>'blue',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '2',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '3',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '4',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '5',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '6',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '7',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '8',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '9',
//            'name' =>'red',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '10',
//            'name' =>'red',
//        ]);
//
//        \App\Models\Color::factory()->create([
//            'product_id ' => '1',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '2',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '3',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '4',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '5',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '6',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '7',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '8',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '9',
//            'name' =>'black',
//        ]);
//        \App\Models\Color::factory()->create([
//            'product_id ' => '10',
//            'name' =>'black',
//        ]);
//
//        \App\Models\Size::factory()->create([
//            'product_id ' => '1',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '1',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '1',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '1',
//            'name' => 'xl',
//        ]);
//
//        \App\Models\Size::factory()->create([
//            'product_id ' => '2',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '2',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '2',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '2',
//            'name' => 'xl',
//        ]);
//
//        \App\Models\Size::factory()->create([
//            'product_id ' => '3',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '3',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '3',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '3',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '4',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '4',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '4',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '4',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '5',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '5',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '5',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '5',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '6',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '6',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '6',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '6',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '7',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '7',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '7',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '7',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '8',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '8',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '8',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '8',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '9',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '9',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '9',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '9',
//            'name' => 'xl',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '10',
//            'name' =>'s',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '10',
//            'name' =>'m',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '10',
//            'name' =>'l',
//        ]);
//        \App\Models\Size::factory()->create([
//            'product_id ' => '10',
//            'name' => 'xl',
//        ]);
//
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '1',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '1',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '2',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '3',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '4',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '5',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '6',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '7',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '8',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '9',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '10',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '2',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '2',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '3',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductReview::factory()->create([
//            'product_id ' => '4',
//            'review_text' => 'Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.',
//            'name' =>'test',
//            'email' =>'test@gmail.com',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '1',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '2',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '3',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '4',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '5',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '6',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '7',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '8',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '9',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
//        \App\Models\ProductImage::factory()->create([
//            'product_id ' => '10',
//            'filename_1' => '1697914792.jpg',
//            'filename_2' =>'1696277171.jpg',
//            'filename_3' =>'1697915179.jpg',
//            'filename_4' =>'1697914953.jpg',
//        ]);
    }
}

