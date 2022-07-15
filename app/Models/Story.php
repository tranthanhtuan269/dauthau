<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
