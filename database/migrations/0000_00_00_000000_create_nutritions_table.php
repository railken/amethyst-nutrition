<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateNutritionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.nutrition.data.nutrition.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->float('calories')->nullable();
            $table->float('joules')->nullable();
            $table->float('salt')->nullable();
            $table->float('protein')->nullable();
            $table->float('fibre')->nullable();
            $table->float('carbohydrate')->nullable();
            $table->float('sugars')->nullable();
            $table->float('fat')->nullable();
            $table->float('saturates')->nullable();
            $table->string('nutritionable_type')->nullable();
            $table->integer('nutritionable_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.nutrition.data.nutrition.table'));
    }
}
