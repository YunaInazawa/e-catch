<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('login_id');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('postal_code');
            $table->string('street_addr');
            $table->string('TEL');
            $table->string('rep_first_name');
            $table->string('rep_last_name');
            $table->boolean('permission')->default(false);
            $table->unsignedinteger('genre_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('genre_id')
                ->references('id')->on('genres')
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
        Schema::dropIfExists('stores');
    }
}
