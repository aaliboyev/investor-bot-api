<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Stock extends Model
{
    protected $fillable = [
        'type',
        'company_name',
        'code',
        'current_price',
        'in_trade',
        'nominal_price',
        'base_price'
    ];
}
