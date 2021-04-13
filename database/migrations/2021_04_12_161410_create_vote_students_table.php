<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vote');
            $table->unsignedBigInteger('id_students');
            $table->unsignedBigInteger('id_candidate');
            $table->timestamps();

            $table->foreign('id_vote')->references('id')->on('votes')->onDelete('cascade');
            $table->foreign('id_students')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('id_candidate')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_students');
    }
}
