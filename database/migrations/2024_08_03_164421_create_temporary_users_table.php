<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryUsersTable extends Migration
{
    public function up()
    {
        Schema::create('temporary_users', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->unique();
            $table->float('total_score')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('temporary_users');
    }
}



?>