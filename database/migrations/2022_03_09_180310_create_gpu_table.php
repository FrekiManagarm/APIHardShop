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
        Schema::create('GPUs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('image')->nullable()->default(NULL);
            $table->string('nom', 150);
            $table->string('frequence');
            $table->string('frequence_boost')->nullable()->default(NULL);
            $table->integer('nb_coeur');
            $table->integer('nb_ventilateurs')->nullable()->default(NULL);
            $table->integer('nb_video_output');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->string('link');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpu');
    }
};
