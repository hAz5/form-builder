<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('form_id');
            $table->string('label');
            $table->string('name');
            $table->string('value')->nullable();
            $table->jsonb('options')->nullable();
            $table->timestamps();
            $table->foreign('form_id')->references('id')->on('forms')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
}
