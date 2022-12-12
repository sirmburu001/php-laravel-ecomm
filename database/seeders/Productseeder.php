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
                'name' => 'Toyota Avalon',
                'price' => '$270',
                'description' => 'The 2022 Toyota Avalon ranks near the top of the large car class. The Avalon has lots of standard convenience and safety features, a spacious and premium cabin, a comfortable ride, and a potent yet fuel-efficient V6 powertrain.',
                'category' => 'Sedan',
                'gallary' => 'https://www.toyota.com/imgix/content/dam/toyota/jellies/max/2022/avalon/limited/3554/1k6/2.png?fm=webp&bg=white&w=768&h=328&q=90',
            ],
            [
                'name' => 'Toyota Highlander',
                'price' => '$50,000',
                'description' => 'Imagine yourself cruising in this Toyota luxury SUV with available leather-trimmed front and second-row seats. The superior styling does not stop there. Add sophistication with available faux wood door trim, available chrome-finished interior door handles, and available Power Panoramic View Moonroof.',
                'category' => 'SUV',
                'gallary' => 'https://www.ccarprice.com/products/Toyota-Highlander-XSE-2021_2.jpg',
            ],
            [
                'name' => 'Toyota Sienna',
                'price' => '$41,000',
                'description' => 'The Toyota Sienna is a minivan manufactured and marketed by Toyota primarily for the North American and select East Asian markets.',
                'category' => 'Sedan',
                'gallary' => 'https://crdms.images.consumerreports.org/c_lfill,w_470,q_auto,f_auto/prod/cars/cr/car-versions/19224-2021-toyota-sienna-xle',
            ],
            [
                'name' => 'Toyota RAV4',
                'price' => '$34,800',
                'description' => '
                Known for its reliability and style, the RAV4 has become one of the most popular Toyota SUVs for sale. Most people that are searching for an SUV are looking for something that provides expansive interior space, a powerful engine, and high-tech features.',
                'category' => 'SUV',
                'gallary' => 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/toyota-rav4-my19-index-1.png',
            ],
            [
                'name' => 'Toyota TRD',
                'price' => '$65,400',
                'description' => 'The Toyota Tundra is renowned for its long-term dependability and low maintenance costs. The Tundra won J.D. Power top honors in their Vehicle Dependability Study for the large light-duty truck segment.',
                'category' => 'SUV',
                'gallary' => 'https://toyota-cms-media.s3.amazonaws.com/wp-content/uploads/2021/11/Desert_Chase_Tundra_SEMA_2021_Hi-Res_18-1500x900.jpg',
            ]
        ]);
    }
}
