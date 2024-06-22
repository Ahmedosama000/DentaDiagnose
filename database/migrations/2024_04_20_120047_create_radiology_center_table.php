

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadiologycenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiology_center', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('email', 20);
            $table->string('phone', 11);
            $table->string('password', 64);
            $table->string('governate', 11)->nullable();
            $table->string('region', 11)->nullable();
            $table->string('your address', 11)->nullable();
            $table->string('personal photo', 11)->nullable();
            $table->string('syndicated card', 11)->nullable();
            $table->tinyInteger('proved')->default('0');
            $table->tinyInteger('used')->default('0');
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
        Schema::dropIfExists('radiology_center');
    }
}

