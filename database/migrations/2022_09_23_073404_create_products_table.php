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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('color');
            $table->string('category');
            $table->string('capa');
            $table->string('size');
            $table->string('particulars');
            $table->string('brand');
            $table->longText('description');
            $table->integer('qtd');
            $table->integer('amount');
            $table->enum('status', ['available', 'unavailable'])->default('unavailable');
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
        Schema::dropIfExists('products');
    }
};
