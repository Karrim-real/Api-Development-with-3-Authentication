<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'receiver_email',
        'card_id',
        'hash',
        'status',
        'amount_paid',
        'reference',
        'account_type',
        'account_number',
        'bank_type',
    ];
}
