<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
use PDF;
class Filter_Controller extends Controller{
	public function __construct(){
		$this->middleware(function ($request, $next){  
	       	if(!Session::has('user_name_login') || !Session::has('user_password_login')){ 
            	return redirect('/');
        	}
        	return $next($request);
        });
    }
    public function est_inquirie_filter(Request $request){
    	$data['date_from'] = str_replace("/", "-", $request->date_from);
    	$data['date_to'] = str_replace("/", "-", $request->date_to);
    	$data['inquiry_status'] = $request->inquiry_status;
    	if($data['inquiry_status']==1){
    		$data['est_inquiry_filter_date'] = DB::table("sales_enquires")->where("inq_status", "0")->get();
    	}elseif($data['inquiry_status']==2){
    		$data['est_inquiry_filter_date'] = DB::table("sales_enquires")->where("price_offerd_by_sales_manager_status", "1")->get();
    	}
    	/*echo "<pre>";
    	foreach($data['inquiry_filter_date'] as $key=>$value){
    		if(!empty($data['date_from']) AND date("m-d-Y", strtotime($value->date))>=$data['date_from'] OR !empty($data['date_to']) AND date("m-d-Y", strtotime($value->date))<=$data['date_to']){
    			echo $value->date;
    		}else{
    			echo $value->date;
    		}
    		echo "<br>";
    	}
    	die();*/
      	return view("est-inquirie-filter", $data);
    }
    public function sales_inquirie_filter(Request $request){
    	$data = array();
    	$data['date_from'] = str_replace("/", "-", $request->date_from);
    	$data['date_to'] = str_replace("/", "-", $request->date_to);
    	$data['inquiry_status'] = $request->inquiry_status;
    	if($data['inquiry_status']==1){
    		$data['sales_inquiry_filter_date'] = DB::table("sales_enquires")->where("price_offerd_by_sales_manager", "!=", "")->where("price_offerd_by_sales_manager", "!=", "null")->get();
    	}elseif($data['inquiry_status']==2){
    		$data['sales_inquiry_filter_date'] = DB::table("sales_enquires")->where("price_offerd_by_sales_manager_status", "1")->get();
    	}
    	/*echo "<pre>";
    	if(!empty($data['sales_inquiry_filter_date'])){
	    	foreach($data['sales_inquiry_filter_date'] as $key=>$value){
	    		print_r($value);
	    	}
    	}
    	die();*/
    	return view("admin/sales-inquirie-filter", $data);
    }
    
    
    
    public function  production_inquirie_filter_get_data(Request $request){
        
        $from=$request->input('date_from');
        $to=$request->input('date_to');
        $data['data']=DB::table('production_form')->whereBetween('date',[$from,$to])->get();
        return view("admin/production-inquirie-filter-data", $data);
        
        
        //  echo "<pre>";
        //  print_r($data);
        //  die();
        
        
    }
    public function production_inquirie_filter_by_id(Request $request){
        
        
        $from=$request->input('product_traking_id_from');
        $to=$request->input('product_traking_id_to');
        $data['data']=DB::table('production_form')->whereBetween('production_form_id',[$from,$to])->get();
        
     
        return view("admin/production-inquirie-filter-data", $data);
        
    }
      public function production_inquirie_filter_get_data_website(Request $request){
        
        
        $web=$request->input('website');
        $data['data']= DB::table('production_form')->orWhere('website', 'like', '%' .$web . '%')->get();
    
     
       
        return view("admin/production-inquirie-filter-data", $data);
        
    }
    
    
    public function production_inquirie_filter(Request $request){
      
    	  $data['website'] = DB::table('website')->get();
     
    	return view("admin/production-inquirie-filter", $data);
    }
}