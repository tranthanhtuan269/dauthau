<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenMoiThau extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function duans()
    {
        return $this->hasMany(DuAn::class);
    }
}
