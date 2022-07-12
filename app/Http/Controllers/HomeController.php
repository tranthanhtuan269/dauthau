<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\DauThau;

class HomeController extends Controller
{
    public function process(Request $request){
        $dauthaus = DauThau::where('status', 2)->get();

        foreach($dauthaus as $duan){
            $arrXuLyInfo1 = Helper::xuLyInfo1($duan);
            $arrXuLyInfo2 = Helper::xuLyInfo2($duan);
            $arrXuLyInfo3 = Helper::xuLyInfo3($duan);
            $arrXuLyInfo4 = Helper::xuLyInfo4($duan);
            $duan->status = 3;
            $duan->save();
        }
    }
}
