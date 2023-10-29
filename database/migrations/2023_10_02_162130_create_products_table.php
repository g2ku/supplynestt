<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD:database/migrations/2023_10_02_162130_create_products_table.php
            $table->string('products');
            $table->string('tag');
            $table->string('phone');
=======
            $table->string('price');
            $table->string('description');
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566:database/migrations/2021_04_09_060958_create_products_table.php
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
