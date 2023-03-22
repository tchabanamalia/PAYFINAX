<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdrPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdr_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('minimum_amount', 18,8);
            $table->decimal('maximum_amount', 18,8);
            $table->integer('interest_interval')->comment('In Day');
            $table->decimal('interest_rate', 18,2);
            $table->integer('locked_days');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('fdr_plans');
    }
}
