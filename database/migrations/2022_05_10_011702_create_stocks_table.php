<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateStocksTable extends Migration
{
    public function up(): void
    {
        Schema::create('stocks', static function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('code')->nullable(false);
            $table->float('current_price')->default(.0);
            $table->float('nominal_price')->default(.0);
            $table->float('base_price')->default(.0);
            $table->integer('in_trade')->default(0);
            $table->timestamps();
        });
    }
}
