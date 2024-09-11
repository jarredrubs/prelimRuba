<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pics', function (Blueprint $table) {
        $table->id();
        $table->string('pic_name');
        $table->date('date_taken');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pics');
}

};