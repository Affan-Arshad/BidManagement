<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('iulaan_no')->nullable();
            $table->string('link')->nullable();
            $table->string('category')->nullable();
            $table->double('cost')->nullable();
            $table->double('duration')->nullable();
            $table->json('estimate')->nullable();
            $table->datetime('info_date')->nullable();
            $table->datetime('submission_date')->nullable();
            $table->datetime('agreement_date')->nullable();
            $table->integer('organization_id')->unsigned();
            $table->string('status_id');
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
        Schema::dropIfExists('bids');
    }
}
