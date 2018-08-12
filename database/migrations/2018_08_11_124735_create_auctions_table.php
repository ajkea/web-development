<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('style');
            $table->integer('year');
            $table->integer('width');
            $table->integer('height');
            $table->integer('depth')
                ->nullable();
            $table->longText('description');
            $table->string('condition');
            $table->string('origin');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->integer('buy_now')
                ->nullable();
            $table->date('end_date');
            $table->integer('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('auctions');
    }
}
