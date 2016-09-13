<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath'=>'src\images\1.jpg',
        	'title'=>'Harry Potter',
        	'description'=>'Super Cool',
        	'price'=>10
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=>'src\images\1.jpg',
        	'title'=>'Martial God Asura',
        	'description'=>'Martial Arts',
        	'price'=>20
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=>'src\images\1.jpg',
        	'title'=>'CD',
        	'description'=>'Super Cool damn nice',
        	'price'=>50
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=>'src\images\1.jpg',
        	'title'=>'Peerless Martial God',
        	'description'=>'Super Cool nice nice nice',
        	'price'=>55
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=>'src\images\1.jpg',
        	'title'=>'Sword of Immortal',
        	'description'=>'Super Cool super cool',
        	'price'=>50
        	]);
        $product->save();
    }
}
