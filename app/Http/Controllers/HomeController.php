<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\DauThau;

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

    public function process(Request $request){
        $dauthaus = DauThau::where('status', 2)->orderBy('id', 'desc')->get();

        foreach($dauthaus as $duan){
            echo $duan->id . "<br />";
            flush();
            $arrXuLyInfo1 = Helper::xuLyInfo1($duan);
            $arrXuLyInfo2 = Helper::xuLyInfo2($duan);
            $arrXuLyInfo3 = Helper::xuLyInfo3($duan);
            $arrXuLyInfo4 = Helper::xuLyInfo4($duan);
            $duan->status = 3;
            $duan->save();
        }
    }

    public function test(){
        $to_name = "Tuantt";
        $to_email = "tuantt6393@gmail.com";
        $data = array("name"=>"Ogbonna Vitalis", "body" => "A test mail");
        \Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("Laravel Test Mail");
            $message->from(config('mail.username'),"Test Mail");
        });
    }
}
