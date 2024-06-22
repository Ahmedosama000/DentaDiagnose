

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorydoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_doctor', function (Blueprint $table) {
            $table->bigInteger('id-cat')->unsigned();
            $table->bigInteger('id-den')->unsigned();
            $table->timestamps();
            $table->index(["id-den"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_doctor');
    }
}

