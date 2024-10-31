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
        
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('omschrijving')->nullable()->change(); // Maak omschrijving nullable
            $table->decimal('budget', 8, 2)->nullable()->change(); // Maak budget nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('omschrijving')->nullable(false)->change(); 
            $table->decimal('budget', 8, 2)->nullable(false)->change(); 
        });
    }
};
