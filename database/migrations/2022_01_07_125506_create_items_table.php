<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->foreign('trade_id')->references('id')->on('trades');
            $table->date('month');
            $table->tinyInteger('active')->default('1');
            $table->decimal('revenue', 14, 2)->nullable();
            $table->decimal('cost', 14, 2)->nullable();
            $table->decimal('estimate', 14, 2)->nullable();
            $table->decimal('actual', 14, 2)->nullable();
            $table->decimal('amount_bool', 14, 2)->nullable();
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
        Schema::dropIfExists('items');
    }
}
