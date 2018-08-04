<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCatNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->string('slug');
            $table->string('photo')->nullable();
            $table->integer('order');
            $table->integer('status');
            $table->integer('view')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_keyword')->nullable();
            $table->string('seo_description')->nullable();
            $table->integer('ishome');
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
        Schema::dropIfExists('cat_news');
    }
}
