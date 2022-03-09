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
        Schema::table('config', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cpu_id')->references('id')->on('CPUs');
            $table->foreign('ram_id')->references('id')->on('RAMs');
            $table->foreign('motherboard_id')->references('id')->on('MotherBoards');
            $table->foreign('psu_id')->references('id')->on('PSUs');
            $table->foreign('gpu_id')->references('id')->on('GPUs');
            $table->foreign('hdd_id')->references('id')->on('HDDs');
            $table->foreign('ssd_id')->references('id')->on('SSDs');
            $table->foreign('cooling_id')->references('id')->on('Coolings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('config', function (Blueprint $table) {
            $table->dropForeign('config_user_id_foreign');
            $table->dropForeign('config_cpu_id_foreign');
            $table->dropForeign('config_ram_id_foreign');
            $table->dropForeign('config_motherboard_id_foreign');
            $table->dropForeign('config_psu_id_foreign');
            $table->dropForeign('config_gpu_id_foreign');
            $table->dropForeign('config_hdd_id_foreign');
            $table->dropForeign('config_ssd_id_foreign');
            $table->dropForeign('config_cooling_id_foreign');
        });
    }
};
