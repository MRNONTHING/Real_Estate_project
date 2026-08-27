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
        Schema::create('propreties', function (Blueprint $table) {
            $table->id();

            $table->foreinId('User_id')->constrained()->casacadeOnDelete();
            $table->string('Title'); //about title of the house : 100 meter apartment
            $table->string('Category'); // which catrgury? apartmant,house,field?
            $table->enum('type',['Rent'],['Sell']); //Sell or rent?
            $table->unsignedBiginteger('Price');
            $table->unsignedBiginteger('Rent_price')->nullable()->default(0);
            $table->integer('Area'); // how many meter is?
            $table->integer('Rooms');
            $table->string('City');
            $table->text('Address')->nullable();
            $table->text('Description')->nullabe;
            $table->string('image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propreties');
    }
};
