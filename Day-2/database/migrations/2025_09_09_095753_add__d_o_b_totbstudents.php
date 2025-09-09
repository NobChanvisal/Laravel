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
        Schema::table('tbstudents', function (Blueprint $table) {
            //
            $table->date('DOB');
            $table->enum('gender', ['m','f']) ->default('m')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     * we can rollBack the migrations.
     * explain: u have been add column DOB ; if we use dropColumn in down() 
     *          u can rollBack to default table(no colunm DOB) that u can undo the change
     *          but if u not use u can undo u need to dropColumn by go to mysql 
     */
    public function down(): void
    {
        Schema::table('tbstudents', function (Blueprint $table) {
            //
            $table->dropColumn('DOB');
        });
    }
};
