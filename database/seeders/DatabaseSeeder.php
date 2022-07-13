<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);

        $this->call(SanjiwaniSeeder::class);
        // $this->call(InstitutionSeeder::class);
        $this->call(SubjectSeeder::class);

        $this->call(GroupSeeder::class);
    }
}
