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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categories_id')->nullable()->unsigned()->index();
            $table->string('name');
            $table->string('imagePath');
            $table->text('description')->nullable();
            $table->integer('previous_price')->nullable();
            $table->integer('current_price')->nullable();
            $table->string('status')->default('In Stock');
            $table->bigInteger('quantity')->unsigned()->index()->default( 20 );      
            $table->bigInteger('user_id')->unsigned()->index()->default( 2 );
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
