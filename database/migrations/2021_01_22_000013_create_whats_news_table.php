<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatsNewsTable extends Migration
{
    public function up()
    {
        Schema::create('whats_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('desciption')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
