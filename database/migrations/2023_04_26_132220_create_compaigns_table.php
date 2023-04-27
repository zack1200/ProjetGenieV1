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
        Schema::create('compaigns', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);           
            $table->text('description')->nullable();
            $table->string('start_date',50);
            $table->string('end_date',50);
            $table->boolean('actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compaigns');
    }
};
