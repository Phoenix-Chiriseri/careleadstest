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
        Schema::create('responde_c_lients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); // Foreign key column
            $table->unsignedBigInteger('provider_id'); // Foreign key column
            $table->string('username');
            $table->string('email');
            $table->string('status');
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('provider_id')->references('id')->on('care_providers');
            $table->unique(['client_id', 'provider_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responde_c_lients');
    }
};
