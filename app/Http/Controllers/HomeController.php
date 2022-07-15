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
        $duans = DauThau::orderBy('created_at', 'desc')->where('status', 3)->paginate(15);
        return view('home', ['duans' => $duans]);
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

    public function getCategories() {
        return CategoryResource::collection(Category::all());
    }

    public function getStories(Request $request, $id) {
        return CategoryResource::collection(Story::where('category_id', $id)->get());
    }

    public function getChapters(Request $request, $id) {
        return StoryResource::collection(Chapter::where('category_id', $id)->get());
    }

    public function getChapter(Request $request, $id) {
        return ChapterResource::collection(Chapter::find($id));
    }
}
