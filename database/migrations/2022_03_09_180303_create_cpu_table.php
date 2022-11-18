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
        Schema::create('CPUs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('nom', 150);
            $table->string('image');
            $table->string('architecture');
            $table->string('cache');
            $table->string('chipset');
            $table->string('chipset_graphique');
            $table->string('frequence');
            $table->string('frequence_boost');
            $table->integer('nb_coeur');
            $table->integer('nb_threads');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->boolean('overclocking');
            $table->string('socket');
            $table->string('type');
            $table->string('link ')->nullable()->default(NULL);
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
        Schema::dropIfExists('cpu');
    }
};
