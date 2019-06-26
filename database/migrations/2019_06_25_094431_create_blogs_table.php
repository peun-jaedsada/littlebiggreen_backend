<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('catagory_id');
            $table->string('blog_meta_tag')->nullable();
            $table->string('blog_meta_title')->nullable();
            $table->text('blog_meta_description')->nullable();
            $table->string('blog_title');
            $table->string('blog_subtitle');
            $table->string('blog_picture_title');
            $table->string('blog_picture_alt');
            $table->string('blog_picture_id');
            $table->string('blog_picture');
            $table->string('blog_picture_title_thumbnail');
            $table->string('blog_picture_alt_thumbnail');
            $table->string('blog_picture_id_thumbnail');
            $table->string('blog_picture_thumbnail');
            $table->string('blog_picture_sm');
            $table->text('blog_description');
            $table->integer('blog_highlight');
            $table->integer('status');
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
        Schema::dropIfExists('blogs');
    }
}
