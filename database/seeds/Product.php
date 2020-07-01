<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Black Forest',
            'slug'=> 'black-forest',
            'description'=>'Black forest cake in Nepal',
            'featured' => 1,
            'regular_price'=>123.45,
            'sale_price'=>123.67,
            'product_image'=>'abc.png'
            
        ],
        [
            'name'=>'white Forest',
            'slug'=> 'white-forest',
            'description'=>'white forest cake in Nepal',
            'featured' => 0,
            'regular_price'=>123.45,
            'sale_price'=>123.67,
            'product_image'=>'abc123.png'
            
        ],
        [
            'name'=>'Butter Scuche',
            'slug'=> 'butter-scucceh',
            'description'=>'Butter Scuche cake in Nepal',
            'featured' => 1,
            'regular_price'=>123.45,
            'sale_price'=>123.67,
            'product_image'=>'butter.png'
            
        ]
        ]);
    }
}
