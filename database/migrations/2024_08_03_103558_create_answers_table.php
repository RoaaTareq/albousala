<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('answers', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('party_id');
        $table->unsignedBigInteger('question_id');
        $table->unsignedBigInteger('option_id');
        $table->timestamps();

        $table->foreign('party_id')->references('id')->on('parties')->onDelete('cascade');
        $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
