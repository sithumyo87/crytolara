<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'ffapi_key','receiver_address','eth_usdt1', 'eth_usdt2', 'disabled'
    ];
}
