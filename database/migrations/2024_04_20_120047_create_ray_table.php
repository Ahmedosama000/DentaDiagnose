

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ray', function (Blueprint $table) {
            $table->id('id-ray')->unsigned();
            $table->string('full name');
            $table->string('email');
            $table->string('phone');
            $table->string('age');
            $table->datetime('date');
            $table->string('doctor name');
            $table->string('email doctor');
            $table->bigInteger('dent-id')->unsigned();
            $table->bigInteger('rad-id')->unsigned();
            $table->timestamps();
            $table->index(["dent-id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ray');
    }
}

