<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorshipsTable extends Migration
{
    public function up()
    {
        Schema::create('mentorships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('mentor_id')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('mentor_id')->references('id')->on('alumnis')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentorships');
    }
}
