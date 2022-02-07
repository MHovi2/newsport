<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publish_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('subtitle');
            $table->integer('category');
            $table->text('content');
            $table->string('image');
            $table->string('image_caption');
            $table->string('image_alt');
            $table->string('news_source');
            $table->text('short_description');
            $table->string('tags');
            $table->integer('lead');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publish_news');
    }
}
