<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'name'=>"Oppo mobile",
                'price'=>"40000",
                "description"=>"A smartphone with 8 gb ram and much more features",
                "category"=>"Oppo",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/Oppo/OppoA164GB-b.jpg"

            ],
            [
                'name'=>"Huwaeii y6s",
                'price'=>"400000",
                "description"=>"A smartphone with 6 gb ram and much more features",
                "category"=>"Huwaeii SmartPhones",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/Huawei/HuaweiY6s-b.jpg"

            ],
            [
                'name'=>"Huaweii s6",
                'price'=>"220000",
                "description"=>"A smartphone with 3 gb ram and much more features",
                "category"=>"Huwaeii SmartPhones",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/Huawei/HuaweiY6s-b.jpg"

            ],
            [
                'name'=>"LG mobile",
                'price'=>"20000",
                "description"=>"A smartphone with 4 gb ram and much more features",
                "category"=>"LG Smartphones",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/LG/LGK51S-b.jpg"

            ]
        ]);
    }
    }

