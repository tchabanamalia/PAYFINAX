<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fdrs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('plan_id');
            $table->string('trx', 40)->nullable();
            $table->decimal('amount', 18,8);
            $table->decimal('interest', 18,8);
            $table->integer('interest_interval')->comment('In Day');
            $table->decimal('profit', 18,8)->default(0);
            $table->tinyInteger('status')->default(1)->comment('1 = Running, 2= Completed');
            $table->date('next_return_date')->nullable();
            $table->date('locked_date')->nullable();
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
        Schema::dropIfExists('user_fdrs');
    }
}
