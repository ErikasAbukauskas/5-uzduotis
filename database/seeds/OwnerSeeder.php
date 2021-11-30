<?php

use Illuminate\Database\Seeder;

use App\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);

        DB::table('owners')->insert([
            'name' => Str::random(5),
            'surname' => Str::random(10),
            'email' => 'email@email.com',
            'phone' => rand(0000000000, 1000000000),
        ]);



    }
}
