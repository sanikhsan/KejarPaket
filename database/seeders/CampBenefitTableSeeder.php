<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Tech Stack Kit',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 and Display',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Video',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Video',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];

        CampBenefit::insert($campBenefits);
    }
}
