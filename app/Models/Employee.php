<?php

namespace App\Models;

// use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Employee extends Model
{
    use HasFactory;
    // use UUID;
    // use HasUuids;

    protected $fillable =
    [
        'name',
        'email',
        'phone_no',
        'gender',
        'age',
        'serial_id'
    ];

    protected $hidden = [
        'id'
    ];
}
