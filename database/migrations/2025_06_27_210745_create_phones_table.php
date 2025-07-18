c<?php

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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();

            $table->string('number');
           
            # ONE TO ONE 
            // $table->foreignId('user_id')
            // ->constrained()
            // ->onDelete('cascade')
            // ->onUpdate('cascade');

            # ONE TO ONE morphs
            $table->morphs('phoneable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
