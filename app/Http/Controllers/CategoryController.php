<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\StoreCategoryRequest;
use  RealRashid\SweetAlert\Facades\Alert as Alert;

class CategoryController extends Controller
{
    public function raha(){
        $categories=Category::paginate(200);
        return view('categories.inex', compact('categories'));
    }
    public function store(\App\Http\Requests\StoreCategoryRequest $request){
      try {
        Category::create([
           'name'=> $request->CatName,
           'description'=>$request->CatDesc]);
           alert ::success('success','Category added successfully');
           return redirect()->route('category.index');
      }

      catch (\Throwable $th) {
        return $th->getMessage();
      }
    }
    public function update(\App\Models\Request $request){

    }
}
