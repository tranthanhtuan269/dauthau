<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhThucDuThau extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function goithaus()
    {
        return $this->hasMany(GoiThau::class, 'hinh_thuc_du_thau');
    }
}
