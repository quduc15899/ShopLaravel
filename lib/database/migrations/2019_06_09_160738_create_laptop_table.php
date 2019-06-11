<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('lt_id')->unsigned();
            $table->string('lt_name');
            $table->string('lt_slug');
            $table->text('lt_discription');
            $table->string('lt_promotion');
            $table->string('lt_image');
            $table->string('lt_price');
            $table->tinyInteger('lt_status');
            $table->tinyInteger('lt_type');
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
        Schema::dropIfExists('laptop');
    }
}
