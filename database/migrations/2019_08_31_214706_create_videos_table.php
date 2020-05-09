<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');$table->string('title')->default('');
            $table->string('image')->nullable();
            $table->bigInteger('slug_id')->unsigned();
            $table->foreign('slug_id')->references('id')->on('slugs')->onDelete('cascade');
            $table->string('keywords')->default('')->nullable();
            $table->string('mdescription')->default('')->nullable();
            $table->bigInteger('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('users');
            $table->bigInteger('cid')->nullable()->unsigned();
            $table->foreign('cid')->references('id')->on('cate_videos');
            $table->text('link');
            $table->boolean('feature')->default(0);
            $table->integer('viewcount')->default(0);
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
        Schema::dropIfExists('videos');
    }
}
