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
        Schema::table('alumnis', function (Blueprint $table) {
            $table->string('contact_no')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('specialization')->nullable();
            $table->string('current_job')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('experience')->nullable();
            $table->string('skills')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('github_profile')->nullable();
            $table->integer('mentorship_availability')->default(1);
            $table->string('area_of_interest')->nullable();
            $table->integer('webinars_participation')->default(1);
            $table->string('current_city')->nullable();
            $table->string('current_country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->dropColumn([
                'contact_no',
                'date_of_birth',
                'specialization',
                'current_job',
                'company_name',
                'industry',
                'experience',
                'skills',
                'linkedin_profile',
                'github_profile',
                'mentorship_availability',
                'area_of_interest',
                'webinars_participation',
                'current_city',
                'current_country',
            ]);
        });
    }
};
