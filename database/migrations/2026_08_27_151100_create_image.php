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
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->condtrained()->cascadeOnDelete(); // if advertise eas deleted sol image must be deleted too

            $table->string('image_path'); // location of saving images
            $table->boolean('is_main')->default(false); // the imgae is main image not for cover
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image');
    }
};
