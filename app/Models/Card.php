<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'code',
        'denomination_id',
        'status',
        'redeem_status'
    ];

    /**
     * Get the denomination that owns the Card
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function denominations(): BelongsTo
    {
        return $this->belongsTo(Denomination::class, 'denomination_id');
    }
}
