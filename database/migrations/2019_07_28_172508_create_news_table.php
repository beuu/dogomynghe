<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('');
            $table->string('image')->nullable();
            $table->bigInteger('slug_id')->unsigned();
            $table->foreign('slug_id')->references('id')->on('slugs')->onDelete('cascade');
            $table->bigInteger('cid')->nullable()->unsigned();
            $table->foreign('cid')->references('id')->on('category_news');
            $table->string('keywords')->default('')->nullable();
            $table->string('mdescription')->default('')->nullable();
            $table->bigInteger('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('users');
            $table->text('description');
            $table->longText('content');
            $table->boolean('feature')->default(0);
            $table->boolean('public')->default(1);
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
        Schema::dropIfExists('news');
    }
}
