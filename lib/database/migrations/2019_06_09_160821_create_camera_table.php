<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCameraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camera', function (Blueprint $table) {
            $table->increments('cm_id')->unsigned();
            $table->string('cm_name');
            $table->string('cm_slug');
            $table->text('cm_discription');
            $table->string('cm_promotion');
            $table->string('cm_image');
            $table->string('cm_price');
            $table->tinyInteger('cm_status');
            $table->tinyInteger('cm_type');
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
        Schema::dropIfExists('camera');
    }
}
