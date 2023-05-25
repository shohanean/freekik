<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->float('amount', 8, 2);
            $table->integer('withdraw_method')->comments('1Cash|2Bkash|3Bank');
            $table->longText('withdraw_remarks');
            $table->integer('admin_user_id')->nullable();
            $table->longText('admin_remarks')->nullable();
            $table->integer('status')->default(1)->comments('1Send|2Accepted|3Cancel');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraws');
    }
};
