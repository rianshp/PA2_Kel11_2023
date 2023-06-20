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
        Schema::create('malua', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable()->unique();
            $table->foreignId('id_user_jemaat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tanggal_baptis');
            $table->date('tanggal_sidi')->nullable();
            $table->foreignId('nats')->nullable();
            $table->string('pendeta')->nullable();
            $table->string('guru_jemaat')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_user_jemaat')->references('id')->on('user_jemaat');
            $table->foreign('nats')->references('id')->on('alkitab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('malua');
    }
};
