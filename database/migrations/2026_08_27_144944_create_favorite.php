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
        Schema::create('favorite', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOndelete(); // id of user that liked
            $table->foreignID('property_id')->constrained()->cascadeOndelete(); //id of advertise that was like by user

            $table->unique(['user_id','property_id']); // to prevent of double Likes

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite');
    }
};
