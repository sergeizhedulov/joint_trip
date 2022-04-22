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
            $table->id();
            $table->string('name', 20);
            $table->string('soname', 20);
            $table->string('patronymic', 20);
            $table->date('birth_day',10);
            $table->string('city',20);
            $table->string('phone_number',10);
            $table->string('messengers');
            $table->timestamps();
            $table->string('email',30)->unique();
            $table->enum('user_status', ['Водитель', 'Пассажир'])->default('Пассажир');
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
