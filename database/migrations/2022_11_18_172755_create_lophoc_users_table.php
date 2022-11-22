<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lophoc_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lophoc_id');
            $table->unsignedBigInteger('sv_id')->nullable();
            $table->unsignedBigInteger('giaovien_id');
            $table->timestamps();
            $table->foreign('lophoc_id')->references('id')->on('lophocs')->onDelete('cascade');
            $table->foreign('sv_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('giaovien_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lophoc_users');
    }
};
