<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
        });
        Schema::table('stores', function (Blueprint $table) {
          $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
          $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
              $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        Schema::table('categories', function (Blueprint $table) {
           $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
        Schema::table('orders', function (Blueprint $table) {
           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('stocks', function (Blueprint $table) {
           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
        Schema::table('sales', function (Blueprint $table) {
          $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
