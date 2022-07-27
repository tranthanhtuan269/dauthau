<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoiThau extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dau_thaus';

    public function creator()
    {
        return $this->belongsTo(BenMoiThau::class, 'ben_moi_thau');
    }

    public function linhvuc()
    {
        return $this->belongsTo(LinhVuc::class, 'linh_vuc');
    }

    public function hinhthucduthau()
    {
        return $this->belongsTo(HinhThucDuThau::class, 'hinh_thuc_du_thau');
    }
}
