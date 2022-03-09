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
        Schema::create('boitiers', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('image')->nullable()->default(NULL);
            $table->boolean('RGB');
            $table->boolean('alim_inclus');
            $table->string('couleur');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->string('facade_laterale');
            $table->string('format');
            $table->string('nom');
            $table->boolean("ventilateur");
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
        Schema::dropIfExists('boitier');
    }
};
