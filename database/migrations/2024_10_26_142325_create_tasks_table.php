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
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('taak');
        $table->string('status');
        $table->date('deadline');
        $table->text('omschrijving'); // Dit moet null kunnen zijn
        $table->decimal('budget', 8, 2)->nullable(); // Dit moet ook null kunnen zijn
        $table->timestamps();
        
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
