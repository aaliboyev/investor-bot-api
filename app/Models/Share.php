<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Share extends Model
{
    protected $fillable = [
        'user_id',
        'portfolio_id',
        'code',
        'quantity',
        'amount',
        'total_bought',
        'total_sold',
        'total_bought_quantity',
        'total_sold_quantity',
        'total_profit',
        'total_profit_percentage',
        'profit_percentage_per_share',
        'avg_bought_price',
        'avg_sold_price',
        'stock_id',
    ];
}
