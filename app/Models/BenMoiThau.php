<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenMoiThau extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function dauthaus()
    {
        return $this->hasMany(GoiThau::class, 'ben_moi_thau');
    }
}
