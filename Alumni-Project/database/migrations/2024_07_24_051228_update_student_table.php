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
        Schema::table('students', function (Blueprint $table) {
            $table->date('date_of_birth')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable(); // Adjust length as needed
            $table->string('roll_number')->unique()->nullable();
            $table->string('batch')->nullable();
            $table->string('degree')->nullable();
            $table->string('department')->nullable();
            $table->string('current_semester')->nullable();
            $table->decimal('cgpa', 4, 2)->nullable(); // Precision 4, Scale 2 (e.g., 9.75)
            $table->string('interests')->nullable();
            $table->string('skills')->nullable();
            $table->string('programming_languages')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('github_profile')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('certifications')->nullable();
            $table->string('internships_status')->nullable();
            $table->string('internships_experience')->nullable();
            $table->string('std_profile_picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn([
                'date_of_birth',
                'contact_number',
                'address',
                'roll_number',
                'batch',
                'degree',
                'department',
                'current_semester',
                'cgpa',
                'interests',
                'skills',
                'programming_languages',
                'linkedin_profile',
                'github_profile',
                'personal_website',
                'certifications',
                'internships_status',
                'internships_experience',
            ]);
        });
    }
};
