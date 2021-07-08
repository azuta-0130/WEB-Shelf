<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShelfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelf', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('main_title');
            $table->string('title_1');
            $table->string('image_name1')->nullable();
            $table->string('image_path1')->nullable();
            $table->string('title_2');
            $table->string('image_name2')->nullable();
            $table->string('image_path2')->nullable();
            $table->string('title_3');
            $table->string('image_name3')->nullable();
            $table->string('image_path3')->nullable();
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
        Schema::dropIfExists('shelf');
    }
}
