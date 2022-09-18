<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landmarks_content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("landmark_id");
            $table->text("content1");
            $table->text("content2");
            $table->text("content3");
            $table->text("content4");
            $table->string("photo1",255);
            $table->string("photo2",255);
            $table->foreign("landmark_id")->references("id")->on("landmarks_main");
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
        Schema::dropIfExists('landmarks_content');
    }
};
