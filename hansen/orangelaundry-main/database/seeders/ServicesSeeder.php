<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'service_name' => 'Express Services [Wet or Dry Washing / Drying / Hanging / Ironing]',
            'service_price' => 'Rp10.000,00/kg'
        ]);
        Service::create([
            'service_name' => 'Dry Washing Only ',
            'service_price' => 'Rp4.000,00/kg'
        ]);
        Service::create([
            'service_name' => 'Wet Washing Only',
            'service_price' => 'Rp4.000,00/kg'
        ]);
        Service::create([
            'service_name' => 'Washing Only / Dry Washing Only / Wet Washing Only [Non Ironing]',
            'service_price' => 'Rp4.000,00/kg'
        ]);
        Service::create([
            'service_name' => 'Hanging Only [Non Dry Washing / Non Wet Washing / Non Ironing ]',
            'service_price' => 'Rp4.000,00/kg'
        ]);
        Service::create([
            'service_name' => 'Ironing Only [Non Dry Washing / Non Wet Washing / Non Hanging ]',
            'service_price' => 'Rp4.000,00/kg'
        ]);
    }
}
