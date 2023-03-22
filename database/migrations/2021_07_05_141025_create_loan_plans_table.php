<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('minimum_amount', 18,8);
            $table->decimal('maximum_amount', 18,8);
            $table->decimal('per_installment', 8,2)->comment('%');
            $table->integer('installment_interval')->comment('In Day');
            $table->integer('total_installment');
            $table->text('instruction')->nullable();
            $table->text('required_information')->nullable();
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
        Schema::dropIfExists('loan_plans');
    }
}
