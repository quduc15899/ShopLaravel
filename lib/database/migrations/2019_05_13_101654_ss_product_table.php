<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SsProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
           $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('short_disc');
            $table->text('discription');
            $table->string('promotion');
            $table->string('image');
            $table->string('price');
            $table->string('title_tag');
            $table->text('disc_tag');
            $table->tinyInteger('status');
            $table->tinyInteger('prod_cate');
            $table->tinyInteger('prod_type');
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
        //
    }
}
