<?php

namespace App\Helpers;

use App\Models\LinhVuc;
use App\Models\BenMoiThau;
use App\Models\LoaiGoiThau;
use App\Models\LoaiHopDong;
use App\Models\HinhThucDuThau;
use App\Models\HinhThucLuaChonNhaThau;
use App\Models\PhuongThucLuaChonNhaThau;

class Helper
{
    public function processDate($str){
        if(strlen($str) > 0){
            return \Carbon\Carbon::createFromFormat('d/m/Y H:i', $str)->format('Y-m-d H:i:s');
        }
    }

    public static function xuLyInfo1($duan){
        // read row 1
        $pieces = explode("</td> </tr> <tr> <td>", $duan->info1);
        foreach($pieces as $key=>$value){
            $pieces2 = explode("<td>", $value);
            if($key == 0){
                if(count($pieces2) > 2){
                    if($pieces2[1] == "Hình thức thông báo</td> "){
                        $duan->hinh_thuc_thong_bao = $pieces2[2];
                    }
                }
            }else{
                if($pieces2[0] == "Loại thông báo</td> "){
                    $duan->loai_thong_bao = $pieces2[1];
                }
                if($pieces2[0] == "Số TBMT</td> "){
                    $duan->so_tbmt = $pieces2[1];
                }
                if($pieces2[0] == "Số hiệu KHLCNT</td> "){
                    $duan->so_hieu_khlcnt = $pieces2[1];
                }
                if($pieces2[0] == "Tên KHLCNT</td> "){
                    $duan->ten_khlcnt = $pieces2[1];
                }
                if($pieces2[0] == "Lĩnh vực</td> "){
                    $linhvuc = LinhVuc::where('name', $pieces2[1])->first();
                    if($linhvuc){
                        $duan->linh_vuc = $linhvuc->id;
                    }else{
                        $linhvuc = new LinhVuc;
                        $linhvuc->name = $pieces2[1];
                        $linhvuc->save();
                        $duan->linh_vuc = $linhvuc->id;
                    }
                }
                if($pieces2[0] == "Bên mời thầu</td> "){
                    // $duan->ben_moi_thau = $pieces2[1];
                    $ben_moi_thau = BenMoiThau::where('name', $pieces2[1])->first();
                    if($ben_moi_thau){
                        $duan->ben_moi_thau = $ben_moi_thau->id;
                    }else{
                        $ben_moi_thau = new BenMoiThau;
                        $ben_moi_thau->name = $pieces2[1];
                        $ben_moi_thau->save();
                        $duan->ben_moi_thau = $ben_moi_thau->id;
                    }
                }
                if($pieces2[0] == "Tên gói thầu</td> "){
                    $duan->ten_goi_thau = $pieces2[1];
                }
                if($pieces2[0] == "Phân loại</td> "){
                    // $duan->phan_loai = $pieces2[1];
                    $phan_loai = LoaiGoiThau::where('name', $pieces2[1])->first();
                    if($phan_loai){
                        $duan->phan_loai = $phan_loai->id;
                    }else{
                        $phan_loai = new LoaiGoiThau;
                        $phan_loai->name = $pieces2[1];
                        $phan_loai->save();
                        $duan->phan_loai = $phan_loai->id;
                    }
                }
                if($pieces2[0] == "Tên dự toán mua sắm</td> "){
                    $duan->ten_du_toan_mua_sam = $pieces2[1];
                }
                if($pieces2[0] == "Chi tiết nguồn vốn</td> "){
                    $duan->chi_tiet_nguon_von = $pieces2[1];
                }
                if($pieces2[0] == "Loại hợp đồng</td> "){
                    // $duan->loai_hop_dong = $pieces2[1];
                    $loai_hop_dong = LoaiHopDong::where('name', $pieces2[1])->first();
                    if($loai_hop_dong){
                        $duan->loai_hop_dong = $loai_hop_dong->id;
                    }else{
                        $loai_hop_dong = new LoaiHopDong;
                        $loai_hop_dong->name = $pieces2[1];
                        $loai_hop_dong->save();
                        $duan->loai_hop_dong = $loai_hop_dong->id;
                    }
                }
                if($pieces2[0] == "Hình thức lựa chọn nhà thầu</td> "){
                    // $duan->hinh_thuc_lua_chon_nha_thau = $pieces2[1];
                    $hinh_thuc_lua_chon_nha_thau = HinhThucLuaChonNhaThau::where('name', $pieces2[1])->first();
                    if($hinh_thuc_lua_chon_nha_thau){
                        $duan->hinh_thuc_lua_chon_nha_thau = $hinh_thuc_lua_chon_nha_thau->id;
                    }else{
                        $hinh_thuc_lua_chon_nha_thau = new HinhThucLuaChonNhaThau;
                        $hinh_thuc_lua_chon_nha_thau->name = $pieces2[1];
                        $hinh_thuc_lua_chon_nha_thau->save();
                        $duan->hinh_thuc_lua_chon_nha_thau = $hinh_thuc_lua_chon_nha_thau->id;
                    }
                }
                if($pieces2[0] == "Phương thức LCNT</td> "){
                    $phuong_thuc_lcnt = PhuongThucLuaChonNhaThau::where('name', $pieces2[1])->first();
                    if($phuong_thuc_lcnt){
                        $duan->phuong_thuc_lcnt = $phuong_thuc_lcnt->id;
                    }else{
                        $phuong_thuc_lcnt = new PhuongThucLuaChonNhaThau;
                        $phuong_thuc_lcnt->name = $pieces2[1];
                        $phuong_thuc_lcnt->save();
                        $duan->phuong_thuc_lcnt = $phuong_thuc_lcnt->id;
                    }
                    // $duan->phuong_thuc_lcnt = $pieces2[1];
                }
                if($pieces2[0] == "Thời gian thực hiện hợp đồng</td> "){
                    $pieces3 = explode("</td>", $pieces2[1]);
                    $duan->thoi_gian_thuc_hien_hop_dong = $pieces3[0];
                }
            }
        }
        // $duan->status = 2;
        $duan->save();
    }

