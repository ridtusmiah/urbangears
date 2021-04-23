<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Image;
class ProductController extends Controller
{
    public function products(){
    	//$products = Product::all();
    	$products = Product::join('suppliers', 'products.supplier_id', 'suppliers.id')
    						 ->join('categories', 'products.category_id', 'categories.id')
    				->select('products.id', 'products.name as product',
    						'products.details','products.image as image','products.buying_price','products.selling_price','products.buying_date', 'products.stock','products.status', 'categories.name as category','suppliers.name as supplier')
    				->get();
    	return view('admin.pages.products', compact('products'));
    }

    public function addProduct(){
    	return view('admin.pages.addproduct');
    }
    public function storeProduct(Request $request){
		    

		     $validated = $request->validate([
		      
		        'name' => 'required',
		        'buying_price' => 'required',
		        'selling_price' => 'required',
		        'category_id' => 'required',
		        'supplier_id' => 'required',
		        'stock' => 'required',
		        'status' => 'required',
    ]);
		    
		    $name = $request->name;


		    $originalImage= $request->file('filename');
	        $thumbnailImage = Image::make($originalImage);

	        $thumbnailPath = public_path().'/admin/public/thumbnail/';
	        $originalPath = public_path().'/admin/public/images/';

			$thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
	        $thumbnailImage->resize(150,150);
	        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

	        


		    $details = $request->details;
		    $buying_price = $request->buying_price;
		    $selling_price = $request->selling_price;
		    $stock = $request->stock;
		    $category_id = $request->category_id;
		    $supplier_id = $request->supplier_id;
		    $buying_date = $request->buying_date;
		    $sort_order = $request->sort_order;
		    $status = $request->status;

		    

		    $obj = new Product();
		    

		    $obj->name = $name;
	        $obj->image=time().$originalImage->getClientOriginalName();
		    $obj->details = $details;
		    $obj->buying_price = $buying_price;
		    $obj->selling_price = $selling_price;
		    $obj->stock = $stock;
		    $obj->category_id = $category_id;
		    $obj->supplier_id = $supplier_id;
		    $obj->buying_date = $buying_date;
		    $obj->sort_order = $sort_order;
		    $obj->status = $status;


		       if($obj->save())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }
		   } 
		    

	 public function editProduct($id){
         $products = Product::find($id);
        return view('admin.pages.editproduct', compact('products'));
      }



     public function updateProduct(Request $request, $id){
      
     	$validated = $request->validate([
		      
		        'name' => 'required',
		        'buying_price' => 'required',
		        'selling_price' => 'required',
		        'category_id' => 'required',
		        'supplier_id' => 'required',
		        'stock' => 'required',
		        'status' => 'required',
    ]);

      $product = Product::find($id);

  		$product->name = $request->name;
	    $product->details = $request->details;
	    $product->buying_price = $request->buying_price;
	    $product->selling_price = $request->selling_price;
	    $product->stock = $request->stock;
	    $product->category_id = $request->category_id;
	    $product->supplier_id = $request->supplier_id;
	    $product->buying_date = $request->buying_date;
	    $product->sort_order = $request->sort_order;
	    $product->status = $request->status;
    		
      if($product->save())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

    }




    public function deleteProduct($id){
       $obj = Product::find($id);
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
 


