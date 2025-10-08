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
        Schema::create('tbstudent', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('DOB')->nullable(true);
            $table->enum('gender',['m','f'])->default('m');
            $table->integer('score')->nullable(false)->default(0);
            $table->string('image')->nullable(true);
            $table->foreignId('users_id')->constrained('users')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbstudent');
    }
};
