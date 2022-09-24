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
        Schema::create('HDDs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('image')->nullable()->default(NULL);
            $table->integer('RPM');
            $table->integer('capacité');
            $table->string('format');
            $table->string('interface');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->string('marque');
            $table->integer('mémoire_cache');
            $table->string('nom');
            $table->string('transfert');
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
        Schema::dropIfExists('hdd');
    }
};
