<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionAndVisionsTable extends Migration
{
    public function up()
    {
        Schema::create('mission_and_visions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('mission');
            $table->longText('vision');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
