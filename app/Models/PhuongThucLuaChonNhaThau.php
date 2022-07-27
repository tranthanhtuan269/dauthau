<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuongThucLuaChonNhaThau extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function goithaus()
    {
        return $this->hasMany(GoiThau::class);
    }
}
