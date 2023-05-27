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
        Schema::create('sapi_vaksin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sapi_id')->constrained('sapi');
            $table->integer('dosis')->default(1);
            $table->string('jenis');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sapi_vaksin');
    }
};
