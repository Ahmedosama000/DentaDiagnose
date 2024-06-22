

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistpasswordresetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentistpassword_reset', function (Blueprint $table) {
            $table->increments('id', 20);
            $table->string('email', 191);
            $table->string('token', 191);
            $table->timestamps();
            $table->index(["email"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentistpassword_reset');
    }
}

