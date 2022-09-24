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
        Schema::create('PSUs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('image')->nullable()->default(NULL);
            $table->string('certif')->nullable()->default(NULL);
            $table->string('format');
            $table->string('description')->nullable()->default(NULL);
            $table->string('marque');
            $table->string('modulaire');
            $table->string('nom');
            $table->integer('puissance');
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
        Schema::dropIfExists('psu');
    }
};
