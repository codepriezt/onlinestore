<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Mac pro',
            'slug'=>'laptop-9',
            'details'=>'1Trb 25inch',
            'price'=>445866,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);

        Product::create([
            'name'=>'Eloplast',
            'slug'=>'chair',
            'details'=>'1Trb 25inch',
            'price'=>84566,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=> 50
        ]);

        Product::create([
            'name'=>'iphone',
            'slug'=>'phone 7',
            'details'=>'1Trb 25inch',
            'price'=>86656,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);

        Product::create([
            'name'=>'Samsung',
            'slug'=>'phone 4',
            'details'=>'1Trb 25inch',
            'price'=>866432,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);


        Product::create([
            'name'=>'acer',
            'slug'=>'desktop-4',
            'details'=>'1Trb 25inch',
            'price'=>7866098,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);


        Product::create([
            'name'=>'bruhum',
            'slug'=>'dispenser',
            'details'=>'1Trb 25inch',
            'price'=>86646,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);


        Product::create([
            'name'=>'adidas',
            'slug'=>'footwear',
            'details'=>'1Trb 25inch',
            'price'=>43266,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);


        Product::create([
            'name'=>'prada',
            'slug'=>'wrist watch',
            'details'=>'1Trb 25inch',
            'price'=>47866,
            'description'=>'lorem lorem in the lorem procees olsi wwsdr jdf aoskapa',
            'weight'=>50
        ]);
        
        
    }
}
