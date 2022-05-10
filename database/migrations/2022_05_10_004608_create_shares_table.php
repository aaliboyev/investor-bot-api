<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateSharesTable extends Migration
{
    public function up(): void
    {
        Schema::create('shares', static function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->integer('portfolio_id')->nullable(false);
            $table->integer('stock_id')->nullable(false);
            $table->integer('quantity')->default(0);
            $table->string('code')->nullable(false);
            $table->float('amount')->default(.0);
            $table->float('total_bought')->default(.0);
            $table->float('total_sold')->default(.0);
            $table->float('total_profit')->default(.0);
            $table->float('total_profit_percentage')->default(.0);
            $table->float('profit_percentage_per_share')->default(.0);
            $table->float('avg_bought_price')->default(.0);
            $table->float('avg_sold_price')->default(.0);
            $table->integer('total_bought_quantity')->default(0);
            $table->integer('total_sold_quantity')->default(0);
            $table->timestamps();
        });
    }
}
