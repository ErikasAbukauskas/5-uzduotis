<?php

use Illuminate\Database\Seeder;

use App\Task;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);

        DB::table('tasks')->insert([
            'title' => Str::random(5),
            'description' => Str::random(10),
            'start_date' => date('y-m-d'),
            'end_date' => date('y-m-d'),
            'logo' => Str::random(10),
            'type_id' => rand(1, 4),
        ]);
    }
}
