<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('plot_number');
            $table->string('name_of_plot');
            $table->string('name_of_crop');
            $table->string('number_of_acres');
            $table->string('date_of_allocation');
            $table->foreignId('created_by');
            $table->enum('harvest_status',['done','pending'])->default('pending');
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
        Schema::dropIfExists('plots');
    }
};
