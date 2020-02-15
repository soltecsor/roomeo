<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('icon_one')->default('services_01.png');
            $table->string('service_one_title');
            $table->string('service_one_description');
            $table->string('icon_two')->default('services_02.png');
            $table->string('service_two_title');
            $table->string('service_two_description');
            $table->string('icon_three')->default('services_03.png');
            $table->string('service_three_title');
            $table->string('service_three_description');
            $table->string('icon_four')->default('services_04.png');
            $table->string('service_four_title');
            $table->string('service_four_description');
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
        Schema::dropIfExists('services');
    }
}
