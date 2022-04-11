<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
use PDF;
class Product_Size_For_Plate_Making extends Controller{

	public function home(){
		$data = array();
		$data['get_all_product_size'] = DB::table("product_size_for_plate_making")->get();
		return view("admin/product-size-for-plate-making", $data);
	}
	public function add_new_product_size(){
		$data = array();
		return view("admin/add-new-product-size-for-plate-making", $data);
	}
	public function add_new_product_size_process(Request $request){
		$data['product_size'] = $request->product_size;
		$data['product_price'] = $request->product_price;
		$result = DB::table("product_size_for_plate_making")->insert($data);
		if($result==1){
			Session::flash('success','Product Size Successfully Added!...'); 
			return redirect('product-size-for-plate-making');
		}
	}
	public function edit_product_size($id){
		$data = array();
		$data['get_product_size_by_id'] = DB::table("product_size_for_plate_making")->where("product_size_id", $id)->get();
		return view("admin/edit-product-size-for-plate-making", $data);
	}
	public function edit_product_size_process(Request $request){
		$product_size_id = $request->product_size_id;
		$data['product_size'] = $request->product_size;
		$data['product_price'] = $request->product_price;
		$result = DB::table("product_size_for_plate_making")->where("product_size_id", $product_size_id)->update($data);
		if($result==1){
			Session::flash('success','Product Size Successfully Update!...'); 
			return redirect('product-size-for-plate-making');
		}else{
			Session::flash('success','Product Size Not Update!...'); 
			return redirect('product-size-for-plate-making');
		}
	}
	public function delete_product_size_process($id){
		DB::table("product_size_for_plate_making")->where("product_size_id", $id)->delete();
		Session::flash('success','Product Size Successfully Deleted!...'); 
		return redirect('product-size-for-plate-making');
	}
}