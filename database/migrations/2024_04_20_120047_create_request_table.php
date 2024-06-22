

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->id('id-request');
            $table->string('name patient', 11);
            $table->string('email patient', 11);
            $table->string('phone patient', 11);
            $table->string('email doctor', 11);
            $table->datetime('date');
            $table->integer('age');
            $table->bigInteger('red-id')->unsigned();
            $table->bigInteger('den-id')->unsigned();
            $table->timestamps();
            $table->index(["den-id"]);
            $table->index(["red-id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}

