<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('title');
            $table->string('sub_title');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->date('publish_date');
            $table->string('picture_title');
            $table->string('picture_id');
            $table->string('picture_alt');
            $table->string('picture');
            $table->string('picture_sm');
            $table->string('picture_thumbnail_title');
            $table->string('picture_thumbnail_id');
            $table->string('picture_thumbnail_alt');
            $table->string('picture_thumbnail');
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
        Schema::dropIfExists('activities');
    }
}
