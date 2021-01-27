<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('professionalism');
            $table->longText('line_of_work');
            $table->text('file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
