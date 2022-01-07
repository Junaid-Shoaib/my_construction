<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('name');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('active')->default('1');
            $table->decimal('revenue', 14, 2)->nullable();
            $table->decimal('cost', 14, 2)->nullable();
            $table->decimal('estimate', 14, 2)->nullable();
            $table->decimal('actual', 14, 2)->nullable();
            $table->boolean('revenue_bool')->default(true);
            $table->boolean('estimate_bool')->default(true);
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
        Schema::dropIfExists('trades');
    }
}
