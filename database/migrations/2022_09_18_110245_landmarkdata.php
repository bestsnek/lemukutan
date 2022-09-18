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
        Schema::create('landmarks_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("landmark_id");
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
        Schema::dropIfExists('landmarks_data');
    }
};
