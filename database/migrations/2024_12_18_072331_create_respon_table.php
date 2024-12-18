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
        Schema::create('respon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengaduan');
            $table->unsignedBigInteger('id_user'); //admin yang menanggapi.
            $table->date('tanggal_respon');
            $table->text('respon');
            $table->foreign('id_pengaduan')->on('pengaduan')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respon');
    }
};
