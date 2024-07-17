<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','address','type', 'amount', 'status', 'disabled'
    ];

    protected function getPagination($search=null){
        return $this->where('disabled', false)->paginate(paginateCount());
    }
}
