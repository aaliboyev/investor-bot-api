<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateTradesTable extends Migration
{
    public function up(): void
    {
        Schema::create('trades', static function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->integer('stock_id')->nullable(false);
            $table->integer('portfolio_id')->nullable(false);
            $table->integer('share_id')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('action')->nullable(false);
            $table->string('stock_code')->nullable(false);
            $table->string('company_name')->nullable(false);
            $table->integer('order_number')->nullable(false);
            $table->time('order_time')->nullable(false);
            $table->date('trading_date')->nullable(false);
            $table->date('settlement_date')->nullable(false);
            $table->integer('ordered_quantity')->nullable(false);
            $table->float('ordered_price')->nullable(false);
            $table->integer('executed_quantity')->nullable(false);
            $table->float('executed_price')->nullable(false);
            $table->float('fee')->nullable(false);
            $table->float('trading_tax')->nullable(false);
            $table->float('income_tax')->nullable(false);
            $table->float('special_tax')->nullable(false);
            $table->float('surtax')->nullable(false);
            $table->string('media_type')->nullable(false);
            $table->float('trading_amount')->nullable(false);
            $table->float('net_settlement_amount')->nullable(false);
            $table->string('currency')->nullable(false);
            $table->timestamps();
        });
    }
}
