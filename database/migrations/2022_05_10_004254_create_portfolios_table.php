<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreatePortfoliosTable extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->float('balance')->nullable(false);
            $table->float('total_invested')->nullable(false);
            $table->float('total_profit')->nullable(false);
            $table->float('total_shares_sold')->nullable(false);
            $table->float('total_shares_bought')->nullable(false);
            $table->float('total_shares_held')->nullable(false);
            $table->float('total_shares_sold_value')->nullable(false);
            $table->float('total_shares_bought_value')->nullable(false);
            $table->float('total_shares_held_value')->nullable(false);

            $table->integer('user_id')->nullable(false);
            $table->timestamps();
        });
    }
}
