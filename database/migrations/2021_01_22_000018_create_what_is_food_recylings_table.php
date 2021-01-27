<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatIsFoodRecylingsTable extends Migration
{
    public function up()
    {
        Schema::create('what_is_food_recylings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
