<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_banks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->decimal('minimum_limit', 18, 8)->default(0);
            $table->decimal('maximum_limit', 18, 8)->default(0);

            $table->decimal('daily_maximum_limit', 18, 8)->default(0);
            $table->decimal('monthly_maximum_limit', 18, 8)->default(0);
            $table->integer('monthly_total_transaction')->default(0);
            $table->integer('daily_total_transaction')->default(0);

            $table->decimal('fixed_charge', 18, 8)->default(0);
            $table->decimal('percent_charge', 18, 2)->default(0);
            $table->string('processing_time', 100);
            $table->text('user_data')->nullable();
            $table->text('instruction')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('other_banks');
    }
}
