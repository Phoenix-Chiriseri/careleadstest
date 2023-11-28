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
        Schema::create('requested_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id'); // Foreign key column
            $table->unsignedBigInteger('provider_id'); // Foreign key column
            $table->string('username');
            $table->string('email');
            $table->string('services_provided');
            $table->string('service_provider_contact');
            $table->string('user_contact');
            $table->string('service_options');
            $table->string('ref_number');
            $table->string('city');
            $table->string('house_number');
            $table->string('description');
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('provider_id')->references('id')->on('care_providers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requested_services');
    }
};
