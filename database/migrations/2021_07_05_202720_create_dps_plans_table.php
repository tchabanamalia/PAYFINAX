<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpsPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dps_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('per_installment', 18,8);
            $table->integer('installment_interval')->comment('In Day');
            $table->integer('total_installment');
            $table->decimal('interest_rate', 18,2);
            $table->decimal('final_amount', 18,8);
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
        Schema::dropIfExists('dps_plans');
    }
}
