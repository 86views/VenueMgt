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
        Schema::create('event_type_venue', function (Blueprint $table) {
            $table->unsignedInteger('venue_id');

            // $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');

            $table->unsignedInteger('event_type_id');

            // $table->foreign('event_type_id')->references('id')->on('event_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_type_venue');
    }
};
