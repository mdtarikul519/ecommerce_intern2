<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::truncate();

        UserRole::create([
              'title'=>'superadmin',
              'serial'=> 1,
        ]);

        UserRole::create([
            'title'=>'admin',
            'serial'=> 2,
       ]);

       UserRole::create([
         'title'=>'user',
         'serial'=> 3,
      ]);
    }
}
