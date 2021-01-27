<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMottoesTable extends Migration
{
    public function up()
    {
        Schema::create('mottoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('core_values');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
