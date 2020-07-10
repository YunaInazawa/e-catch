<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('postal_code')->nullable();
            $table->string('street_addr')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->boolean('abort')->default(false);
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->unsignedinteger('store_id');
            $table->unsignedinteger('genre_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->onDelete('cascade');
            $table->foreign('store_id')
                ->references('id')->on('stores')
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
        Schema::dropIfExists('events');
    }
}
