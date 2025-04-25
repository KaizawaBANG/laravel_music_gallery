<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('artist');
            $table->string('genre');
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};