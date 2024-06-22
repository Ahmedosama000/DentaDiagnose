

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigInteger('admin_id', 20)->unsigned();
            $table->string('name', 191);
            $table->string('email', 191);
            $table->timestamp('email_verified_at');
            $table->string('password', 191);
            $table->string('confirm_password', 191);
            $table->timestamps();
            $table->unique(["email"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

