<?php

namespace Database\Seeders;

use App\Models\Camp;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => '280',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => '140',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];
        Camp::insert($camps);
    }
}
