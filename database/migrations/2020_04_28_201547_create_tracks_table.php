<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tracks', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('picture')->nullable();
      $table->string('description');
      $table->string('source');
      $table->string('link')->nullable();
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
    Schema::dropIfExists('tracks');
  }
}
