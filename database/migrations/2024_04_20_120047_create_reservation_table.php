

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('id-reserve')->unsigned();
            $table->string('email doctor', 11);
            $table->string('first name', 11);
            $table->string('last name', 11);
            $table->string('email patient', 11);
            $table->string('phone patient', 11);
            $table->string('doctor name', 11);
            $table->tinyInteger('finished')->default('0');
            $table->tinyInteger('waiting list')->default('0');
            $table->bigInteger('id-patient')->unsigned();
            $table->bigInteger('den-id')->unsigned();
            $table->timestamps();
            $table->index(["id-patient"]);
            $table->index(["den-id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}

