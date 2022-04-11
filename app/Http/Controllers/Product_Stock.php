<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
use PDF;
class Product_Stock extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next){
      
       	if(!Session::has('user_name_login') || !Session::has('user_password_login')){ 
            return redirect('/'); 
        }
       
        return $next($request);
        });
    }
    public function show_all_stock_type(){
    	$data = array();
    	$data['get_all_stock_type'] = DB::table("stock_type")->get();
    	return view('admin/stock-type', $data);
    }
    public function add_new_stock_type(Request $request){
    	$data = array();
    	return view('admin/add-new-stock-type', $data);
    }
    public function add_new_stock_type_process(Request $request){
    	$data['stock_type_value'] = $request->stock_type_value;
    	$result = DB::table("stock_type")->insert($data);
    	if($result==1){
    		return redirect('show-all-stock-type')->with("success", "Stock Type Added Successfully!...");
    	}
    }
    public function edit_stock_type($id){
    	$data = array();
    	$data['get_stock_type_by_id'] = DB::table("stock_type")->where("stock_type_id", $id)->get();
    	return view('admin/edit-stock-type', $data);
    }
    public function edit_stock_type_process(Request $request){
    	$data['stock_type_value'] = $request->stock_type_value;
    	$result = DB::table("stock_type")->where("stock_type_id", $request->stock_type_id)->update($data);
    	if($result==1){
    		return redirect('show-all-stock-type')->with("success", "Stock Type Edit Successfully!...");
    	}
    }
    public function delete_stock_type($id){
    	$result = DB::table("stock_type")->where("stock_type_id", $id)->delete();
    	if($result==1){
    		return redirect('show-all-stock-type')->with("error", "Stock Type Deleted Successfully!...");
    	}
    }
    public function show_all_stock_gsm(){
    	$data = array();
    	$data['get_all_stock_gsm'] = DB::table("stock_gsm")->get();
    	return view('admin/stock-gsm', $data);
    }
    public function add_new_stock_gsm(Request $request){
    	$data = array();
    	return view('admin/add-new-stock-gsm', $data);
    }
    public function add_new_stock_gsm_process(Request $request){
    	$data['stock_gsm_value'] = $request->stock_gsm_value;
    	$result = DB::table("stock_gsm")->insert($data);
    	if($result==1){
    		return redirect('show-all-stock-gsm')->with("success", "Stock GSM Added Successfully!...");
    	}
    }
    public function edit_stock_gsm($id){
    	$data = array();
    	$data['get_stock_gsm_by_id'] = DB::table("stock_gsm")->where("stock_gsm_id", $id)->get();
    	return view('admin/edit-stock-gsm', $data);
    }
    public function edit_stock_gsm_process(Request $request){
    	$data['stock_gsm_value'] = $request->stock_gsm_value;
    	$result = DB::table("stock_gsm")->where("stock_gsm_id", $request->stock_gsm_id)->update($data);
    	if($result==1){
    		return redirect('show-all-stock-gsm')->with("success", "Stock GSM Edit Successfully!...");
    	}
    }
    public function delete_stock_gsm($id){
    	$result = DB::table("stock_gsm")->where("stock_gsm_id", $id)->delete();
    	if($result==1){
    		return redirect('show-all-stock-gsm')->with("error", "Stock GSM Deleted Successfully!...");
    	}
    }
    public function show_all_stock_size(){
    	$data = array();
    	$data['get_all_stock_size'] = DB::table("stock_size")->get();
    	return view('admin/stock-size', $data);
    }
    public function add_new_stock_size(Request $request){
    	$data = array();
    	return view('admin/add-new-stock-size', $data);
    }
    public function add_new_stock_size_process(Request $request){
    	$data['stock_size_value'] = $request->stock_size_value;
    	$result = DB::table("stock_size")->insert($data);
    	if($result==1){
    		return redirect('show-all-stock-size')->with("success", "Stock Size Added Successfully!...");
    	}
    }
    public function edit_stock_size($id){
    	$data = array();
    	$data['get_stock_size_by_id'] = DB::table("stock_size")->where("stock_size_id", $id)->get();
    	return view('admin/edit-stock-size', $data);
    }
    public function edit_stock_size_process(Request $request){
    	$data['stock_size_value'] = $request->stock_size_value;
    	$result = DB::table("stock_size")->where("stock_size_id", $request->stock_size_id)->update($data);
    	if($result==1){
    		return redirect('show-all-stock-size')->with("success", "Stock Size Edit Successfully!...");
    	}
    }
    public function delete_stock_size($id){
    	$result = DB::table("stock_size")->where("stock_size_id", $id)->delete();
    	if($result==1){
    		return redirect('show-all-stock-size')->with("error", "Stock Size Deleted Successfully!...");
    	}
    }
}