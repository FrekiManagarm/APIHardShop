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
        Schema::create('Coolings', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('bruit');
            $table->string('format');
            $table->string('marque');
            $table->string('matériaux');
            $table->string('description', 600)->nullable()->default(NULL);
            $table->string('nom');
            $table->string('socket');
            $table->string('type');
            $table->string('image')->nullable()->default(NULL);
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
        Schema::dropIfExists('cooling');
    }
};
