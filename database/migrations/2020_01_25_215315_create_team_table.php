<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team_title');
            $table->string('team_subtitle');
            $table->string('team_member_one_img');
            $table->string('team_member_one_name');
            $table->string('team_member_one_function');
            $table->string('team_member_one_description');
            $table->string('team_member_two_img');
            $table->string('team_member_two_name');
            $table->string('team_member_two_function');
            $table->string('team_member_two_description');
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
        Schema::dropIfExists('teams');
    }
}
