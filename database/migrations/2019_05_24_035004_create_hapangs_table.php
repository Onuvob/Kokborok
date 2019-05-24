<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHapangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hapangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_word_id');
            $table->string('meaning');
            $table->foreign('user_word_id')
                ->references('id')
                ->on('user_word')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hapangs');
    }
}
