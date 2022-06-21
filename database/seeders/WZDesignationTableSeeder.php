<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\wz_designation;
use Carbon\Carbon;

class WZDesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designation = [
            [
              'designation' => 'Chief Executive Officer',
              'visitor' => request()->ip(),
              'created_at' =>Carbon::now(),
            ],
            [
                'designation' => 'Chief Financial Officer',
                'visitor' => request()->ip(),
                'created_at' =>Carbon::now(),
            ],
            [
                'designation' => 'Graphic / Web Designer',
                'visitor' => request()->ip(),
                'created_at' =>Carbon::now(),
            ],
            [
                'designation' => 'Motion Graphic Designer',
                'visitor' => request()->ip(),
                'created_at' =>Carbon::now(),
              ],
              [
                  'designation' => 'Senior Web Developer',
                  'visitor' => request()->ip(),
                  'created_at' =>Carbon::now(),
              ],
              [
                  'designation' => 'System Administrator',
                  'visitor' => request()->ip(),
                  'created_at' =>Carbon::now(),
              ],
              [
                'designation' => 'Accounts Executive',
                'visitor' => request()->ip(),
                'created_at' =>Carbon::now(),
              ],
              [
                  'designation' => 'Senior Finance Executive',
                  'visitor' => request()->ip(),
                  'created_at' =>Carbon::now(),
              ]
              ];

              wz_designation::insert($designation);
    }
}
