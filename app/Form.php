<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'value',
        'category_id'
    ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
