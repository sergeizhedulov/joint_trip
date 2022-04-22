<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id()->autoIncrement();
            $table->string('name', 20)->nullable();;
            $table->string('soname', 20)->nullable();;
            $table->string('patronymic', 20);
            $table->date('birth_day',10)->nullable();;
            $table->string('city',20);
            $table->string('phone_number',10)->unique();
            $table->string('messengers');
            $table->string('create_at')->nullable();;
            $table->string('email',30)->unique();
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
