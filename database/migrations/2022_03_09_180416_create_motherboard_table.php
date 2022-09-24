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
        Schema::create('MotherBoards', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('image')->nullable()->default(NULL);
            $table->string('constructeur');
            $table->string('format');
            $table->string('fréquence_mémoire');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->string('nom', 150);
            $table->string('proco_compatible');
            $table->string('socket');
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
        Schema::dropIfExists('motherboard');
    }
};
