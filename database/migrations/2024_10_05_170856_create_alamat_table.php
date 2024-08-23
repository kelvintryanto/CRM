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
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alamat');
            $table->string('alamat');
            $table->string('RT')->nullable();
            $table->string('RW')->nullable();
            $table->string('KM')->nullable();
            $table->foreignId('wilayah')->constrained(table: 'wilayah', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->foreignId('customer_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
