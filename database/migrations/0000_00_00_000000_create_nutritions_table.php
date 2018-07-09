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
            $table->float('calories')->default(0);
            $table->float('salt')->default(0);
            $table->float('protein')->default(0);
            $table->float('fibre')->default(0);
            $table->float('carbohydrate')->default(0);
            $table->float('sugars')->default(0);
            $table->float('fat')->default(0);
            $table->float('saturates')->default(0);
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
