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
        Schema::create('auto_optional', function (Blueprint $table) {
            $table->unsignedBigInteger('auto_id');
            $table->foreign('auto_id')->references('id')->on('autos')->cascadeOnDelete();

            $table->unsignedBigInteger('optional_id');
            $table->foreign('optional_id')->references('id')->on('optionals')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_optional');
    }
};
