<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('source_id');
            $table->string('original_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('link');
            $table->timestamp('date_pub')->nullable();
            $table->timestamp('date_mod')->nullable();
            $table->longText('content');
            $table->longText('excerpt')->nullable();
            $table->string('image')->nullable();
            $table->boolean('featured')->nullable();
            $table->timestamps();

            $table->foreign('source_id')->references('id')->on('sources')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
