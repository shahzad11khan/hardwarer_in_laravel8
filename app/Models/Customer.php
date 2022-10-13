<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id');//this is foregin id in this table
    }
}
