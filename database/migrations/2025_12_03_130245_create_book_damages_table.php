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
        Schema::create('book_damages', function (Blueprint $table) {
            $table->id();
              $table->foreignId('borrowed_book_id')->constrained()->cascadeOnDelete();
                $table->string('title');
                $table->string('reason');
                $table->integer('fines');
                $table->integer('paid_amount');
                $table->integer('change');
                $table->string('status');
                $table->integer('paid_at');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_damages');
    }
};
