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
        Schema::create('check_ins', function (Blueprint $table) {
            $table->increments('checkIn_id');
            $table->integer('room_number')->unique();
            $table->string('Guest_Name', 100);
            $table->string('Room_Type', 100);
            $table->date('Arrival_Date');
            $table->date('Departure_Date');
            $table->integer('pax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_ins');
    }


    
};
