<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{ 
   


   public function category(){
   	$category = Category::all();
    	return view('admin.pages.category', compact('category'));
   }


   public function storeCategory(Request $request){
   		$name = $request->name;

   		$obj = new Category();
   		$obj->name = $name;

   		if ($obj->save()) {
   		 return redirect()->to('category');
   		}
   } 
  

     public function editCategory($id){
             $category = Category::find($id);
            return view('admin.pages.editCategory', compact('category'));
          }


        public function updateCategory(Request $request, $id){
      
      $category = Category::find($id);

      $category->name = $request->name;

      if($category->save())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

    }


        public function deleteCategory($id){
       $obj = Category::find($id);
        if($obj->delete())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

    }

}