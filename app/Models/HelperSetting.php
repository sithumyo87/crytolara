<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelperSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','sort', 'image', 'disabled'
    ];

    protected function getPagination($search=null){
        return $this->where('disabled', false)->paginate(paginateCount());
    }
}
