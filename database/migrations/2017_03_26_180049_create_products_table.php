<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Realizar cambios
        Schema::create('products',function(Blueprint $tabla){ //Schema clase para crear tablas en BD
            $tabla->increments("id");
            $tabla->integer('user_id')->unsigned()->index();
            $tabla->string('title');
            $tabla->text('description');
            $tabla->decimal('pricing',9,2); //Centavos,nueves digitos y dos puntos decimales
            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Revertis los mismos cambios
        Schema::drop('products');
    }
}
