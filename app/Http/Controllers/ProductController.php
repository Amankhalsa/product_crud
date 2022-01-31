<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index(){
    	$product = DB::table('products')->paginate(2);
    	return view('product.index',compact('product'));
    }
//create product 
    public function create(){
    	return view('product.create');
    }
//store product 

    public function store_product(Request $request){


    	$data =array();
    	$data['product_name']=$request->product_name;
    	$data['product_code']=$request->product_code;
    	$data['details']=$request->details;
    	$image = $request->file('logo');
    	if ($image) {
    		$image_name = date('dmy_H_s_i');
    		$ext = strtolower($image->getClientOriginalExtension());
    		$image_full_name = $image_name.'.'.$ext; 
    		$upload_path ='public/media/';
    		$image_url = $upload_path.$image_full_name;
    		$success = $image->move($upload_path,$image_full_name); 

    	}
    	$data['logo']=$image_url ;

    	$product = DB::table('products')->insert($data);
    	return redirect()->route('product.index')->with('success','Product Created Successfully');

    }
    // edit
    public function edit_product($id){
        $editdata =product::find($id);
      return view('product.edit',compact('editdata'));
    }
    //update product 

    public function update_product(Request $request, $id){

        $old_image = $request->old_image;

        $data =array();
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['details']=$request->details;
        $image = $request->file('logo');
        if ($image) {
            unlink($old_image);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext; 
            $upload_path ='public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name); 

        }
        $data['logo']=$image_url ;

        $product = DB::table('products')->where('id',$id)->update($data);
        return redirect()->route('product.index')->with('success','Product updated Successfully');
    }
    // product update
    public function delete_product($id){

        $data =DB::table('products')->where('id',$id)->first();
        $image = $data->logo;
        unlink($image);

        $product = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.index')->with('success','Product Deleted Successfully');
    }
    //show product 
    public function show_product($id){
        $data = DB::table('products')->where('id',$id)->first();

        return view('product.show', compact('data'));
    }
}
