<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('');
            $table->string('image')->nullable();
            $table->bigInteger('slug_id')->unsigned();
            $table->foreign('slug_id')->references('id')->on('slugs')->onDelete('cascade');
            $table->string('keywords')->default('')->nullable();
            $table->string('description')->default('')->nullable();
            $table->bigInteger('pid')->default(0);
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
        Schema::dropIfExists('cate_videos');
    }
}
