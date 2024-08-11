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
        Schema::create('forgot_password_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('roll_number');
            $table->boolean('is_resolved')->default(false);
            $table->timestamps();

            $table->foreign('roll_number')->references('roll_no')->on('alumnis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forgot_password_requests');
    }

};