    public static function xuLyInfo2($duan){
        // read row 1
        $bodytag = str_replace(' colspan="3"', '', $duan->info2);
        $pieces = explode("</td> </tr> <tr> <td>", $bodytag);
        foreach($pieces as $key=>$value){
            $pieces2 = explode("<td>", $value);
            if($key == 0){
                if(count($pieces2) > 2){
                    if($pieces2[1] == "Hình thức dự thầu</td> "){
                        // $duan->hinh_thuc_du_thau = $pieces2[2];
                        $hinh_thuc_du_thau = HinhThucDuThau::where('name', $pieces2[2])->first();
                        if($hinh_thuc_du_thau){
                            $duan->hinh_thuc_du_thau = $hinh_thuc_du_thau->id;
                        }else{
                            $hinh_thuc_du_thau = new HinhThucDuThau;
                            $hinh_thuc_du_thau->name = $pieces2[2];
                            $hinh_thuc_du_thau->save();
                            $duan->hinh_thuc_du_thau = $hinh_thuc_du_thau->id;
                        }
                    }
                }
            }else if($key == 1){
                if(count($pieces2) > 2){
                    if($pieces2[0] == "Thời gian nhận E-HSDT từ ngày</td> "){
                        $duan->thoi_gian_nhan_e_hsdt_tu = Helper::processDate(substr($pieces2[1], 0, -6));
                        $duan->thoi_gian_nhan_e_hsdt_den = Helper::processDate($pieces2[3]);
                    }
                }
            }else{
                if($pieces2[0] == "Phát hành E-HSMT</td> "){
                    $duan->phat_hanh_e_hsmt = $pieces2[1];
                }
                if($pieces2[0] == "Thời gian hiệu lực của E-HSDT</td> "){
                    $duan->thoi_gian_hieu_luc_cua_e_hsdt = $pieces2[1];
                }
                if($pieces2[0] == "Địa điểm nhận HSDT</td> "){
                    $duan->dia_diem_nhan_hsdt = $pieces2[1];
                }
                if($pieces2[0] == "Địa điểm thực hiện gói thầu</td> "){
                    $duan->dia_diem_thuc_hien_goi_thau = substr($pieces2[1], 0, -20);
                }
            }
        }
        $duan->save();
    }

    public static function xuLyInfo3($duan){
        // read row 1
        $pieces = explode("</td> </tr> <tr> <td>", $duan->info3);
        foreach($pieces as $key=>$value){
            $pieces2 = explode("<td>", $value);
            if($key == 0){
                if(count($pieces2) > 2){
                    if($pieces2[1] == "Thời điểm đóng/mở thầu</td> "){
                        $duan->thoi_diem_dong_mo_thau = Helper::processDate($pieces2[2]);
                    }
                }
            }else{
                if($pieces2[0] == "Địa điểm mở thầu</td> "){
                    $duan->dia_diem_mo_thau = $pieces2[1];
                }
                if($pieces2[0] == "Dự toán gói thầu</td> "){
                    // $duan->du_toan_goi_thau = $pieces2[1];
                    $pieces3 = explode(" VND", $pieces2[1]);
                    $bodytag = str_replace('.', '', $pieces3[0]);
                    $duan->du_toan_goi_thau = $bodytag;
                }
            }
        }
        // $duan->status = 2;
        $duan->save();
    }

    public static function xuLyInfo4($duan){
        // read row 1
        $pieces = explode("</td> </tr> <tr> <td>", $duan->info4);
        foreach($pieces as $key=>$value){
            $pieces2 = explode("<td>", $value);
            if($key == 0){
                if(count($pieces2) > 2){
                    if($pieces2[1] == "Số tiền bảo đảm dự thầu</td> "){
                        $duan->so_tien_bao_dam_du_thau = $pieces2[2];
                        // $duan->du_toan_goi_thau = $pieces2[1];
                        $pieces3 = explode(" VND", $pieces2[2]);
                        $bodytag = str_replace('.', '', $pieces3[0]);
                        $duan->so_tien_bao_dam_du_thau = $bodytag;
                    }
                }
            }else{
                if($pieces2[0] == "Hình thức bảo đảm dự thầu</td> "){
                    $duan->hinh_thuc_bao_dam_du_thau = $pieces2[1];
                }
            }
        }
        // $duan->status = 2;
        $duan->save();
    }
}
