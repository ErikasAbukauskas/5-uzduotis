<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('types')->insert([
            'title' => 'Atlikta',
            'description' => Str::random(5),
        ]);

        DB::table('types')->insert([
            'title' => 'Neatlikta',
            'description' => Str::random(5),
        ]);

        DB::table('types')->insert([
            'title' => 'Vykdoma',
            'description' => Str::random(5),
        ]);

        DB::table('types')->insert([
            'title' => 'Nebeaktuali',
            'description' => Str::random(5),
        ]);

    }
}
