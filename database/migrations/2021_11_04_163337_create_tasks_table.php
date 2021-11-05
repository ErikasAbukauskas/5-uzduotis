<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            $table->id();
            $table->string("title", 225);
            $table->longText("description");
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->string("logo", 225);

            $table->unsignedBigInteger("type_id");

            //(sujungimo stulpelio pavadinimas)->(kitos lenteles id pavadinimas)->(kitos lenteles pavadinimas, su kuria sujungiam)
            $table->foreign("type_id")->references("id")->on("types");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
