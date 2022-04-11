<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
use PDF;
class Vendor_Material_Type extends Controller{
	public function add_new_vendor_type(){
		$data = array();
		return view('admin/add-new-vendor-type', $data);
	}
	public function add_new_vendor_type_process(Request $request){
		$data['vendor_type_for'] = $request->vendor_type_for;
		$data['vendor_type_value'] = $request->vendor_type_value;
		$result = DB::table("vendor_type")->insert($data);
		if($result==1){
		  return redirect("show-all-vendor-type")->with("success", "Vendor Type Added Successfully!...");
		}
	}
	public function edit_vendor_type($id){
		$data = array();
		$data['get_vendor_type_by_id'] = DB::table("vendor_type")->where("vendor_type_id", $id)->get();
		return view('admin/edit-vendor-type', $data);
	}
	public function edit_vendor_type_process(Request $request){
		$data['vendor_type_for'] = $request->vendor_type_for;
		$data['vendor_type_value'] = $request->vendor_type_value;
		$result = DB::table("vendor_type")->where("vendor_type_id", $request->vendor_type_id)->update($data);
		if($result==1){
		  return redirect("show-all-vendor-type")->with("success", "Vendor Type Update Successfully!...");
		}
	}
	public function show_all_vendor_type(){
		$data = array();
		$data['get_all_vendor_type'] = DB::table("vendor_type")->get();
		return view('admin/show-all-vendor-type', $data);
	}
	public function delete_vendor_type($id){
		DB::table("vendor_type")->where("vendor_type_id", $id)->delete();
		return redirect("show-all-vendor-type")->with("success", "Vendor Type Delete Successfully!...");
	}

	public function add_new_vendor_material(){
		$data = array();
		return view('admin/add-new-vendor-material', $data);
	}
	public function add_new_vendor_material_process(Request $request){
		$data['vendor_material_for'] = $request->vendor_material_for;
		$data['vendor_material_value'] = $request->vendor_material_value;
		$result = DB::table("vendor_material")->insert($data);
		if($result==1){
		  return redirect("show-all-vendor-material")->with("success", "Vendor Material Added Successfully!...");
		}
	}
	public function edit_vendor_material($id){
		$data = array();
		$data['get_vendor_type_by_idr_material_by_id'] = DB::table("vendor_material")->where("vendor_material_id", $id)->get();
		return view('admin/edit-vendor-material', $data);
	}
	public function edit_vendor_material_process(Request $request){
		$data['vendor_material_for'] = $request->vendor_material_for;
		$data['vendor_material_value'] = $request->vendor_material_value;
		$result = DB::table("vendor_material")->where("vendor_material_id", $request->vendor_material_id)->update($data);
		if($result==1){
		  return redirect("show-all-vendor-material")->with("success", "Vendor Material Update Successfully!...");
		}
	}
	public function show_all_vendor_material(){
		$data = array();
		$data['get_all_vendor_material'] = DB::table("vendor_material")->get();
		return view('admin/show-all-vendor-material', $data);
	}
	public function delete_vendor_material($id){
		DB::table("vendor_material")->where("vendor_material_id", $id)->delete();
		return redirect("show-all-vendor-material")->with("success", "Vendor Material Delete Successfully!...");
	}
}