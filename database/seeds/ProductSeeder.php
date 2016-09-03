<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'description' => 'This is Product 1',
            'price' => 15.50,
            'discount' => 3.00,
            'bstatus' => '1',
            'category_id' => 1
        ]);
    }
}
