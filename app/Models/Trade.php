<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Trade extends Model
{
    protected $fillable = [
        'user_id',
        'stock_id',
        'portfolio_id',
        'share_id',
        'type',
        'action',
        'stock_code',
        'company_name',
        'order_number',
        'order_time',
        'trading_date',
        'settlement_date',
        'ordered_quantity',
        'ordered_price',
        'executed_quantity',
        'executed_price',
        'fee',
        'trading_tax',
        'income_tax',
        'special_tax',
        'surtax',
        'media_type',
        'trading_amount',
        'net_settlement_amount',
        'currency',
    ];
}
