<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateNutritionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('ore.nutrition.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->float('calories')->nullable();
            $table->float('salt')->nullable();
            $table->float('protein')->nullable();
            $table->float('fibre')->nullable();
            $table->float('carbohydrate')->nullable();
            $table->float('sugars')->nullable();
            $table->float('fat')->nullable();
            $table->float('saturates')->nullable();
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
        Schema::dropIfExists(Config::get('ore.nutrition.table'));
    }
}
