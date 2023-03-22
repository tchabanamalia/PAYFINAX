<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('plan_id');
            $table->string('trx', 40)->nullable();
            $table->decimal('amount', 18,8);
            $table->decimal('per_installment', 18,8);
            $table->integer('installment_interval')->comment('Days');
            $table->integer('total_installment');
            $table->integer('given_installment')->default(0);
            $table->decimal('paid_amount', 18,8)->default(0);
            $table->decimal('final_amount', 18,8);
            $table->text('user_details')->nullable();
            $table->text('admin_feedback')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Requested, 1 = Running, 2 = Paid, 3 = Rejected');
            $table->date('next_installment_date')->nullable();
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
        Schema::dropIfExists('user_loans');
    }
}
