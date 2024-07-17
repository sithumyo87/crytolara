<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','min_amt','max_amt', 'percent', 'disabled'
    ];

    protected function getPagination($search=null){
        return $this->where('disabled', false)->paginate(paginateCount());
    }
}
