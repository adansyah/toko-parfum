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
        Schema::create('kategories', function (Blueprint $table) {
            $table->id();
            $table->string('name_kategory');
            $table->enum('perbandingan', ['1:1', '1:2'])->default('1:1');
            $table->enum('botol', ['15ML', '25ML', '35ML', '50ML', '100ML'])->default('15ML');
            $table->string('bibit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategories');
    }
};
