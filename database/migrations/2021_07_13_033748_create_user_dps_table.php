<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dps', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('plan_id');
            $table->string('trx', 40)->nullable();
            $table->decimal('per_installment', 18,8);
            $table->integer('installment_interval')->comment('In Day');
            $table->integer('total_installment');
            $table->integer('given_installment')->default(0);
            $table->decimal('interest_rate', 18,2);
            $table->tinyInteger('status')->default(1)->comment('1 = Running, 2 = Matured, 0 = Premature Withdrawn');
            $table->date('next_installment_date')->nullable();
            $table->date('matured_at')->nullable();
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
        Schema::dropIfExists('user_dps');
    }
}
