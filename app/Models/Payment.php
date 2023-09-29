<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'account_name',
        'account_number',
        'bank_type',
    ];

    /**
     * Get the cards that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function cards(): BelongsTo
    {
        return $this->belongsTo(Card::class, 'card_id');
    }
}
