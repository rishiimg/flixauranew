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
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();    
            $table->string('email', 100)->nullable();        
            $table->string('phone', 15)->nullable();          
            $table->string('city', 100)->nullable();    
            $table->string('service', 100)->nullable(); 
            $table->string('budget', 50)->nullable();
            $table->text('message')->nullable();       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};
