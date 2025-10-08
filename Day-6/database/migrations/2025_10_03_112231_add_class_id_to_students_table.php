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
        Schema::table('tbstudent', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('class_id')->nullable()->after('users_id'); 
        // Add foreign key if you have a 'classes' table
        $table->foreign('class_id')->references('id')->on('tbclasses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbstudent', function (Blueprint $table) {
            //
            $table->dropForeign(['class_id']);
            $table->dropColumn('class_id');
        });
    }
};
