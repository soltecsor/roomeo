<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('inst_title');
            $table->string('inst_subtitle');
            $table->string('inst_description');
            $table->string('inst_title_img')->default('about_02.jpg');
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
        Schema::dropIfExists('institutional');
    }
}
