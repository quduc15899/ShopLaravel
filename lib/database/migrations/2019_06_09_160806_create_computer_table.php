<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('computer', function (Blueprint $table) {
            $table->increments('cp_id')->unsigned();
            $table->string('cp_name');
            $table->string('cp_slug');
            $table->text('cp_discription');
            $table->string('cp_promotion');
            $table->string('cp_image');
            $table->string('cp_price');
            $table->tinyInteger('cp_status');
            $table->tinyInteger('cp_type');
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
        Schema::dropIfExists('computer');
    }
}
