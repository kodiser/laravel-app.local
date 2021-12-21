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
            $table->id(); // $table->bigIncrements('id'); same construction
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('body')->unique();
            $table->string('img');
            $table->timestamps();
            // created_at
            // updated_at создаются отдельно
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