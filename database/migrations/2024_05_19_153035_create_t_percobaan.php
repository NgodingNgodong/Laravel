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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->string('percobaan1', 10);
            $table->string('percobaan2', 10);
            $table->string('percobaan3', 10);
            $table->string('percobaan4', 10);
            $table->string('percobaan5', 10);
            $table->string('percobaan6', 10);
            $table->string('percobaan7', 10);
            $table->string('percobaan8', 10);
            $table->string('percobaan9', 10);
            $table->string('percobaan10', 10);
            $table->string('percobaan11', 10);
            $table->string('percobaan12', 10);
            $table->string('percobaan13', 10);
            $table->string('percobaan14', 10);
            $table->string('percobaan15', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_percobaan');
    }
};
