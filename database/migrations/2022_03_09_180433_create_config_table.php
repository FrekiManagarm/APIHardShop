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
            $table->integer('use')->nullable()->default(NULL);
            $table->integer('current_step')->nullable()->default(NULL);
            $table->integer('status')->nullable()->default(NULL);
            $table->unsignedBigInteger('cpu_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('ram_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('motherboard_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('psu_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('gpu_id')->nullable()->default(NULL);
            $table->unsignedBigInteger("hdd_id")->nullable()->default(NULL);
            $table->unsignedBigInteger('ssd_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('cooling_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('case_id')->nullable()->default(NULL);
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
