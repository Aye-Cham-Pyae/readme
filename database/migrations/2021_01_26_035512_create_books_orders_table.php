<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_orders', function (Blueprint $table) {
            $table->id();
            $table->string('qty');
            $table->foreignId('book_id')->references('id')->on('books')->onDeletes('cascade');
            $table->foreignId('order_id')->references('id')->on('orders')->onDeletes('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_orders');
    }
}
