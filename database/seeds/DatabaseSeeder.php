<?php

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

        $this->call(TypeSeeder::class);
        $this->call(PaginatonSettingSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(TaskSeeder::class);



    }
}
