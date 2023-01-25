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
        Schema::create('password_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('element');
            $table->integer('discovery_year');
            $table->string('text', 1000);
            $table->string('code', 6)->nullable();
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_solutions');
    }
};
