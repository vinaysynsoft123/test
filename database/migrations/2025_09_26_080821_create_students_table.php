<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->text('address')->nullable();
            $table->string('status')->default('pending'); // pending, confirmed, cancelled
            $table->text('message')->nullable();
            $table->string('class'); // Beginner, Intermediate, Advanced
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
