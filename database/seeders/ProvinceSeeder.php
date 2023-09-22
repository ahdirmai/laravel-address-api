<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "unique_id" => 11, "name" => " ACEH","code"=>"A"
            ],
            [
                "unique_id" => 12, "name" => " SUMATERA UTARA","code"=>"A"
            ],
            [
                "unique_id" => 13, "name" => " SUMATERA BARAT","code"=>"A"
            ],
            [
                "unique_id" => 14, "name" => " RIAU","code"=>"A"
            ],
            [
                "unique_id" => 15, "name" => " JAMBI","code"=>"A"
            ],
            [
                "unique_id" => 16, "name" => " SUMATERA SELATAN","code"=>"A"
            ],
            [
                "unique_id" => 17, "name" => " BENGKULU","code"=>"A"
            ],
            [
                "unique_id" => 18, "name" => " LAMPUNG","code"=>"A"
            ],
            [
                "unique_id" => 19, "name" => " KEPULAUAN BANGKA BELITUNG","code"=>"A"
            ],
            [
                "unique_id" => 21, "name" => " KEPULAUAN RIAU","code"=>"A"
            ],
            [
                "unique_id" => 31, "name" => " DKI JAKARTA","code"=>"A"
            ],
            [
                "unique_id" => 32, "name" => " JAWA BARAT","code"=>"A"
            ],
            [
                "unique_id" => 33, "name" => " JAWA TENGAH","code"=>"B"
            ],
            [
                "unique_id" => 34, "name" => " DI YOGYAKARTA","code"=>"B"
            ],
            [
                "unique_id" => 35, "name" => " JAWA TIMUR","code"=>"B"
            ],
            [
                "unique_id" => 36, "name" => " BANTEN","code"=>"B"
            ],
            [
                "unique_id" => 51, "name" => " BALI","code"=>"B"
            ],
            [
                "unique_id" => 52, "name" => " NUSA TENGGARA BARAT","code"=>"B"
            ],
            [
                "unique_id" => 53, "name" => " NUSA TENGGARA TIMUR","code"=>"B"
            ],
            [
                "unique_id" => 61, "name" => " KALIMANTAN BARAT","code"=>"B"
            ],
            [
                "unique_id" => 62, "name" => " KALIMANTAN TENGAH","code"=>"B"
            ],
            [
                "unique_id" => 63, "name" => " KALIMANTAN SELATAN","code"=>"B"
            ],
            [
                "unique_id" => 64, "name" => " KALIMANTAN TIMUR","code"=>"B"
            ],
            [
                "unique_id" => 65, "name" => " KALIMANTAN UTARA","code"=>"B"
            ],
            [
                "unique_id" => 71, "name" => " SULAWESI UTARA","code"=>"C"
            ],
            [
                "unique_id" => 72, "name" => " SULAWESI TENGAH","code"=>"C"
            ],
            [
                "unique_id" => 73, "name" => " SULAWESI SELATAN","code"=>"C"
            ],
            [
                "unique_id" => 74, "name" => " SULAWESI TENGGARA","code"=>"C"
            ],
            [
                "unique_id" => 75, "name" => " GORONTALO","code"=>"C"
            ],
            [
                "unique_id" => 76, "name" => " SULAWESI BARAT","code"=>"C"
            ],
            [
                "unique_id" => 81, "name" => " MALUKU","code"=>"C"
            ],
            [
                "unique_id" => 82, "name" => " MALUKU UTARA","code"=>"C"
            ],
            [
                "unique_id" => 91, "name" => " PAPUA BARAT","code"=>"C"
            ],
            [
                "unique_id" => 94, "name" => " PAPUA","code"=>"C"
            ]
        ];

        Province::insert($data);
    }
}
