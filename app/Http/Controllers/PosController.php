<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PosController extends Controller
{
    public function index(){
    	$products = Product::join('suppliers', 'products.supplier_id', 'suppliers.id')
    						 ->join('categories', 'products.category_id', 'categories.id')
    				->select('products.id', 'products.name as product',
    						'products.details','products.buying_price', 'products.product_code','products.selling_price','products.buying_date', 'products.stock','products.status', 'categories.name as category','suppliers.name as supplier')
    				->get();
    	return view('admin.pages.pos', compact('products'));
    }

    public function cart(){
    	$products = Product::join('suppliers', 'products.supplier_id', 'suppliers.id')
    						 ->join('categories', 'products.category_id', 'categories.id')
    				->select('products.id', 'products.name as product',
    						'products.details','products.buying_price', 'products.product_code','products.selling_price','products.buying_date', 'products.stock','products.status', 'categories.name as category','suppliers.name as supplier')
    				->get();
    	return view('admin.pages.cart', compact('products'));
    }
}
