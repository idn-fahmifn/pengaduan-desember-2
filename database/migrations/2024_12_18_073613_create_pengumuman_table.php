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
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user'); //authors
            $table->string('judul_pengumuman');
            $table->string('thumbnail');
            $table->date('tanggal');
            $table->text('pengumuman');
            $table->string('slug')->unique();

            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman');
    }
};
