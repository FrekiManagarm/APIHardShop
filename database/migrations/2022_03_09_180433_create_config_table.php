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
        Schema::create('config', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cpu_id');
            $table->unsignedBigInteger('ram_id');
            $table->unsignedBigInteger('motherboard_id');
            $table->unsignedBigInteger('psu_id');
            $table->unsignedBigInteger('gpu_id');
            $table->unsignedBigInteger("hdd_id");
            $table->unsignedBigInteger('ssd_id');
            $table->unsignedBigInteger('cooling_id');
            $table->unsignedBigInteger('case_id');
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
        Schema::dropIfExists('config');
    }
};
