<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_company', 'company_id', 'category_id');
    }
}
