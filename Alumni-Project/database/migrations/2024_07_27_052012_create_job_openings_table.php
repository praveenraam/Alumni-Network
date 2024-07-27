<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('company');
            $table->string('location');
            $table->date('application_deadline');
            $table->unsignedBigInteger('posted_by'); // Reference to the alumni who posted the job
            $table->boolean('type')->default(0); // 1 for job, 0 for internship
            $table->timestamps();
        
            $table->foreign('posted_by')->references('id')->on('alumnis')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_openings');
    }
};
