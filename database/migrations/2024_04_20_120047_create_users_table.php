

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 191);
            $table->string('secondname', 191);
            $table->string('email', 191)->unique();
            $table->string('phonenumber', 11);
            $table->string('password', 191);
            $table->string('type', 16);
            $table->string('governate', 15)->nullable();
            $table->string('region', 15)->nullable();
            $table->string('youraddress', 15)->nullable();
            $table->string('personalphoto', 191)->nullable();
            $table->string('syndicatedphoto', 191)->nullable();
            $table->tinyInteger('proved')->default('0');
            $table->tinyInteger('used')->default('0');
            $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('users');
    }
}

