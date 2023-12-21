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
        Schema::create('intern', function (Blueprint $table) {
            $table->integer('id_internship');
            $table->unique('id_internship');
            $table->string('perusahaan');
            $table->string('role');
            $table->string('durasi');
            $table->string('lokasi');
            $table->string('stream');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern');
    }
};
