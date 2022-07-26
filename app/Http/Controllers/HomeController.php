<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\DauThau;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\StoryResource;
use App\Http\Resources\ChapterResource;
use App\Models\Category;
use App\Models\Story;
use App\Models\Chapter;


class HomeController extends Controller
{
    public function index(Request $request){
        
        return view('index');
    }

    public function project(){
        return view('project');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function team(){
        return view('team');
    }

    public function testimonial(){
        return view('team');
    }

    public function contact(){
        return view('contact');
    }

    public function feature(){
        return view('feature');
    }

    public function quote(){
        return view('quote');
    }

    public function dauthau(){
        $duans = DauThau::orderBy('created_at', 'desc')->where('status', 3)->paginate(10);
        return view('dauthau', ['duans' => $duans]);
    }

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
