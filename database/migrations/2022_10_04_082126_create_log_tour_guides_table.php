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
        Schema::create('log_tour_guides', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("landmark_id");
            $table->string("namaTourGuide",255);
            $table->integer("jumlahPengunjung");
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
        Schema::dropIfExists('log_tour_guides');
    }
};
