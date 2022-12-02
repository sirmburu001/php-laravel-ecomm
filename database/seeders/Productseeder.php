<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Captain Morgan',
                'price' => '270',
                'description' => 'High Quality Kenyan bear',
                'category' => 'spirit',
                'gallary' => 'https://stylesatlife.com/wp-content/uploads/2018/04/benefits-of-orange.jpg',
            ],
            [
                'name' => 'Blue ice',
                'price' => '270',
                'description' => 'High Quality Kenyan bear',
                'category' => 'spirit',
                'gallary' => 'https://stylesatlife.com/wp-content/uploads/2018/04/benefits-of-orange.jpg',
            ],
            [
                'name' => 'White Wine',
                'price' => '270',
                'description' => 'High Quality Kenyan bear',
                'category' => 'wines',
                'gallary' => 'https://stylesatlife.com/wp-content/uploads/2018/04/benefits-of-orange.jpg',
            ],
            [
                'name' => 'Red wine',
                'price' => '270',
                'description' => 'High Quality Kenyan bear',
                'category' => 'wines',
                'gallary' => 'https://stylesatlife.com/wp-content/uploads/2018/04/benefits-of-orange.jpg',
            ],
            [
                'name' => 'Dessert wine',
                'price' => '270',
                'description' => 'High Quality Kenyan bear',
                'category' => 'wines',
                'gallary' => 'https://stylesatlife.com/wp-content/uploads/2018/04/benefits-of-orange.jpg',
            ]
        ]);
    }
}