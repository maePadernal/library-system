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
        Schema::create('account_information', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->string('first_name');
            $table->string ('last_name');
            $table->string('student_type');
            $table->string('course_name')->nullable();
            $table->string('year_level')->nullable();
            $table->string('student_id')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('department')->nullable();
            $table->string('position')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('account_information');
    }
};
