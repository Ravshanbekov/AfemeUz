<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->integer('user_id'); 
            $table->string('check'); 
            $table->string('htype_id');
            $table->string('sale_id');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('price_som')->nullable();
            $table->string('price_usd')->nullable();
            $table->string('date');
            $table->string('room');
            $table->string('repair_id');
            $table->text('description')->nullable();
            $table->string('close')->nullable();
            $table->string('material_id');
            $table->string('region_id');
            $table->string('city_id');
            $table->string('street');
            $table->string('view');
            $table->string('house');
            $table->string('floor')->nullable();
            $table->string('flat')->nullable();
            $table->string('solt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
