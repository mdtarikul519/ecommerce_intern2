<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Contact::truncate();
        $this->call(UserSeeder::class);
        $this->call(UserRoleSeeder::class);

        Contact::factory()->count(100)->create();
    }
}
