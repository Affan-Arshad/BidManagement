<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidBiddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_bidders', function (Blueprint $table) {
            $table->id();
            $table->integer('lot_id')->nullable()->unsigned();
            $table->integer('bid_id')->unsigned();
            $table->integer('bidder_id')->unsigned();
            $table->double('price')->unsigned();
            $table->integer('duration_days')->unsigned();
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
        Schema::dropIfExists('bid_bidders');
    }
}
