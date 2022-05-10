<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Portfolio extends Model
{
    protected $fillable = [
        'name', 'balance', 'total_invested', 'total_profit',
        'total_shares_sold', 'total_shares_bought', 'total_shares_held',
        'total_shares_sold_value', 'total_shares_bought_value', 'total_shares_held_value',
        'user_id'
    ];
}
