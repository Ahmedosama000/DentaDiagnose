

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorypatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_patient', function (Blueprint $table) {
            $table->id('id-cat')->unsigned();
            $table->bigInteger('id-patient')->unsigned();
            $table->timestamps();
            $table->index(["id-patient"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_patient');
    }
}

