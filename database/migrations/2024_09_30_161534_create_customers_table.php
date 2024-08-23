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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_profilepicture');
            $table->string('fullname');
            $table->string('nickname');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->foreignId('pernikahan_id')->constrained(table: 'pernikahan', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('status_perokok');
            $table->foreignId('pendidikan_id')->constrained(table: 'pendidikan', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('telepon_id')->constrained(table:'nomor_telepon', column:'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('email');
            $table->foreignId('gaji_id')->constrained(table: 'gaji', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('agama_id')->constrained(table: 'agama', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
