<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('word');
            $table->string('description');
            $table->string('image');
            $table->string('dendak');
            $table->string('fatung');
            $table->string('gaibing');
            $table->string('hapang');
            $table->string('kaibing');
            $table->string('kema');
            $table->string('khali');
            $table->string('kuki');
            $table->string('naitung');
            $table->string('tungbai');
            $table->string('uchoi');
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
        Schema::dropIfExists('words');
    }
}
