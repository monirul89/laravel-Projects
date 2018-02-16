<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcontents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vission_title');
            $table->string('vission_content');
            $table->string('mission_title');
            $table->string('mission_content');
            $table->string('goal_title');
            $table->string('goal_content');
            $table->tinyInteger('published_status');
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
        Schema::dropIfExists('addcontents');
    }
}
