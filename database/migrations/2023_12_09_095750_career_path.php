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
        Schema::create('career', function (Blueprint $table) {
            $table->string('idKarir')->primary();
            $table->string('stream');
            $table->string('namaKarir');
            $table->string('level1');
            $table->string('level2');
            $table->string('level3');
            $table->string('level4');
            $table->string('level5');
            $table->rememberToken();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career');
    }
};
