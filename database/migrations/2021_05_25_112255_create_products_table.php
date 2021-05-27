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
            $table->foreignId('subcategory_id');
            $table->string('name', 200);
            $table->string('slug',100)->unique();
            $table->string('brand', 100);
            $table->string('color', 100);
            $table->string('img', 300);
            $table->unsignedDecimal('price', $precision=8, $scale=2);
            $table->unsignedSmallInteger('availability');
            $table->text('description', 2000);
            $table->char('code', 10);
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
