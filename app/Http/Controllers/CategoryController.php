<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        if($category){
            return view('nganhNghe.view', ['category' => $category]);
        }else{
            return abort('404');
        }
    }
}
