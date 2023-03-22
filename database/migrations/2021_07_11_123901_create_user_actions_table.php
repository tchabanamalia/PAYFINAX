<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_actions', function (Blueprint $table) {
            $table->id();
            $table->integer('otp')->nullable();
            $table->string('type');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('plan_id')->nullable();
            $table->unsignedInteger('method_id')->nullable();
            $table->unsignedInteger('beneficiary_id')->nullable();
            $table->string('amount')->nullable();
            $table->tinyInteger('otp_type')->nullable()->comment('1 = 2fa, 2 = email, 3 = sms');
            $table->dateTime('send_at')->nullable();
            $table->dateTime('used_at')->nullable();
            $table->dateTime('expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_actions');
    }
}
