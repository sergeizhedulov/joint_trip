<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHasCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_comments', function (Blueprint $table) {
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();

            $table->foreignId('comment_id')
            ->constrained('comments')
            ->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_has_comments');
    }
}
