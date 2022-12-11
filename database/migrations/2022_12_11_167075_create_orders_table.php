<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id',11);
            $table->string('name')->nullable()->default('NULL');
            $table->string('email',30)->nullable()->default('NULL');
            $table->string('phone',20)->nullable()->default('NULL');
            $table->string('amount', 8,2)->nullable()->default('NULL');
            $table->text('address');
            $table->string('status',10)->nullable()->default('NULL');
            $table->string('transaction_id')->nullable()->default('NULL');
            $table->string('currency',20)->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
