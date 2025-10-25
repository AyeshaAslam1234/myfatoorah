<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'invoice_id',
        'customer_reference',
        'amount',
        'currency',
        'status',
        'payment_method',
    ];
}
