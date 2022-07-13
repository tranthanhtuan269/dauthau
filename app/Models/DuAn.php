<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function creator()
    {
        return $this->belongsTo(BenMoiThau::class);
    }

    public function linhvuc()
    {
        return $this->belongsTo(LinhVuc::class);
    }

    public function hinhthucduthau()
    {
        return $this->belongsTo(HinhThucDuThau::class);
    }
}
