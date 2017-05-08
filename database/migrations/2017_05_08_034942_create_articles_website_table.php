<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_website', function (Blueprint $table) {
            $table->integer('article_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->timestamps();
            $table->primary(['article_id','website_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_website');
    }
}
