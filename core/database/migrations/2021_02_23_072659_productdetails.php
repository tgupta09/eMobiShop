<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('brand', 100);
            $table->string('category', 100);
            $table->string('price', 10);
            $table->text('description');
            $table->string('sku', 100);
            $table->string('useremail', 100);
            $table->integer('is_submit');
            $table->integer('is_publish');
            $table->integer('is_reject');
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
        Schema::dropIfExists('productdetails');
    }
}
