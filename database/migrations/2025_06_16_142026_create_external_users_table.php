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
        Schema::create('external_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('internal_users')->onDelete('cascade');
            $table->string('phone_2');
            $table->string('address');
            $table->date('dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_users');
    }
};
