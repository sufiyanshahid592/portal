<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
use PDF;
class Admin extends Controller
{
        public function __construct()
    {
        $this->middleware(function ($request, $next){
      
       if(!Session::has('user_name_login') || !Session::has('user_password_login')){ 
            return redirect('/'); 
        }
       
        return $next($request);
        });
    }
    public function Dashboard() {
        
        
        
        return view ('index');
    }
    
     public function upload_csv(Request $request){
        $file = $request->file('file');
      
      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = 'https://www.thecustomboxes.online/'.$location."/".$filename;
         
          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue; 
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){
     
            $insertData = array(
                "job_number"=>$importData[0],
                "tracking_id"=>json_encode([$importData[1]]),
                "date"=>"2022-01-20"
                
               
               );
               
               
              
            //  json_encode
          /*   echo "<pre>";
              
              print_r($insertData);
              die(); */
          DB::table('shipping')->insert($insertData);

          }

 
          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    

    // Redirect to index
    return redirect('website-form');
  }
    
    public function get_tl_csr(Request $request){
        $result = DB::table("tl_csr_added")->where("tl", $request->team_leader_id)->get();
        foreach(json_decode($result[0]->csr) as $key=>$value){
          $csr_user = DB::table('admin_user_login')->where('desgniation', 'csr')->where('user_id', $value)->get();
          ?>
          <option value="<?php echo $csr_user[0]->user_id; ?>" selected><?php echo $csr_user[0]->user_name; ?></option>
          <?php
        }
      }
      public function get_tl_csr_boxes(Request $request){
        $result = DB::table("tl_csr_added")->where("tl", $request->team_leader_id)->get();
        foreach(json_decode($result[0]->csr) as $key=>$value){
          $csr_user = DB::table('admin_user_login')->where('desgniation', 'csr')->where('user_id', $value)->get();
          ?>
          <li class="select2-selection__choice" title="<?php echo $csr_user[0]->user_name; ?>" data-select2-id="select2-data-6-hugj"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-csr-w8-container-choice-mccu-<?php echo $csr_user[0]->user_id; ?>"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-csr-w8-container-choice-mccu-<?php echo $csr_user[0]->user_id; ?>"><?php echo $csr_user[0]->user_name; ?></span></li>
          <?php
        }
      }
    
    public function add_Ips(){
        
        
        return view('admin/Ip_added');
    }
    public function add_ip_address(Request $request){
        
       
        $data=[
            'ip_address' => $request->input('ipaddress'),
            
            
            ];
            
            
            DB::table('all_ip_address')->insert($data);
              Session::flash('ipaddress',' IP Address  Successfully Added !'); 
            return redirect('Ips-address');
    }
    
    public function ss_processing(Request $request){

    $query = DB::table('sales_enquires')->orderBy('id','DESC');
    return DataTables::queryBuilder($query)->toJson();
}




public function price_send_to_customer(Request $request){  
      $additional_comment = $request->document_comment;
       $post = ['id',$request->data_id];
       
          $get_all_data['data']=DB::table('sales_enquires')->where('id',$request->data_id)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
          
          
          
        //   echo "<pre>";
        //   print_r($get_all_data['data']);
        //   die();
        
        DB::table("sales_enquires")->where("id", $request->data_id)->update(array("additional_comment"=>$additional_comment));
      Mail::send(['html' => 'admin/title_of_price_invoice'],$get_all_data, function($message) use ($post) {
            
            
             
           foreach($post as $id){
               
               $dd= $id;
           }
           
        
        $get_website_data['data']=DB::table('sales_enquires')->where('id',$dd)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->leftJoin("admin_user_login", "sales_enquires.csr_name", "=", "admin_user_login.user_id")->get();
  
        $client_email=$get_website_data['data'][0]->c_email;
       
        $web_email=$get_website_data['data'][0]->user_email;
  
 
         
             $pdf = PDF::loadView('admin/price_quote_email', $get_website_data);
             $rand_name=md5(time());
             $pdf->save('pdf/' . $rand_name.'.pdf');
             $message->to($client_email)->subject
            ('Price Invoice ');
         //  $message->attach('https://thecustomboxes.online/pdf/'.$rand_name.'.pdf');
            $message->from($web_email);
            DB::table("sales_enquires")->where("id", $dd)->update(array("price_quote_send_by_email"=>1));
      });
      
    
    
            Session::flash('price_quote','Your Price Quote Send to our Beloved Customer !'); 
             //return redirect('show-sales-enquiry');
   }
        
       // return $pdf->download($rand_name.'.pdf');
     
   
    
    

    
public function follow_inquiry_modal(Request $request){
      $data_id = $request->selectedid;
      $result = DB::table("sales_enquires")->where("id", $data_id);
      ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
          <div class="modal-header">
            <center>
              <div class="info info-prod  py-0 mb-4 print" >
                <h2 class="py-3">Follow 
                  <button type="button" class="close follow-view-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </h2>
              </div>
            </center>
            
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 text-center">
                <span class="btn btn-warning follow-btn" data-follow="1">Follow 1</span>
                <span class="btn btn-warning follow-btn" data-follow="2">Follow 2</span>
                <span class="btn btn-warning follow-btn" data-follow="3">Follow 3</span>
              </div>
              <div class="col-lg-12 follow-textarea">
                <textarea class="form-control follow-inquiry-content" rows="5"></textarea>
                <input type="hidden" class="follow-inquiry-id" value="<?php echo $data_id; ?>">
                <input type="submit" class="btn btn-primary send-follow-email" value="Send Email">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary follow-view-close">Close</button>
          </div>
        </div>
      </div>
      <?php

}
public function send_follow_inquiry_email(Request $request){
  $id = $request->follow_inquiry_id;
  $follow_inquiry_content = $request->follow_inquiry_content;
  $email_data=DB::table('sales_enquires')->where('id',$id)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
  $incremant_data=DB::table('sales_enquires')->where('id',$id)->get();
  $csr_data = DB::table("admin_user_login")->where("user_id", $email_data[0]->csr_name)->get();
  $follow_up_increment= $incremant_data[0]->follow_up_increment;
  $data=[
    'follow_up_increment' =>$follow_up_increment+1,
    'follow_up_status' =>1,
    'price_offerd_by_sales_manager_status'=>2,
    'inq_status'=>1
  ];
  DB::table('sales_enquires')->where('id',$id)->update($data);
  $website_email= $email_data[0]->email;
  $website=$email_data[0]->website;
  $csr_sudo_name=$email_data[0]->csr_sudo_name;
  $client_email=$email_data[0]->c_email;
  $csr_email = $csr_data[0]->user_email;
  $client_name=$email_data[0]->c_name;
  $xx='follow_up';
  $data = array(
    'name'=>$client_name,
    'website'=>$website,
    'csr_sudo_name'=>$csr_sudo_name,
    'csr_email'=>$csr_email,
    'email'=>$website_email,
    'subject'=>$xx,
    'content'=>$follow_inquiry_content
  );
  Mail::to($client_email)->send(new SendMail($data));
  Mail::to($csr_email)->send(new SendMail($data));
  Session::flash('folow_up','Your Folow Up send to the customer !'); 
  return redirect('show-sales-enquiry');
}
public function follow_inquiry($id){
    
          
          
         //$email_data=DB::table('sales_enquires')->where('id',$id)->get();
         
         $email_data=DB::table('sales_enquires')->where('id',$id)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
     
     
         $incremant_data=DB::table('sales_enquires')->where('id',$id)->get();
         $follow_up_increment= $incremant_data[0]->follow_up_increment;
         
          $data=[
             
             'follow_up_increment' =>$follow_up_increment+1,
             'follow_up_status' =>1,
             'price_offerd_by_sales_manager_status'=>2,
             'inq_status'=>1
             
             ];
             
             DB::table('sales_enquires')->where('id',$id)->update($data);
             
         
               $website_email= $email_data[0]->email;
               
               
           
               $website=$email_data[0]->website;
               $csr_sudo_name=$email_data[0]->csr_sudo_name;
               
                
               $client_email=$email_data[0]->c_email;
               $client_name=$email_data[0]->c_name;
               $xx='follow_up';
               $data = array(
              'name'=>$client_name,
              'website'=>$website,
              'csr_sudo_name'=>$csr_sudo_name,
              'email'=>$website_email,
              'subject'     =>$xx
        );
      
          

           Mail::to($client_email)->send(new SendMail($data));  
           
            Session::flash('folow_up','Your Folow Up send to the customer !'); 
            return redirect('show-sales-enquiry');
    
}
    public function delete_ip($id){
        
        
         DB::table('all_ip_address')->where('id',$id)->delete();
              Session::flash('delete_ip','Your  IP Address  Deleted Successfully  !'); 
            return redirect('show-all-ip');
    }
    public function status_change_est_sender($id){
        
        
       
        $data=[
            'status_change_est_sender'=>1,
             'manage_inquiry'=> 0,
            'inq_status'=>0
            ];
         DB::table('sales_enquires')->where('id',$id)->update($data);
         Session::flash('status_change_est_sender','Quote Request Sent to Estimator.'); 
         return redirect('sales-enquiry');
    }
    
    

    public function final_aproval(){
        
         $userlogin = Session::get('user_name_login');
         
        
        
         $data['data']=DB::table('sales_enquires')->where('sales_manager',$userlogin)->where('price_offerd_by_sales_manager_status',0)->get();
        
        
        
        return view('admin/final_aproval',$data);
        
    }
    
    
    public function price_offerd_by_sales_manager_status_update(Request $request){
          $id=$request->input('sales_id');
           
           
        
        $data=[
            
            'price_offerd_by_sales_manager' => json_encode($request->input('price_offerd_by_sales_manager')),
            'price_offerd_by_sales_manager_status'=>1
            
            ];
            
            
          DB::table('sales_enquires')->where('id',$id)->update($data);
          
          
        /* $email_data=DB::table('sales_enquires')->where('id',$id)->get();
         
         $website_email= $email_data[0]->website_email;
         $client_email=$email_data[0]->c_email;
          
             $xx='invoice';
             $data = array(
            'fname'      =>  'Hamza',
             'email'=>$website_email,
            'subject'     =>$xx
        );
      
       

           Mail::to($client_email)->send(new SendMail($data));*/
           Session::flash('approved','Price Sent Successfully'); 
           return redirect('final-aproval');
        
        
    }
    
    public function final_aproval_inq($id){
        
        
          $data['data']=DB::table('sales_enquires')->where('id',$id)->get();
         return view('admin/final_aproval_by_sm',$data);
        
    }
    public function get_est(){
        
        
        // $data['application']=DB::table('application')->select("application.*", "job_signup.user_name")->leftJoin('job_signup', 'job_signup.id', '=', 'application.vendor_id')->get();
     
    
        $data['data']=DB::table('sales_enquires')->where('status_change_est_sender',1)->where('inq_status',0)->orderBy('id', 'DESC')->get();
        return view('admin/get_est',$data);
        
    }
    
    public  function est_ticket(){
        
        $get_id=request()->segment(2);
        
        $data['data']=DB::table('sales_enquires')->where('id',$get_id)->get();
        
       
        
        
        $data['get_sm']=DB::table('admin_user_login')->where('desgniation','sm')->get();
        /*echo "<pre>";
        print_r($data['data']);
        die();*/
        return  view('admin/est_ticket',$data);
        
    }
    public function show_all_ip(){
        
        
        $data['data']=DB::table('all_ip_address')->get();
        return view('admin/show-all-ip',$data);
        
    }
        public function changepassword(){
      return view ('admin/change-password');
    }
    public function index()
    {
        
   $data['product_size_for_plate_making']=DB::table('product_size_for_plate_making')->get(); 
    $data['stock_type']=DB::table('stock_type')->get(); 
    $data['stock_size']=DB::table('stock_size')->get();
     $data['stock_gsm']=DB::table('stock_gsm')->get(); 
   $data['data'] = DB::table('website')->get();
   $data['get_all_vendor_type'] = DB::table("vendor_type")->get();
   $data['get_all_vendor_material'] = DB::table("vendor_material")->get();
   return view('productionform', $data);

    }
    
    public function get_palte_mak_data(Request $request){
        
        
         $product_size=$_POST['data'];
         $data=DB::table('product_size_for_plate_making')->where('product_size',$product_size)->get(); 
         print_r($data[0]->product_price);
        
    }
    public function date_search(Request $request){
        
             $date1=$request->input('date1');
              $date2=$request->input('date2');
              
              $data['data'] = DB::table('production_house_form')->whereBetween('date', [$date1, $date2])->get();
            
             return  view('admin/date_search',$data);
    }
    
    public function job_search(Request $request){
        
         $job1=$request->input('jobid1');
         $job2=$request->input('jobid2');
         $data['data'] = DB::table('production_form')->whereBetween('job', [$job2, $job1])->get();
         return view('admin/job-search', $data);
   
        
        
        
    }
    
    
     public function website_search(Request $request){
        
       $job=$request->input('website');
       
       
      $data['jobdata']= DB::table('production_house_form')->where('website', 'LIKE', '%'.$job.'%')->get();
       
        return view('admin/website-search', $data);
       echo "<pre>";
       print_r($data);
       
       die();
        
        
        
    }
    
    
        public function website_add_form(){
  
  return view('admin/website_add_form');

}
    public function user_add_form(){
  
  return view('admin/user_add_form');

}


public function tl_csr_inquiries(){
     $username=Session::get('user_name_login');
    
     $data=DB::table('admin_user_login')->where('user_name',$username)->get();
      $tl_id= $data[0]->user_id;
      $data['getrow']=DB::table('tl_csr_added')->where('tl',$tl_id)->get();
      
    $var=json_decode($data['getrow'][0]->csr);
  
         $csr_data=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->whereIn('csr_name', $var)->get();
 
      
     
     $data['get_all_enquires'] = $csr_data;
      $data['website'] = DB::table('website')->get();
    return view('admin/tl_csr_sales_enquiry',$data);
     
}

public function sales_enquiry(){
    
    
     $username=Session::get('user_name_login');
    
     $data=DB::table('admin_user_login')->where('user_name',$username)->get();
     
     
     
    if($data[0]->desgniation=='tl'){
         $tl_login = Session::get('user_id_login');
    //$data['get_all_enquires']=DB::table('sales_enquires')->where('csr_name',$tl_login)->get();
    
    
    $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where('csr_name', $tl_login)->get();
 
    
    //   $tl_id= $data[0]->user_id;
    //   $data['getrow']=DB::table('tl_csr_added')->where('tl',$tl_id)->get();
      
    //   $var=json_decode($data['getrow'][0]->csr);
  
    //       $csr_data=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->whereIn('csr_name', $var)->get();
 
      
     
    //  $data['get_all_enquires'] = $csr_data;
  
       $data['website'] = DB::table('website')->get();
       return view('admin/sales_enquiry',$data);
      
      
 }
    
      else if($data[0]->desgniation=='csr'){
      
      
        $csr_id= $data[0]->user_id;
        $csr_tl_data=DB::table('admin_user_login')->where('user_id',$csr_id)->get();
      
 
      $csrname=$csr_tl_data[0]->user_id;
      
      
     
      $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where("csr_sudo_name", $username)->get();
   
    $data['website'] = DB::table('website')->get();
         return view('admin/sales_enquiry',$data);
   }
    
    
      elseif($data[0]->desgniation=='sm'){
          $data['website'] = DB::table('website')->get();
         $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where("csr_sudo_name", $username)->get();
   
    return view('admin/sales_enquiry',$data);
      }    
  
 
 else{
     
       $data['website'] = DB::table('website')->get();
        $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
        return view('admin/sales_enquiry',$data);
     
     
 }
 
  
 
   
  
  return view('admin/sales_enquiry',$data);
}



public function update_est_form(Request $request){

  /*echo "<pre>";
  print_r($_POST);
  die();*/
    
    $sales_id=$request->input('sales_id');
    $check=DB::table('sales_enquires')->where('id',$sales_id)->get();
    
    
   
      if( $check->count() > 0){
    
 
        $data=[
       /* 
        'sales_id'=>$request->input('sales_id'),
        'c_name'=>$request->input('c_name'),
        'csr_sudo_name'=>$request->input('csr_sudo_name'),
        'csr_coment'=>$request->input('csr_coment'),
        'product'=>json_encode($request->input('product')),
        'printing'=>json_encode($request->input('printing')),
        'open_size_1'=>json_encode($request->input('open_size_1')),
        'stock'=>json_encode($request->input('stock')),
        'qty'=>json_encode($request->input('qty')),*/
        
        
        'price_offerd_by_sales_manager_status' => 0,
        'production_price'=>json_encode($request->input('production_price')),
        'shipping_price'=>json_encode($request->input('shipping_price')),
        'totalcost'=>json_encode($request->input('totalcost')),
        'digital_print_qty'=> json_encode($request->input('digital_print_qty')),
        'digital_print_amount'=> json_encode($request->input('digital_print_amount')),
        'plate_makeing_qty'=> json_encode($request->input('plate_makeing_qty')),
        'plate_makeing_amount'=> json_encode($request->input('plate_makeing_amount')),
        'stock_qty'=> json_encode($request->input('stock_qty')),
        'stock_amount'=> json_encode($request->input('stock_amount')),
        'printing_qty'=> json_encode($request->input('printing_qty')),
        'printing_amount'=> json_encode($request->input('printing_amount')),
        'lamination_qty'=> json_encode($request->input('lamination_qty')),
        'lamination_amount'=> json_encode($request->input('lamination_amount')),
        'spot_uv_qty'=> json_encode($request->input('spot_uv_qty')),
        'spot_uv_amount'=> json_encode($request->input('spot_uv_amount')),
        'block_makeing_qty'=> json_encode($request->input('block_makeing_qty')),
        'block_makeing_amount'=> json_encode($request->input('block_makeing_amount')),
        'embosing_qty'=> json_encode($request->input('embosing_qty')),
        'embosing_amount'=> json_encode($request->input('embosing_amount')),
        'foiling_qty'=> json_encode($request->input('foiling_qty')),
        'foiling_amount'=> json_encode($request->input('foiling_amount')),
        'die_makeing_qty'=> json_encode($request->input('die_makeing_qty')),
        'die_makeing_amount'=> json_encode($request->input('die_makeing_amount')),
        'die_cutting_qty'=> json_encode($request->input('die_cutting_qty')),
        'die_cutting_amount'=> json_encode($request->input('die_cutting_amount')),
        'pasting_qty'=> json_encode($request->input('pasting_qty')),
        'pasting_amount'=> json_encode($request->input('pasting_amount')),
        'percentage_qty'=> json_encode($request->input('percentage_qty')),
        'percentage_amount'=> json_encode($request->input('percentage_amount')),
        'sales_manager'=>$request->input('sales_manager'),
        'inq_status'=>'1'
        
        ];
        /*echo "<pre>";
        print_r($data);
        die();*/
         Session::flash('est_data',' Data Successfully Updated And send to the Sales Manger !'); 
        
        DB::table('sales_enquires')->where('id',$sales_id)->update($data);
          return redirect('get_est');
   }
    
    else{
         $data=[
        
      /*  'sales_id'=>$request->input('sales_id'),
        'c_name'=>$request->input('c_name'),
        'csr_sudo_name'=>$request->input('csr_sudo_name'),
        'csr_coment'=>$request->input('csr_coment'),
        'product'=>json_encode($request->input('product')),
        'printing'=>json_encode($request->input('printing')),
        'open_size_1'=>json_encode($request->input('open_size_1')),
        'stock'=>json_encode($request->input('stock')),
        'qty'=>json_encode($request->input('qty')),*/
        'price_offerd_by_sales_manager_status' => 0,
        'production_price'=>json_encode($request->input('production_price')),
        'shipping_price'=>json_encode($request->input('shipping_price')),
        'totalcost'=>json_encode($request->input('totalcost')),
        'digital_print_qty'=> json_encode($request->input('digital_print_qty')),
        'digital_print_amount'=> json_encode($request->input('digital_print_amount')),
        'plate_makeing_qty'=> json_encode($request->input('plate_makeing_qty')),
        'plate_makeing_amount'=> json_encode($request->input('plate_makeing_amount')),
        'stock_qty'=> json_encode($request->input('stock_qty')),
        'stock_amount'=> json_encode($request->input('stock_amount')),
        'printing_qty'=> json_encode($request->input('printing_qty')),
        'printing_amount'=> json_encode($request->input('printing_amount')),
        'lamination_qty'=> json_encode($request->input('lamination_qty')),
        'lamination_amount'=> json_encode($request->input('lamination_amount')),
        'spot_uv_qty'=> json_encode($request->input('spot_uv_qty')),
        'spot_uv_amount'=> json_encode($request->input('spot_uv_amount')),
        'block_makeing_qty'=> json_encode($request->input('block_makeing_qty')),
        'block_makeing_amount'=> json_encode($request->input('block_makeing_amount')),
        'embosing_qty'=> json_encode($request->input('embosing_qty')),
        'embosing_amount'=> json_encode($request->input('embosing_amount')),
        'foiling_qty'=> json_encode($request->input('foiling_qty')),
        'foiling_amount'=> json_encode($request->input('foiling_amount')),
        'die_makeing_qty'=> json_encode($request->input('die_makeing_qty')),
        'die_makeing_amount'=> json_encode($request->input('die_makeing_amount')),
        'die_cutting_qty'=> json_encode($request->input('die_cutting_qty')),
        'die_cutting_amount'=> json_encode($request->input('die_cutting_amount')),
        'pasting_qty'=> json_encode($request->input('pasting_qty')),
        'pasting_amount'=> json_encode($request->input('pasting_amount')),
        'percentage_qty'=> json_encode($request->input('percentage_qty')),
        'percentage_amount'=> json_encode($request->input('percentage_amount')),
        'sales_manager'=>$request->input('sales_manager'),
        'inq_status'=>'1'
        
        ];
        
        
        Session::flash('est_data',' Data Successfully Inserted And send to the Sales Manger !'); 
        DB::table('sales_enquires')->insert($data);
        
          return redirect('get_est');
       
    }
    
   
        
        
        return redirect('get_est');
         
}

public function add_sales_enquiry(Request $request){
 
   /*echo "<pre>";
   print_r($_POST);
   die();*/
 
  $data=[
      
      'c_name'=>$request->input('c_name'),
      'c_email'=>$request->input('c_email'),
      'c_phone'=>$request->input('c_phone'),
      // 'csr_coment'=>$request->input('csr_coment'),
      'website'=>$request->input('website'),
      'source_of_customer'=>$request->input('source_of_customer'),
      'product'=>json_encode($request->input('product')),
      'printing'=>json_encode($request->input('printing')),
      'f_s_1'=>json_encode($request->input('f_s_1')),
      'f_s_2'=>json_encode($request->input('f_s_2')),
      'f_s_3'=>json_encode($request->input('f_s_3')),
      'measurement'=>json_encode($request->input('measurement')),
      'country'=>json_encode($request->input('country')),
      'open_size_1'=>json_encode($request->input('open_size_1')),
      'open_size_2'=>json_encode($request->input('open_size_2')),
      'stock'=>json_encode($request->input('stock')),
      'qty'=>json_encode($request->input('qty')),
      'price'=>json_encode($request->input('price')),
      'csr_name'=>  $request->input('username'),
      'csr_sudo_name'=>$request->input('sudoname'),
      'addons'=>json_encode($request->input('addons')),
      'usa_upping'=>json_encode($request->input('usa_upping')),
      'product_coment'=>json_encode($request->input('product_coment')),
      'product_numbers'=>json_encode($request->input('product_numbers')),
      'manage_inquiry' => 2,
      'inq_status'=> 2,
      'price_offerd_by_sales_manager_status'=>2,
      'enquiry_date'=>time(),
      'customer_relation'=>$request->input('customer_relation')
      
      
      
      ];
//   echo "<pre>";
//   print_r($data);
//   die(); 
  
      
    
      DB::table('sales_enquires')->insert($data);
            Session::flash('sales',' Data Successfully Added'); 
      return redirect('sales-enquiry');
}

public function own_sales_enquiry(){
    $tl_login = Session::get('user_id_login');
    $data['login_tl_']=DB::table('sales_enquires')->where('csr_name',$tl_login)->get();
    return view('admin/own_sales_enquires', $data);
}
 

public function show_sales_enquiry(){
     $username=Session::get('user_name_login');
     $data=DB::table('admin_user_login')->where('user_name',$username)->get();
     
     
     if($data[0]->desgniation=='tl'){
      $tl_id= $data[0]->user_id;
      $data['getrow']=DB::table('tl_csr_added')->where('tl',$tl_id)->get();
    
      $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where($tl_id, $username)->get();
      
      
       return view('admin/show_sales_enquires',$data);
      
      
 }
    
      else if($data[0]->desgniation=='csr'){
      
      
        $csr_id= $data[0]->user_id;
        $csr_tl_data=DB::table('admin_user_login')->where('user_id',$csr_id)->get();
      
 
      $csrname=$csr_tl_data[0]->user_id;
      
      
     
      $data['getrow']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where('csr_name',$csrname)->get();
        return view('admin/show_sales_enquires',$data);
   }
    
    
      elseif($data[0]->desgniation=='sm'){
        $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where("csr_sudo_name", $username)->get();
        return view('admin/show_sales_enquires',$data);
      }    
  
 
 else{
     
       
        $data['get_all_enquires']=DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
        return view('admin/show_sales_enquires',$data);
     
     
 }
 
  
 
     
     
     
      
}
  public function stock_type_gsm_size(Request $request){
    $stock_gsm_qty = $request->stock_gsm_qty;
    $stock_gsm_qty_p_size = $request->stock_gsm_qty_p_size;
    $stock_gsm_size_qty = $request->stock_gsm_size_qty;
    $stock_gsm_size_qty_final_value = explode("*", $stock_gsm_size_qty)[0]*explode("*", $stock_gsm_size_qty)[1];
    $stock_gsm_per_unit = $request->stock_gsm_per_unit;
    echo number_format(((($stock_gsm_qty*$stock_gsm_qty_p_size)*$stock_gsm_size_qty_final_value)*$stock_gsm_per_unit)/15500, 2);
  }
public function your_tl_inquiries(){
  $data = array();
  $sm_username = Session::get("user_name_login");
  $get_tl = DB::table("tl_csr_added")->where("manager_name", $sm_username)->get();
  $get_tl_inquiries = DB::table("admin_user_login")->where("user_id", $get_tl[0]->tl)->get();
  $data['get_all_enquires'] = DB::table("sales_enquires")->join("website", "sales_enquires.website", "=","website.web_id")->where("csr_sudo_name", $get_tl_inquiries[0]->user_name)->get();
  return view("admin/your-tl-inquiries", $data);
}
public function your_csr_inquiries(){
  $data = array();
  $sm_username = Session::get("user_name_login");
  $get_csr = DB::table("tl_csr_added")->where("manager_name", $sm_username)->get();
  $get_user_details = DB::table("admin_user_login")->whereIn("user_id", json_decode($get_csr[0]->csr))->get();
  $i = 1;
  foreach($get_user_details as $key=>$value){
    $csr_row[] = $value->user_name;
    $i++;
  }
  $data['get_all_enquires'] = DB::table("sales_enquires")->join("website", "sales_enquires.website", "=","website.web_id")->whereIn("csr_sudo_name", $csr_row)->get();
  return view("admin/your-csr-inquiries", $data);

}


public function delete_enquiry($id){
    
    
   
      DB::table('sales_enquires')->delete($id);
            Session::flash('del_sales',' Enquiry Deleted Successfully '); 
      return redirect('show-sales-enquiry');
      
      
}


public function view_inquiry($id){
    
    
   
      $data['inquiry']=DB::table('sales_enquires')->where('id',$id)->get();
          $data['website']=DB::table('website')->get();
      
      return view('admin/view_inquiry',$data);
      
      
}

public function edit_inquiry($id){
    $data['inquiry']=DB::table('sales_enquires')->where('id',$id)->get();
      $data['website']=DB::table('website')->get();
  /*    echo"<pre>";
      print_r($data['website']);
      die();*/
      
         return view('admin/edit_inquiry',$data);
      
}
public function updateTimeAdmin(Request $request ,$id) {
    $count = $request->input('increment');

    $data['time'] = DB::table('sales_enquires')->where('id',$id)->get();
   
    $date = $data['time'][0]->date;
$date = strtotime($date);
$date = strtotime("+$count day", $date);

$x = date('Y-m-d H:i:s', $date);
//   echo $x;
    // print_r($data['time']);
    // die();
 $data=[
        'date'=>$x,
        ];
        DB::table('sales_enquires')->where('id',$id)->update($data);
        return redirect('show-sales-enquiry');
        
}
public function updateTimeSM($id) {
$data['time'] = DB::table('sales_enquires')->where('id',$id)->get();

$date = $data['time'][0]->date;

$date = strtotime($date);

$date = strtotime("+7 day", $date);

$x = date('Y-m-d H:i:s', $date);

$data = [
        'date'=>$x,
        'time_increment'=>1,
        ];
        
         DB::table('sales_enquires')->where('id',$id)->update($data);
         return redirect('show-sales-enquiry');
    }
public function updateTime($id) {
   $data['time'] = DB::table('sales_enquires')->where('id',$id)->get();
$date = $data['time'][0]->date;
$date = strtotime($date);
$date = strtotime("+7 day", $date);

$x = date('Y-m-d H:i:s', $date);

 $data=[
        'date'=>$x,
        'time_increment'=>1,
        
        ];
         DB::table('sales_enquires')->where('id',$id)->update($data);
         return redirect('own-sales-enquiry');
         
}
public function updateTimeCSR($id) {
   $data['time'] = DB::table('sales_enquires')->where('id',$id)->get();

   
                                           
$date = $data['time'][0]->date;
$date = strtotime($date);
$date = strtotime("+7 day", $date);

$x = date('Y-m-d H:i:s', $date);

 $data=[
        'date'=>$x,
        'time_increment'=>1,
        
        ];
         DB::table('sales_enquires')->where('id',$id)->update($data);
         return redirect('show-sales-enquiry');
         
}

public function proceed_inquiry($id){
    
    $data=[
        'manage_inquiry'=>1
        
        ];
    
    DB::table('sales_enquires')->where('id',$id)->update($data);
    
    return redirect('show-sales-enquiry');
}
public function update_sales_enquiry(Request $request){
    
    /*echo "<pre>";
    print_r($_POST);
    die();*/
    
    $id=$request->input('id');
    
     
      $data=[
      
      'c_name'=>$request->input('c_name'),
      'c_email'=>$request->input('c_email'),
      'c_phone'=>$request->input('c_phone'),
      // 'csr_coment'=>$request->input('csr_coment'),
      'website'=>$request->input('website'),
      'source_of_customer'=>$request->input('source_of_customer'),
      'product'=>json_encode($request->input('product')),
      'printing'=>json_encode($request->input('printing')),
      'f_s_1'=>json_encode($request->input('f_s_1')),
      'f_s_2'=>json_encode($request->input('f_s_2')),
      'f_s_3'=>json_encode($request->input('f_s_3')),
      'measurement'=>json_encode($request->input('measurement')),
      'country'=>json_encode($request->input('country')),
      'open_size_1'=>json_encode($request->input('open_size_1')),
      'open_size_2'=>json_encode($request->input('open_size_2')),
      'stock'=>json_encode($request->input('stock')),
      'qty'=>json_encode($request->input('qty')),
      'price'=>json_encode($request->input('price')),
       'csr_name'=>  $request->input('username'),
        'csr_sudo_name'=>$request->input('sudoname'),
        'addons'=>json_encode($request->input('addons')),
        'usa_upping'=>json_encode($request->input('usa_upping')),
        'product_coment'=>json_encode($request->input('product_coment')),
        'product_numbers'=>json_encode($request->input('product_numbers')),
      'customer_relation'=>$request->input('customer_relation')
         
      
      
      ];
    /*echo "<pre>";
  	print_r($data);
  	die();*/
      
      DB::table('sales_enquires')->where('id', $id)->update($data);
            Session::flash('inquiry_update',' Data Successfully Updated'); 
      return redirect('sales-enquiry');
      // return redirect('edit-inquiry/'.$id);
}


 public function AddWebsite(Request $request) {
   
   $data=[

     'website' => $request->input('website'),
     'email' => $request->input('email'),
     'address' => $request->input('address'),
     'number' => $request->input('number'),
     
    ];
    if($request->hasfile('image')){
                   $file=$request->file('image');
                   $extension=$file->getClientOriginalName();
                   $filename=$extension;
                   $file->move('images/',$filename);
                   $data['image']=$filename;

            }
   
    try {
                
      $insert = DB::table('website')->insert($data); 
      if(!$insert){
         return redirect('website-form');
          
      }
      else{
          Session::flash('NewPageSuccess','Website Successfully Added'); 
         return redirect('website-form');
      }
      } catch(\Illuminate\Database\QueryException $e){
          $errorCode = $e->errorInfo[1];
          if($errorCode == '1062'){
              Session::flash('FindOldPage', 'Website Name Already Exists !!');
               return redirect('website-form');
          }
      }
 }
 
 
 public function update_tl_csr(Request $request){
    $username=$request->input('username');
    
     
       $dd= DB::table('tl_csr_added')->where('manager_name',$username)->get();
       
       if(count($dd)<1){
              $data=[
        
        'manager_name'=>$request->input('username'),
        'tl'=>$request->input('desgniation'),
        'csr'=>json_encode($request->input('csr')),
        
        ];
        
        
        DB::table('tl_csr_added')->insert($data);
        Session::flash('insert_csr_tl','User Data  Successfully Added !');
         return  redirect('update-data');
       }
       
       else{
           
              $data=[
        
        'manager_name'=>$request->input('username'),
        'tl'=>$request->input('desgniation'),
        'csr'=>json_encode($request->input('csr')),
        
        ];
        
        
        DB::table('tl_csr_added')->where('manager_name',$username)->update($data);
        Session::flash('insert_csr_tl','User Data  Successfully Updated !');
         return  redirect('update-data');
           
       }
    
 
        
       return  redirect('update-data');
 }
 public function update_data(){

    
     $name=Session::get('user_name_login');
     $data['manager_name']=DB::table('tl_csr_added')->where('manager_name',$name)->get();
     
     
     $data['all_data_tl']=DB::table('admin_user_login')->where('desgniation','tl')->get();
     $data['all_data_csr']=DB::table('admin_user_login')->where('desgniation','csr')->get();
     $data['data_tl']=DB::table('tl_csr_added')->get();
    
     
     
     
  return view('admin/csr_tls',$data);
 }
        public function AddUser(Request $request) {
 
      $data=[

     'user_name' => $request->input('user_name'),
     'user_email' => $request->input('user_email'),
     'user_password' => md5($request->input('user_password')),
     'user_department' => $request->input('department'),
     'desgniation'=>$request->input('desgniation'),
     'user_role'=> 2,

       
    ];
   
    try {
                
      $insert = DB::table('admin_user_login')->insert($data); 
      if(!$insert){
         return redirect('users-form');
          
      }
      else{
          Session::flash('NewPageSuccess','User Successfully Added'); 
         return redirect('users-form');
      }
      } catch(\Illuminate\Database\QueryException $e){
          $errorCode = $e->errorInfo[1];
          if($errorCode == '1062'){
              Session::flash('FindOldPage', 'Name or Email Already Exists !!');
               return redirect('users-form');
          }
      }
   } 
     public function show_user_form() {
         
   $data['data'] = DB::table('admin_user_login')->get();
   return view('admin/show-users',$data);
 }
      public function show_website_form() {
         
   $data['data'] = DB::table('website')->get();
   
 
   
   return view('admin/show-website',$data);
 }
  public function UserDestroy($id)
 {
     
    DB::table('admin_user_login')->where('user_id', $id)->delete();
     Session::flash('UserDelete','User Successfully Deleted');
    return redirect('show-users-form');
 }
   public function WebsiteDestroy($id)
 {
     
    DB::table('website')->where('web_id', $id)->delete();
     Session::flash('WebsiteDelete','Website Url Successfully Deleted');
    return redirect('show-website-form');
 }
      public function OnlyViewUser($id) {
         
      $data['value'] = DB::table('admin_user_login')->where('user_id',$id)->get();
      
       return view('admin/only-view-user',$data);
 }
       public function OnlyViewWebsite($id) {
         
      $data['value'] = DB::table('website')->where('web_id',$id)->get();
      
       return view('admin/only-view-website',$data);
 }
  public function EditUserForm($id) {
   $data['value'] = DB::table('admin_user_login')->where('user_id',$id)->get();
   return view('admin/edit-user-form',$data);
 }
   public function EditWebsiteForm($id) {
   $data['value'] = DB::table('website')->where('web_id',$id)->get();
   
  
   return view('admin/edit-website-form',$data);
 }
   public function update_website_form(Request $request,$id) {
   
   $data=[
            'website' => $request->input('website'),
            'email' => $request->input('email'),
             'address' => $request->input('address'),
              'number' => $request->input('number'),
         ];
         
                
if($request->hasfile('image')){
                   $file=$request->file('image');
                   $extension=$file->getClientOriginalName();
                   $filename=$extension;
                   $file->move('images/',$filename);
                   $data['image']=$filename;

            }
            else{
               $data['image']=$request->input('oldimage');
            }
            
            
             DB::table('website')->where('web_id', $id)->update($data);
             Session::flash('WebsiteUpdate', 'Website Url Successfully Update');
             return redirect('edit-website-form/'.$id);
 }
  public function update_user_form(Request $request,$id) {
   
   $data=[
            'user_name' => $request->input('user_name'),
            'user_email' => $request->input('user_email'),
            'user_password' => md5($request->input('user_password')),
            'user_department' => $request->input('department'),
            'desgniation' =>$request->input('desgniation'),
         ];
             DB::table('admin_user_login')->where('user_id', $id)->update($data);
             Session::flash('UserUpdate', 'User Successfully Update Info');
             return redirect('edit-user-form/'.$id);
 }
        public function show_all_reports()
    {
         $data['data'] = DB::table('production_form')->get();
         return view('admin/show_all_reports', $data);

    }
    
       
        public function view_report($id)
    {
        
      
         $data['data'] = DB::table('production_house_form')->where('id',$id)->get();
         
        
         
         return view('admin/view_one_reports', $data);

    }
    
    
    public function EditProductionForm($id) {
   $data['website'] = DB::table('website')->get();
   $data['stock_type']=DB::table('stock_type')->get(); 
    $data['stock_size']=DB::table('stock_size')->get();
     $data['stock_gsm']=DB::table('stock_gsm')->get();
  $data['value'] = DB::table('production_house_form')->where('id',$id)->get();


  return view ('admin/edit-production-form', $data);
}
    
    
        public function ShowProductionForm()
    {
        $data['data'] = DB::table('production_form')->get();

   return view('admin/show-production-form', $data);

    }
    
     public function OnlyViewProduction($id) {
         
      $data['production_form_data'] = DB::table('production_form')->where('production_form_id',$id)->get();
    //  echo "<pre>";
    //  print_r($data);
    //   die(); 
       return view('admin/only-view-production',$data);
 }


   public function DestroyProduction($id)
      {
         DB::table('production_form')->where('production_form_id', $id)->delete();
         Session::flash('ProducdtionDelete','Production Form Successfully Deleted'); 
         return redirect('show-production-form');
      }
    public function add_production_form(Request $request){
      
      /*echo "<pre>";
      print_r($_POST);
      die();*/
      $data['job'] = $request->input("job");
      $data['date'] = $request->input("date");
      $data['item'] = $request->input("item");
      for ($i=0; $i < count($request->input('qty')); $i++) { 
        $qunatity_printing_sheet_size['row_'.$i] = array("qty"=>$request->input("qty")[$i], "printing"=>$request->input("printing")[$i], "sheet_size"=>$request->input("sheet_size")[$i]);
      }
      $data['qunatity_printing_sheet_size'] = json_encode($qunatity_printing_sheet_size);
      $data['unit'] = $request->input("unit");
      $data['currency'] = $request->input("currency");
      $data['website'] = $request->input("website");
      $data['planning'] = $request->input("planning");
      $digital_printing = array(
        "digital_printing_vendor"=>$request->input("digital_printing_vendor"),
        "digital_printing_qty"=>$request->input("digital_printing_qty"),
        "digital_printing_size"=>$request->input("digital_printing_size"),
        "digital_printing_unit_price"=>$request->input("digital_printing_unit_price"),
        "digital_printing_amount"=>$request->input("digital_printing_amount"),
      );
      $data['digital_printing'] = json_encode($digital_printing);
      
      $scanning = array(
        "scanning_vendor"=>$request->input("scanning_vendor"),
        "scanning_qty"=>$request->input("scanning_qty"),
        "scanning_size"=>$request->input("scanning_size"),
        "scanning_unit_price"=>$request->input("scanning_unit_price"),
        "scanning_amount"=>$request->input("scanning_amount")
      );
      $data['scanning'] = json_encode($scanning);
      $plate_making = array(
        "plate_making_vendor"=>$request->input("plate_making_vendor"),
        "plate_making_qty"=>$request->input("plate_making_qty"),
        "plate_making_size"=>$request->input("plate_making_size"),
        "plate_making_unit_price"=>$request->input("plate_making_unit_price"),
        "plate_making_amount"=>$request->input("plate_making_amount")
      );
      $data['plate_making'] = json_encode($plate_making);
      for ($i=0; $i < count($request->input('vendor_type')); $i++) { 
        $stock_gsm['row_'.$i] = array(
          "vendor_type"=>$request->input("vendor_type")[$i],
          "vendor_material"=>$request->input("vendor_material")[$i],
          "stock_gsm_qty"=>$request->input("stock_gsm_qty")[$i],
          "stock_gsm_size_qty"=>$request->input("stock_gsm_size_qty")[$i],
          "stock_gsm_size"=>$request->input("stock_gsm_size")[$i],
          "stock_gsm_unit_price"=>$request->input("stock_gsm_unit_price")[$i],
          "stock_gsm_amount"=>$request->input("stock_gsm_amount")[$i]
        );
      }
      $data['stock_gsm'] = json_encode($stock_gsm);
      $out_source_printing = array(
        "out_source_printing_vendor"=>$request->input("out_source_printing_vendor"),
        "out_source_printing_qty"=>$request->input("out_source_printing_qty"),
        "out_source_printing_size"=>$request->input("out_source_printing_size"),
        "out_source_printing_unit_price"=>$request->input("out_source_printing_unit_price"),
        "out_source_printing_amount"=>$request->input("out_source_printing_amount"),
      );
      $data['out_source_printing'] = json_encode($out_source_printing);
      
      
      //corugation
       $corrugation = array(
        "corrugation_vendor"=>$request->input("corrugation_vendor"),
        "corrugation_qty"=>$request->input("corrugation_qty"),
        "corrugation_size"=>$request->input("corrugation_size"),
        "corrugation_unit_price"=>$request->input("corrugation_unit_price"),
        "corrugation_amount"=>$request->input("corrugation_amount"),
      );
      $data['corrugation'] = json_encode($corrugation);
      
      //end
      $lamination_mate_shine = array(
        "lamination_mate_shine_vendor_type"=>$request->input("lamination_mate_shine_vendor_type"),
        "lamination_mate_shine_vendor_material"=>$request->input("lamination_mate_shine_vendor_material"),
        "lamination_mate_shine_vendor_qty"=>$request->input("lamination_mate_shine_vendor_qty"),
        "lamination_mate_shine_vendor_size"=>$request->input("lamination_mate_shine_vendor_size"),
        "lamination_mate_shine_vendor_unit_price"=>$request->input("lamination_mate_shine_vendor_unit_price"),
        "lamination_mate_shine_vendor_amount"=>$request->input("lamination_mate_shine_vendor_amount")
      );
      $data['lamination_mate_shine'] = json_encode($lamination_mate_shine);
      $glue = array(
        "glue_vendor"=>$request->input("glue_vendor"),
        "glue_qty"=>$request->input("glue_qty"),
        "glue_size"=>$request->input("glue_size"),
        "glue_unit_price"=>$request->input("glue_unit_price"),
        "glue_amount"=>$request->input("glue_amount")
      );
      $data['glue'] = json_encode($glue);
      $spot = array(
        "spot_vendor_type"=>$request->input("spot_vendor_type"),
        "spot_vendor_material"=>$request->input("spot_vendor_material"),
        "spot_qty"=>$request->input("spot_qty"),
        "spot_size"=>$request->input("spot_size"),
        "spot_unit_price"=>$request->input("spot_unit_price"),
        "spot_amount"=>$request->input("spot_amount")
      );
      $data['spot'] = json_encode($spot);
      for ($i=0; $i < count($request->input('block_making_vendor_type')); $i++) { 
        $block_making['row_'.$i] = array(
          "block_making_vendor_type"=>$request->input("block_making_vendor_type")[$i],
          "block_making_vendor_material"=>$request->input("block_making_vendor_material")[$i],
          "block_making_qty"=>$request->input("block_making_qty")[$i],
          "block_making_size"=>$request->input("block_making_size")[$i],
          "block_making_unit_price"=>$request->input("block_making_unit_price")[$i],
          "block_making_amount"=>$request->input("block_making_amount")[$i],
        );
      }
      $data['block_making'] = json_encode($block_making);
      for ($i=0; $i < count($request->input('embossing_vendor_type')); $i++) { 
        $embossing['row_'.$i] = array(
          "embossing_vendor_type"=>$request->input("embossing_vendor_type")[$i],
          "embossing_vendor_material"=>$request->input("embossing_vendor_material")[$i],
          "embossing_qty"=>$request->input("embossing_qty")[$i],
          "embossing_size"=>$request->input("embossing_size")[$i],
          "embossing_unit_price"=>$request->input("embossing_unit_price")[$i],
          "embossing_amount"=>$request->input("embossing_amount")[$i],
        );
      }
      $data['embossing'] = json_encode($embossing);
      $folling = array(
        "folling_vendor"=>$request->input("folling_vendor"),
        "folling_qty"=>$request->input("folling_qty"),
        "folling_size"=>$request->input("folling_size"),
        "folling_unit_price"=>$request->input("folling_unit_price"),
        "folling_amount"=>$request->input("folling_amount")
      );
      $data['folling'] = json_encode($folling);
      for ($i=0; $i < count($request->input('die_making_vendor')); $i++) { 
        $die_making['row_'.$i] = array(
          "die_making_vendor"=>$request->input("die_making_vendor")[$i],
          "die_making_number_of_ups"=>$request->input("die_making_number_of_ups")[$i],
          "die_making_qty"=>$request->input("die_making_qty")[$i],
          "die_making_size"=>$request->input("die_making_size")[$i],
          "die_making_unit_price"=>$request->input("die_making_unit_price")[$i],
          "die_making_amount"=>$request->input("die_making_amount")[$i]
        );
      }
      $data['die_making'] = json_encode($die_making);
      for ($i=0; $i < count($request->input('die_cuting_vender_type')); $i++) { 
        $die_cuting['row_'.$i] = array(
          "die_cuting_vender_type"=>$request->input("die_cuting_vender_type")[$i],
          "die_cuting_vender_material"=>$request->input("die_cuting_vender_material")[$i],
          "die_cuting_qty"=>$request->input("die_cuting_qty")[$i],
          "die_cuting_size"=>$request->input("die_cuting_size")[$i],
          "die_cuting_unit_price"=>$request->input("die_cuting_unit_price")[$i],
          "die_cuting_amount"=>$request->input("die_cuting_amount")[$i]
        );
      }
      $data['die_cuting'] = json_encode($die_cuting);
      for ($i=0; $i < count($request->input('pasting_vendor_type')); $i++) { 
        $pasting['row_'.$i] = array(
          "pasting_vendor_type"=>$request->input("pasting_vendor_type")[$i],
          "pasting_vendor_material"=>$request->input("pasting_vendor_material")[$i],
          "pasting_qty"=>$request->input("pasting_qty")[$i],
          "pasting_size"=>$request->input("pasting_size")[$i],
          "pasting_unit_price"=>$request->input("pasting_unit_price")[$i],
          "pasting_amount"=>$request->input("pasting_amount")[$i]
        );
      }
      $data['pasting'] = json_encode($pasting);
      for ($i=0; $i < count($request->input('double_pasting_vendor_type')); $i++) { 
        $double_pasting['row_'.$i] = array(
          "double_pasting_vendor_type"=>$request->input("double_pasting_vendor_type")[$i],
          "double_pasting_vendor_material"=>$request->input("double_pasting_vendor_material")[$i],
          "double_pasting_qty"=>$request->input("double_pasting_qty")[$i],
          "double_pasting_size"=>$request->input("double_pasting_size")[$i],
          "double_pasting_unit_price"=>$request->input("double_pasting_unit_price")[$i],
          "double_pasting_amount"=>$request->input("double_pasting_amount")[$i]
        );
      }
      $data['double_pasting'] = json_encode($double_pasting);
      for ($i=0; $i < count($request->input('mis_cellaneouse_vendor')); $i++) { 
        $mis_cellaneouse['row_'.$i] = array(
          "mis_cellaneouse_vendor"=>$request->input("mis_cellaneouse_vendor")[$i],
          "mis_cellaneouse_qty"=>$request->input("mis_cellaneouse_qty")[$i],
          "mis_cellaneouse_size"=>$request->input("mis_cellaneouse_size")[$i],
          "mis_cellaneouse_unit_price"=>$request->input("mis_cellaneouse_unit_price")[$i],
          "mis_cellaneouse_amount"=>$request->input("mis_cellaneouse_amount")[$i],
        );
      }
      $data['mis_cellaneouse'] = json_encode($mis_cellaneouse);
      $data['production_form_status'] = "off";
      $data['total_amount'] = $request->input("total_amount");
      $result = DB::table("production_form")->insert($data);
      if($result==1){
        Session::flash('AddProduction', 'Production Form Successfully Added');
        return redirect('production-form');
      }
  

        $name=$request->input('job');

   $count=DB::table('production_house_form')->where('job',$name)->get();

   if (count($count)>0)

    {
     
     Session::flash('dublicate','Dublicate Job ID Entry , Plz  Avoid This ');

   }
   
   else{


       
        $data['job'] = $request->input('job');
        $data['date'] = $request->input('date');
        $data['item'] = $request->input('item');
        $data['qty1'] = json_encode($request->input('qty'));
        $data['printing1'] = json_encode($request->input('printing'));
        $data['sheet_size'] = json_encode($request->input('sheet_size'));
        $data['p_unit'] = $request->input('p_unit');
        $data['currency'] = $request->input('currency');
        $data['website'] = $request->input('website');
        $data['dp_vendor'] = $request->input('dp_vendor');
        $data['scanning_vendor'] = $request->input('scanning_vendor');
        $data['pm_vendor'] = $request->input('pm_vendor');
        $data['stock_gsm_vendor'] = $request->input('stock_gsm_vendor');
        $data['printing_vendor'] =$request->input('printing_vendor');
        $data['lms_vendor'] = $request->input('lms_vendor');
        $data['spotuv_vendor'] = $request->input('spotuv_vendor');
        $data['bm_vendor'] = $request->input('bm_vendor');
        $data['embossiong_vendor'] = $request->input('embossiong_vendor');
        $data['folling_vendor'] = $request->input('folling_vendor');
        $data['diem_vendor'] = $request->input('diem_vendor');
        $data['diec_vendor'] = $request->input('diec_vendor');
        $data['pasting_vendor'] = $request->input('pasting_vendor');
        $data['mc_vendor'] = $request->input('mc_vendor');
        $data['planning'] = $request->input('planning');
        $data['digitial_print_qty_p_size'] = $request->input('dp_qty_p_size');
        $data['digitial_print_amount'] = $request->input('dp_amount');
        $data['scanning_qty_p_size'] = $request->input('scanning_qty_p_size');
        $data['scanning_amount'] = $request->input('scanning_amount');
        $data['plate_making_qty_p_size'] = $request->input('pm_qty_p_size');
        $data['plate_making_amount'] = $request->input('pm_amount');
        $data['stock_gsm_qty_p_size'] = json_encode($request->input('stock_gsm_qty_p_size'));
        $data['stock_gsm_amount'] = $request->input('stock_gsm_amount');
        $data['printing_qty_p_size'] = $request->input('printing_qty_p_size');
        $data['printing_amount'] = $request->input('printing_amount');
        $data['lam_matt_shine_qty_p_size'] = $request->input('lms_qty_p_size');
        $data['lam_matt_shine_amount'] = $request->input('lms_amount');
        $data['spot_u_v_shine_qty_p_size'] = $request->input('spotuv_qty_p_size');
        $data['spot_u_v_amount'] = $request->input('spotuv_amount');
        $data['block_making_qty_p_size'] = json_encode($request->input('bm_qty_p_size'));
        $data['block_making_amount'] = json_encode($request->input('bm_amount'));
        $data['embossing_qty_p_size'] =json_encode($request->input('embossing_qty_p_size'));
        $data['embossing_amount'] = json_encode($request->input('embossing_amount'));
        $data['foiling_qty_p_size'] = $request->input('folling_qty_p_size');
        $data['foiling_amount'] = $request->input('folling_amount');
        $data['die_making_qty_p_size'] = json_encode($request->input('diem_qty_p_size'));
        $data['die_making_amount'] = json_encode($request->input('diem_amount'));
        $data['die_cutting_qty_p_size'] = $request->input('diec_qty_p_size');
        $data['die_cutting_amount'] = $request->input('diec_amount');
        $data['pasting_qty_p_size'] = $request->input('pasting_qty_p_size');
        $data['pasting_amount'] = $request->input('pasting_amount');
        $data['miscelianeous_qty_p_size'] =json_encode ($request->input('mc_qty_p_size')); 
        $data['miscelianeous_amount'] = json_encode($request->input('mc_amount'));  
        $data['total_amount'] = $request->input('total_amount'); 
        
        
        //new data qunatity
        $data['dp_qty'] = $request->input('dp_qty'); 
        $data['scanning_qty'] = $request->input('scanning_qty'); 
        $data['pm_qty'] = $request->input('pm_qty'); 
        $data['stock_gsm_qty'] = json_encode($request->input('stock_gsm_qty')); 
        $data['printing_qty'] = $request->input('printing_qty'); 
        $data['lms_qty'] = $request->input('lms_qty'); 
        $data['spotuv_qty'] = $request->input('spotuv_qty'); 
        $data['bm_qty'] = json_encode($request->input('bm_qty')); 
        $data['embossing_qty'] =json_encode($request->input('embossing_qty')); 
        $data['folling_qty'] = $request->input('folling_qty'); 
        $data['diem_qty'] =json_encode($request->input('diem_qty')); 
        $data['diec_qty'] = $request->input('diec_qty'); 
        $data['pasting_qty'] = $request->input('pasting_qty'); 
        $data['mc_qty'] = json_encode($request->input('mc_qty')); 
        
        
        //new data p.uint
        $data['dp_unit'] = $request->input('dp_unit');
        $data['scanning_unit'] = $request->input('scanning_unit');
        $data['pm_unit'] = $request->input('pm_unit');
        $data['stock_unit'] = json_encode($request->input('stock_unit'));
        $data['printing_unit'] = $request->input('printing_unit');
        $data['lms_unit'] = $request->input('lms_unit');
        $data['bm_unit'] = json_encode($request->input('bm_unit'));
        $data['spotuv_unit'] = $request->input('spotuv_unit');
        $data['embossing_unit'] = json_encode($request->input('embossing_unit'));
        $data['folling_unit'] = $request->input('folling_unit');
        $data['diem_unit'] = json_encode($request->input('diem_unit'));
        $data['diec_unit'] = $request->input('diec_unit');
        $data['pasting_unit'] = $request->input('pasting_unit');
        $data['mc_unit'] = json_encode($request->input('mc_unit'));
        //new double_pasting fileds
        
        $data['double_pasting_vendor']=$request->input('double_pasting_vendor');
        $data['double_pasting_qty']=$request->input('double_pasting_qty');
        $data['double_pasting_size']=$request->input('double_pasting_size');
        $data['double_pasting_unit']=$request->input('double_pasting_unit');
        $data['double_pasting_amount']=$request->input('double_pasting_amount');
        
        
        /*echo "<pre>";
        
        print_r($data);
        
        die();*/
        
        
        
        
                     if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('images/', $name);  
                $dae[] = $name;  
            }
            $data['images']=json_encode($dae);
         }

        
    
      
        DB::table('production_house_form')->insert($data);
        
        
       
         
   }
   Session::flash('AddProduction', 'Production Form Successfully Added');
         return redirect('production-form');

          
    }
    
    
    public function EditProductionData($id){
      $data = array();
      $data['get_production_form_data_by_id'] = DB::table("production_form")->where("production_form_id", $id)->get();
      $data['product_size_for_plate_making']=DB::table('product_size_for_plate_making')->get(); 
      $data['stock_type']=DB::table('stock_type')->get(); 
      $data['stock_size']=DB::table('stock_size')->get();
      $data['stock_gsm']=DB::table('stock_gsm')->get(); 
      $data['data'] = DB::table('website')->get();
      $data['get_all_vendor_type'] = DB::table("vendor_type")->get();
      $data['get_all_vendor_material'] = DB::table("vendor_material")->get();
      /*echo "<pre>";
      print_r($data['get_production_form_data_by_id']);
      die();*/
      return view("admin/edit-production-form-data", $data);
    }
      public function update_production_form_data(Request $request){
        /*echo "<pre>";
        print_r($_POST);
        die();*/
        $data['job'] = $request->input("job");
        $data['date'] = $request->input("date");
        $data['item'] = $request->input("item");
        for ($i=0; $i < count($request->input('qty')); $i++) { 
          $qunatity_printing_sheet_size['row_'.$i] = array("qty"=>$request->input("qty")[$i], "printing"=>$request->input("printing")[$i], "sheet_size"=>$request->input("sheet_size")[$i]);
        }
        $data['qunatity_printing_sheet_size'] = json_encode($qunatity_printing_sheet_size);
        $data['unit'] = $request->input("unit");
        $data['currency'] = $request->input("currency");
        $data['website'] = $request->input("website");
        $data['planning'] = $request->input("planning");
        $corrugation = array(
        "corrugation_vendor"=>$request->input("corrugation_vendor"),
        "corrugation_qty"=>$request->input("corrugation_qty"),
        "corrugation_size"=>$request->input("corrugation_size"),
        "corrugation_unit_price"=>$request->input("corrugation_unit_price"),
        "corrugation_amount"=>$request->input("corrugation_amount"),
      );
      $data['corrugation'] = json_encode($corrugation);
        $digital_printing = array(
          "digital_printing_vendor"=>$request->input("digital_printing_vendor"),
          "digital_printing_qty"=>$request->input("digital_printing_qty"),
          "digital_printing_size"=>$request->input("digital_printing_size"),
          "digital_printing_unit_price"=>$request->input("digital_printing_unit_price"),
          "digital_printing_amount"=>$request->input("digital_printing_amount"),
        );
        $data['digital_printing'] = json_encode($digital_printing);
        
        $scanning = array(
          "scanning_vendor"=>$request->input("scanning_vendor"),
          "scanning_qty"=>$request->input("scanning_qty"),
          "scanning_size"=>$request->input("scanning_size"),
          "scanning_unit_price"=>$request->input("scanning_unit_price"),
          "scanning_amount"=>$request->input("scanning_amount")
        );
        $data['scanning'] = json_encode($scanning);
        $plate_making = array(
          "plate_making_vendor"=>$request->input("plate_making_vendor"),
          "plate_making_qty"=>$request->input("plate_making_qty"),
          "plate_making_size"=>$request->input("plate_making_size"),
          "plate_making_unit_price"=>$request->input("plate_making_unit_price"),
          "plate_making_amount"=>$request->input("plate_making_amount")
        );
        $data['plate_making'] = json_encode($plate_making);
        for ($i=0; $i < count($request->input('vendor_type')); $i++) { 
          $stock_gsm['row_'.$i] = array(
            "vendor_type"=>$request->input("vendor_type")[$i],
            "vendor_material"=>$request->input("vendor_material")[$i],
            "stock_gsm_qty"=>$request->input("stock_gsm_qty")[$i],
            "stock_gsm_size_qty"=>$request->input("stock_gsm_size_qty")[$i],
            "stock_gsm_size"=>$request->input("stock_gsm_size")[$i],
            "stock_gsm_unit_price"=>$request->input("stock_gsm_unit_price")[$i],
            "stock_gsm_amount"=>$request->input("stock_gsm_amount")[$i]
          );
        }
        $data['stock_gsm'] = json_encode($stock_gsm);
        $out_source_printing = array(
          "out_source_printing_vendor"=>$request->input("out_source_printing_vendor"),
          "out_source_printing_qty"=>$request->input("out_source_printing_qty"),
          "out_source_printing_size"=>$request->input("out_source_printing_size"),
          "out_source_printing_unit_price"=>$request->input("out_source_printing_unit_price"),
          "out_source_printing_amount"=>$request->input("out_source_printing_amount"),
        );
        $data['out_source_printing'] = json_encode($out_source_printing);
        $lamination_mate_shine = array(
          "lamination_mate_shine_vendor_type"=>$request->input("lamination_mate_shine_vendor_type"),
          "lamination_mate_shine_vendor_material"=>$request->input("lamination_mate_shine_vendor_material"),
          "lamination_mate_shine_vendor_qty"=>$request->input("lamination_mate_shine_vendor_qty"),
          "lamination_mate_shine_vendor_size"=>$request->input("lamination_mate_shine_vendor_size"),
          "lamination_mate_shine_vendor_unit_price"=>$request->input("lamination_mate_shine_vendor_unit_price"),
          "lamination_mate_shine_vendor_amount"=>$request->input("lamination_mate_shine_vendor_amount")
        );
        $data['lamination_mate_shine'] = json_encode($lamination_mate_shine);
        $glue = array(
          "glue_vendor"=>$request->input("glue_vendor"),
          "glue_qty"=>$request->input("glue_qty"),
          "glue_size"=>$request->input("glue_size"),
          "glue_unit_price"=>$request->input("glue_unit_price"),
          "glue_amount"=>$request->input("glue_amount")
        );
        $data['glue'] = json_encode($glue);
        $spot = array(
          "spot_vendor_type"=>$request->input("spot_vendor_type"),
          "spot_vendor_material"=>$request->input("spot_vendor_material"),
          "spot_qty"=>$request->input("spot_qty"),
          "spot_size"=>$request->input("spot_size"),
          "spot_unit_price"=>$request->input("spot_unit_price"),
          "spot_amount"=>$request->input("spot_amount")
        );
        $data['spot'] = json_encode($spot);
        for ($i=0; $i < count($request->input('block_making_vendor_type')); $i++) { 
          $block_making['row_'.$i] = array(
            "block_making_vendor_type"=>$request->input("block_making_vendor_type")[$i],
            "block_making_vendor_material"=>$request->input("block_making_vendor_material")[$i],
            "block_making_qty"=>$request->input("block_making_qty")[$i],
            "block_making_size"=>$request->input("block_making_size")[$i],
            "block_making_unit_price"=>$request->input("block_making_unit_price")[$i],
            "block_making_amount"=>$request->input("block_making_amount")[$i],
          );
        }
        $data['block_making'] = json_encode($block_making);
        for ($i=0; $i < count($request->input('embossing_vendor_type')); $i++) { 
          $embossing['row_'.$i] = array(
            "embossing_vendor_type"=>$request->input("embossing_vendor_type")[$i],
            "embossing_vendor_material"=>$request->input("embossing_vendor_material")[$i],
            "embossing_qty"=>$request->input("embossing_qty")[$i],
            "embossing_size"=>$request->input("embossing_size")[$i],
            "embossing_unit_price"=>$request->input("embossing_unit_price")[$i],
            "embossing_amount"=>$request->input("embossing_amount")[$i],
          );
        }
        $data['embossing'] = json_encode($embossing);
        $folling = array(
          "folling_vendor"=>$request->input("folling_vendor"),
          "folling_qty"=>$request->input("folling_qty"),
          "folling_size"=>$request->input("folling_size"),
          "folling_unit_price"=>$request->input("folling_unit_price"),
          "folling_amount"=>$request->input("folling_amount")
        );
        $data['folling'] = json_encode($folling);
        for ($i=0; $i < count($request->input('die_making_vendor')); $i++) { 
          $die_making['row_'.$i] = array(
            "die_making_vendor"=>$request->input("die_making_vendor")[$i],
            "die_making_number_of_ups"=>$request->input("die_making_number_of_ups")[$i],
            "die_making_qty"=>$request->input("die_making_qty")[$i],
            "die_making_size"=>$request->input("die_making_size")[$i],
            "die_making_unit_price"=>$request->input("die_making_unit_price")[$i],
            "die_making_amount"=>$request->input("die_making_amount")[$i]
          );
        }
        $data['die_making'] = json_encode($die_making);
        for ($i=0; $i < count($request->input('die_cuting_vender_type')); $i++) { 
          $die_cuting['row_'.$i] = array(
            "die_cuting_vender_type"=>$request->input("die_cuting_vender_type")[$i],
            "die_cuting_vender_material"=>$request->input("die_cuting_vender_material")[$i],
            "die_cuting_qty"=>$request->input("die_cuting_qty")[$i],
            "die_cuting_size"=>$request->input("die_cuting_size")[$i],
            "die_cuting_unit_price"=>$request->input("die_cuting_unit_price")[$i],
            "die_cuting_amount"=>$request->input("die_cuting_amount")[$i]
          );
        }
        $data['die_cuting'] = json_encode($die_cuting);
        for ($i=0; $i < count($request->input('pasting_vendor_type')); $i++) { 
          $pasting['row_'.$i] = array(
            "pasting_vendor_type"=>$request->input("pasting_vendor_type")[$i],
            "pasting_vendor_material"=>$request->input("pasting_vendor_material")[$i],
            "pasting_qty"=>$request->input("pasting_qty")[$i],
            "pasting_size"=>$request->input("pasting_size")[$i],
            "pasting_unit_price"=>$request->input("pasting_unit_price")[$i],
            "pasting_amount"=>$request->input("pasting_amount")[$i]
          );
        }
        $data['pasting'] = json_encode($pasting);
        for ($i=0; $i < count($request->input('double_pasting_vendor_type')); $i++) { 
          $double_pasting['row_'.$i] = array(
            "double_pasting_vendor_type"=>$request->input("double_pasting_vendor_type")[$i],
            "double_pasting_vendor_material"=>$request->input("double_pasting_vendor_material")[$i],
            "double_pasting_qty"=>$request->input("double_pasting_qty")[$i],
            "double_pasting_size"=>$request->input("double_pasting_size")[$i],
            "double_pasting_unit_price"=>$request->input("double_pasting_unit_price")[$i],
            "double_pasting_amount"=>$request->input("double_pasting_amount")[$i]
          );
        }
        $data['double_pasting'] = json_encode($double_pasting);
        for ($i=0; $i < count($request->input('mis_cellaneouse_vendor')); $i++) { 
          $mis_cellaneouse['row_'.$i] = array(
            "mis_cellaneouse_vendor"=>$request->input("mis_cellaneouse_vendor")[$i],
            "mis_cellaneouse_qty"=>$request->input("mis_cellaneouse_qty")[$i],
            "mis_cellaneouse_size"=>$request->input("mis_cellaneouse_size")[$i],
            "mis_cellaneouse_unit_price"=>$request->input("mis_cellaneouse_unit_price")[$i],
            "mis_cellaneouse_amount"=>$request->input("mis_cellaneouse_amount")[$i],
          );
        }
        $data['mis_cellaneouse'] = json_encode($mis_cellaneouse);
        $data['production_form_status'] = $request->input("production_form_status");
        $data['total_amount'] = $request->input("total_amount");
        /*echo "<pre>";
        print_r($data);
        die();*/
        $result = DB::table("production_form")->where("production_form_id", $request->input("production_form_id"))->update($data);
        if($result==1){
          Session::flash('EditProduction', 'Production Form Successfully Added');
          return redirect('edit-production-data/'.$request->input("production_form_id"));
        }else{
          return redirect('edit-production-data/'.$request->input("production_form_id"));
        }
      }
       public function update_production_form(Request $request,$id){
        die();        
        $data['job'] = $request->input('job');
        $data['date'] = $request->input('date');
        $data['item'] = $request->input('item');
        $data['qty1'] = json_encode($request->input('qty'));
        $data['printing1'] = json_encode($request->input('printing'));
        $data['sheet_size'] = json_encode($request->input('sheet_size'));
        $data['p_unit'] = $request->input('p_unit');
        $data['currency'] = $request->input('currency');
        $data['website'] = $request->input('website');
        $data['dp_vendor'] = $request->input('dp_vendor');
        $data['scanning_vendor'] = $request->input('scanning_vendor');
        $data['pm_vendor'] = $request->input('pm_vendor');
        $data['stock_gsm_vendor'] = $request->input('stock_gsm_vendor');
        $data['printing_vendor'] =$request->input('printing_vendor');
        $data['lms_vendor'] = $request->input('lms_vendor');
        $data['spotuv_vendor'] = $request->input('spotuv_vendor');
        $data['bm_vendor'] = $request->input('bm_vendor');
        $data['embossiong_vendor'] = $request->input('embossiong_vendor');
        $data['folling_vendor'] = $request->input('folling_vendor');
        $data['diem_vendor'] = $request->input('diem_vendor');
        $data['diec_vendor'] = $request->input('diec_vendor');
        $data['pasting_vendor'] = $request->input('pasting_vendor');
        $data['mc_vendor'] = $request->input('mc_vendor');
        $data['planning'] = $request->input('planning');
        $data['digitial_print_qty_p_size'] = $request->input('dp_qty_p_size');
        $data['digitial_print_amount'] = $request->input('dp_amount');
        $data['scanning_qty_p_size'] = $request->input('scanning_qty_p_size');
        $data['scanning_amount'] = $request->input('scanning_amount');
        $data['plate_making_qty_p_size'] = $request->input('pm_qty_p_size');
        $data['plate_making_amount'] = $request->input('pm_amount');
        $data['stock_gsm_qty_p_size'] = json_encode($request->input('stock_gsm_qty_p_size'));
        $data['stock_gsm_amount'] = $request->input('stock_gsm_amount');
        $data['printing_qty_p_size'] = $request->input('printing_qty_p_size');
        $data['printing_amount'] = $request->input('printing_amount');
        $data['lam_matt_shine_qty_p_size'] = $request->input('lms_qty_p_size');
        $data['lam_matt_shine_amount'] = $request->input('lms_amount');
        $data['spot_u_v_shine_qty_p_size'] = $request->input('spotuv_qty_p_size');
        $data['spot_u_v_amount'] = $request->input('spotuv_amount');
        $data['block_making_qty_p_size'] = json_encode($request->input('bm_qty_p_size'));
        $data['block_making_amount'] = json_encode($request->input('bm_amount'));
        $data['embossing_qty_p_size'] =json_encode($request->input('embossing_qty_p_size'));
        $data['embossing_amount'] = json_encode($request->input('embossing_amount'));
        $data['foiling_qty_p_size'] = $request->input('folling_qty_p_size');
        $data['foiling_amount'] = $request->input('folling_amount');
        $data['die_making_qty_p_size'] = json_encode($request->input('diem_qty_p_size'));
        $data['die_making_amount'] = json_encode($request->input('diem_amount'));
        $data['die_cutting_qty_p_size'] = $request->input('diec_qty_p_size');
        $data['die_cutting_amount'] = $request->input('diec_amount');
        $data['pasting_qty_p_size'] = $request->input('pasting_qty_p_size');
        $data['pasting_amount'] = $request->input('pasting_amount');
        $data['miscelianeous_qty_p_size'] =json_encode ($request->input('mc_qty_p_size')); 
        $data['miscelianeous_amount'] = json_encode($request->input('mc_amount'));
        $data['total_amount'] = $request->input('total_amount'); 
        
        
        //new data qunatity
        $data['dp_qty'] = $request->input('dp_qty'); 
        $data['scanning_qty'] = $request->input('scanning_qty'); 
        $data['pm_qty'] = $request->input('pm_qty'); 
        $data['stock_gsm_qty'] = json_encode($request->input('stock_gsm_qty')); 
        $data['printing_qty'] = $request->input('printing_qty'); 
        $data['lms_qty'] = $request->input('lms_qty'); 
        $data['spotuv_qty'] = $request->input('spotuv_qty'); 
        $data['bm_qty'] = json_encode($request->input('bm_qty')); 
        $data['embossing_qty'] =json_encode($request->input('embossing_qty')); 
        $data['folling_qty'] = $request->input('folling_qty'); 
        $data['diem_qty'] =json_encode($request->input('diem_qty')); 
        $data['diec_qty'] = $request->input('diec_qty'); 
        $data['pasting_qty'] = $request->input('pasting_qty'); 
        $data['mc_qty'] = json_encode($request->input('mc_qty')); 
        
        
        //new data p.uint
        $data['dp_unit'] = $request->input('dp_unit');
        $data['scanning_unit'] = $request->input('scanning_unit');
        $data['pm_unit'] = $request->input('pm_unit');
        $data['stock_unit'] = json_encode($request->input('stock_unit'));
        $data['printing_unit'] = $request->input('printing_unit');
        $data['lms_unit'] = $request->input('lms_unit');
        $data['bm_unit'] = json_encode($request->input('bm_unit'));
        $data['spotuv_unit'] = $request->input('spotuv_unit');
        $data['embossing_unit'] = json_encode($request->input('embossing_unit'));
        $data['folling_unit'] = $request->input('folling_unit');
        $data['diem_unit'] = json_encode($request->input('diem_unit'));
        $data['diec_unit'] = $request->input('diec_unit');
        $data['pasting_unit'] = $request->input('pasting_unit');
        $data['mc_unit'] = json_encode($request->input('mc_unit'));
        //new double_pasting fileds
        
        $data['double_pasting_vendor']=$request->input('double_pasting_vendor');
        $data['double_pasting_qty']=$request->input('double_pasting_qty');
        $data['double_pasting_size']=$request->input('double_pasting_size');
        $data['double_pasting_unit']=$request->input('double_pasting_unit');
        $data['double_pasting_amount']=$request->input('double_pasting_amount');
 

        if($request->hasfile('images'))
                 {
                    foreach($request->file('images') as $image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move('images/', $name);  
                        $temp_gallery[] = $name;  
                    }
                    if($request->input('oldgallery')){
                    $data['images']=json_encode(array_merge($request->input('oldgallery'),$temp_gallery));
                    }else {
                        $data['images']=json_encode($temp_gallery);
                    }
                 }

//       echo "<pre>";
//  print_r($data);
//  die();
        DB::table('production_house_form')->where('id', $id)->update($data);
    Session::flash('EditProduction', 'Production Form Successfully Edit');
         return redirect('edit-production-form/'.$id);

          
    } 
    
    
    
         public function del_galery_image($name,$id){
        if (!empty($id)) {
               $exData = DB::table('production_house_form')->where('id', $id)->get();
                $exData = json_decode(json_encode($exData), true);
        
               $exImages = json_decode($exData[0]['images']);
             $exImages  = json_decode(json_encode( $exImages), true);
               $newImages = array_diff($exImages, array($name));
              
         $data=[
                'images'=>json_encode($newImages),
                    ];
               DB::table('production_house_form')->where('id',$id)->update($data);
               return  redirect('edit-production-form/'.$id);
         }
         else{
        echo "image  already deleted";
         }
            }
    public function get_die_making_row(Request $request){
    $data['get_all_vendor_type'] = DB::table("vendor_type")->get();
   $data['get_all_vendor_material'] = DB::table("vendor_material")->get();
    // print_r($_POST);
    ?>
    <tr class="die-making-row" id="die-making-row-<?php echo $request->row_count; ?>">
      <td>
        <label for="username" class="mb-0 m-lable">Die making</label>
      </td>
      <td>
        <table>
          <tr>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="bootstrap-select p_left fm-cmp-mg" style="">
                  <select class="selectpicker" name="die_making_vendor[]" data-live-search="true">
                    <?php if(!empty($data['get_all_vendor_type'])){foreach($data['get_all_vendor_type'] as $key=>$value){if($value->vendor_type_for==1){ ?>
                    <option value="<?php echo $value->vendor_type_value; ?>"><?php echo $value->vendor_type_value; ?></option>
                    <?php }}} ?>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="field_wrapper_diem_qty"> 
                  <div class="nk-int-st">
                    <input type="text" class="form-control" name="die_making_number_of_ups[]" />
                    <label class="nk-label">Number of Ups</label>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="field_wrapper_diem_qty"> 
            <div class="nk-int-st">
              <input type="text" class="form-control die-making-qty" name="die_making_qty[]" />
              <label class="nk-label">Quantity</label>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="field_wrapper_die">  
            <div class="nk-int-st">
              <input type="text" class="form-control die-making-size" placeholder="" step="any" value="" name="die_making_size[]" />
              <label class="nk-label">Size</label>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="field_wrapper_diem_unit">  
            <div class="nk-int-st">
              <input type="text" class="form-control die-making-unit-price" name="die_making_unit_price[]" />
              <label class="nk-label">Rate Per Unit</label>
            </div>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="number" class="form-control die-making-amount row-amount" placeholder="" step="any" value="0" id="diem_amount" name="die_making_amount[]" readonly />
            <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="die_making_remove_button" die-making-row-count="<?php echo $request->row_count; ?>" title="Add field">
              <img src="../images/remove-icon.png"/>
            </a>
            <label class="nk-label">Amount</label>
          </div>
        </div>
      </td>
    </tr>
    <?php
  }
  public function get_die_cutting_row(Request $request){
    $data['get_all_vendor_type'] = DB::table("vendor_type")->get();
    $data['get_all_vendor_material'] = DB::table("vendor_material")->get();
    ?>
    <tr class="die-cutting-row" id="die-cutting-row-<?php echo $request->row_count; ?>">
      <td>
        <label for="username" class="mb-0 m-lable">Die cutting</label>
      </td>
      <td>
        <table>
          <tr>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="bootstrap-select p_left fm-cmp-mg" style="">
                  <select class="selectpicker" name="die_cuting_vender_type[]" data-live-search="true">
                    <?php if(!empty($data['get_all_vendor_type'])){foreach($data['get_all_vendor_type'] as $key=>$value){if($value->vendor_type_for==2){ ?>
                    <option value="<?php echo $value->vendor_type_value; ?>"><?php echo $value->vendor_type_value; ?></option>
                    <?php }}} ?>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="bootstrap-select p_left fm-cmp-mg" style="">
                  <select class="selectpicker" name="die_cuting_vender_material[]" data-live-search="true">
                    <?php if(!empty($data['get_all_vendor_material'])){foreach($data['get_all_vendor_material'] as $key=>$value){if($value->vendor_material_for==2){ ?>
                    <option value="<?php echo $value->vendor_material_value; ?>"><?php echo $value->vendor_material_value; ?></option>
                    <?php }}} ?>
                  </select>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control die-cutting-qty" name="die_cuting_qty[]" />
            <label class="nk-label">Quantity</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control die-cutting-size" placeholder="" step="any" value="" name="die_cuting_size[]" />
            <label class="nk-label">Size</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control die-cutting-unit-price" name="die_cuting_unit_price[]" />
            <label class="nk-label">Rate Per Unit</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="number" class="form-control die-cutting-amount row-amount" placeholder="" step="any" id="diec_amount" name="die_cuting_amount[]" value="0" readonly />
            <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_die_cutting" die-cutting-row-count="<?php echo $request->row_count; ?>" title="Add field">
              <img src="../images/remove-icon.png"/>
            </a>
            <label class="nk-label">Amount</label>
          </div>
        </div>
      </td>
    </tr>
    <?php
  }
    
  public function get_pasting_row(Request $request){
    $data['get_all_vendor_type'] = DB::table("vendor_type")->get();
    $data['get_all_vendor_material'] = DB::table("vendor_material")->get();
    ?>
    <tr class="pasting-row" id="pasting-row-<?php echo $request->row_count; ?>">
      <td>
        <label for="username" class="mb-0 m-lable">Pasting</label>
      </td>
      <td>
        <table>
          <tr>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="bootstrap-select p_left fm-cmp-mg" style="">
                  <select class="selectpicker" name="pasting_vendor_type[]" data-live-search="true">
                    <?php if(!empty($data['get_all_vendor_type'])){foreach($data['get_all_vendor_type'] as $key=>$value){if($value->vendor_type_for==3){ ?>
                    <option value="<?php echo $value->vendor_type_value; ?>"><?php echo $value->vendor_type_value; ?></option>
                    <?php }}} ?>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <div class="form-group ic-cmp-int float-lb floating-lb">
                <div class="form-ic-cmp"></div>
                <div class="bootstrap-select p_left fm-cmp-mg" style="">
                  <select class="selectpicker" name="pasting_vendor_material[]" data-live-search="true">
                    <?php if(!empty($data['get_all_vendor_material'])){foreach($data['get_all_vendor_material'] as $key=>$value){if($value->vendor_material_for==3){ ?>
                    <option value="<?php echo $value->vendor_material_value; ?>"><?php echo $value->vendor_material_value; ?></option>
                    <?php }}} ?>
                  </select>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control pasting-qty" name="pasting_qty[]" />
            <label class="nk-label">Quantity</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control pasting-size" placeholder="" step="any" value="" name="pasting_size[]" />
            <label class="nk-label">Size</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="text" class="form-control pasting-unit-price" name="pasting_unit_price[]" />
            <label class="nk-label">Rate Per Unit</label>
          </div>
        </div>
      </td>
      <td>
        <div class="form-group ic-cmp-int float-lb floating-lb">
          <div class="form-ic-cmp"></div>
          <div class="nk-int-st">
            <input type="number" class="form-control pasting-amount row-amount" placeholder="" step="any" id="diec_amount" name="pasting_amount[]" value="0" readonly />
            <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_pasting" pasting-row-count="<?php echo $request->row_count; ?>" title="Add field">
              <img src="../images/remove-icon.png"/>
            </a>
            <label class="nk-label">Amount</label>
          </div>
        </div>
      </td>
    </tr>
    <?php
  }
  public function view_email_page(Request $request){
    $get_website_data['data']=DB::table('sales_enquires')->where('id',$request->selectedid)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->get();
    /*print_r($get_website_data['data'][0]);
    die();*/
    ?>
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close view-email-doc-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="div" style="border: 1px solid  #3092c0 !important;">
                <div class="web_bg text-center py-2">
                    <img style="background: white !important; border: 2px solid white !important;" src="<?php echo url('images/'.$get_website_data['data'][0]->image); ?>" alt="" />
                </div>
                <div class="price_title">
                    <h2 class="text-center text-uppercase font-weight-bold mb-0">Price Quote</h2>
                </div>
                <div class="my-4"></div>
                <div class="" style="padding-left:2px !important; width: 100% !important; margin-top: 50px !important;">
                    <table class="table  table-1 mb-2">
                        <tbody>
                            <tr>
                                <td style="border: 0px !important;" class="font-weight-bold">
                                    <div class="">
                                        <p>Address:</p>
                                        <span class="d-block pl-sm-2" style="font-size: 10px !important; margin-bottom:10px; font-weight:300 !important;">
                                           <?php echo $get_website_data['data'][0]->address;?>
                                        </span>
                                        
                                         <p >Dear <?php echo $get_website_data['data'][0]->c_name;?>,<br>
                                         <span style="font-size: 10px !important; margin-bottom:10px !important; font-weight:300 !important;">Please Review your requested quote below</span> 
                                          </p>
                                    
                                    </div>
                                </td>

                                <td style="border: 0px !important;" class="font-weight-bold">
                                    <table class="table table-bordered table-1">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Quote No#</td>
                                                <td><?php echo $get_website_data['data'][0]->id;?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Date:</td>
                                                <td><?php echo  date("d-m-Y"); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                             </tbody>
                    </table>
                   
                    
                </div>
            </div>
            
            
            <div class="" >
                <table class="table table-bordered table-2 mb-0 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                        <tr>
                            <th scope="col">Sales Person</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $get_website_data['data'][0]->csr_sudo_name;?></td>
                            <td>DHL/FEDEX</td>
                            <td>UPFRONT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <?php //print_r($get_website_data);  ?>
                <table class="table table-bordered table-2 mb-0 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                        <!-- <tr>
                          <th colspan="9">Product <?php //echo $i+1; ?></th>
                        </tr> -->
                        <tr>
                            <th scope="col">Item#</th>
                            <th scope="col">Finish Size</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Box Style</th>
                            <th scope="col">Printing</th>
                            <th scope="col">Addons</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $modal_row = 1; for ($i=0; $i < count(json_decode($get_website_data['data'][0]->product)); $i++) { $product_row = json_decode($get_website_data['data'][0]->product_numbers)[$i]; $qty_row = json_decode($get_website_data['data'][0]->qty)->$product_row; $price_row = json_decode($get_website_data['data'][0]->price)->$product_row; for($ui = 1; $ui <= count((array)$qty_row); $ui++){ ?>
                        <tr class="sales-enquires-modal">
                          <td><?php echo $modal_row; ?></td>
                          <td class="open-size"><?php echo json_decode($get_website_data['data'][0]->f_s_1)[$i]; ?></td>
                          <td class="stock"><?php echo json_decode($get_website_data['data'][0]->stock)[$i]; ?></td>
                          <td class="product"><?php echo json_decode($get_website_data['data'][0]->product)[$i]; ?></td>
                          <td class="printing"><?php echo json_decode($get_website_data['data'][0]->printing)[$i]; ?></td>
                          <td class="addons"><?php echo json_decode($get_website_data['data'][0]->addons)[$i]; ?></td>
                          <td class="qty"><?php echo $qty_row->$ui; ?></td>
                          <td class="price"><?php echo number_format($price_row->$ui/$qty_row->$ui, 2); ?></td>
                          <td class="price"><?php echo $price_row->$ui; ?></td>
                        </tr>
                        <?php $modal_row++;} } ?>
                    </tbody>
                    <!-- <thead bgColor="" class="web_bg">
                      <tr>
                        <th scope="col" colspan="3">Qty</th>
                        <th scope="col" colspan="3">Unit Price</th>
                        <th scope="col" colspan="3">Total Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="3"><?php //$qty_data = json_decode($get_website_data['data'][0]->qty); $qty_row = $i+1; foreach($qty_data->$qty_row as $key=>$value){echo $value."<br>";} ?></td>
                        <td colspan="3"> -->
                          <?php 
                            /*$price_data = json_decode($get_website_data['data'][0]->price); $price_row = $i+1; $price_array = $price_data->$price_row;
                            $qty_data = json_decode($get_website_data['data'][0]->qty); $qty_row = $i+1; $qty_array = $qty_data->$qty_row;
                            for ($ui=1; $ui <= count((array)$price_array); $ui++) { 
                              echo number_format($price_array->$ui/$qty_array->$ui, 2)."<br>";
                            }*/
                          ?>
                        <!-- </td>
                        <td colspan="3"><?php //$price_data = json_decode($get_website_data['data'][0]->price); $price_row = $i+1; foreach($price_data->$price_row as $key=>$value){echo $value."<br>";} ?></td>
                      </tr>
                    </tbody> -->
                </table>
            </div>
            <div class="uniqpad" style="border: 1px solid  #3092c0 !important;">
                   <div class="mb-5 unique-footer ">
                         <h6 class="mb-2 pt-4 font-weight-bold"> Additional  Commments</h6>
                         <div class="row">
                           <div class="col-lg-6">
                             <textarea class="form-control view-email-doc-comment" rows="7" style="resize: none;"></textarea>
                           </div>
                         </div>
                   </div>
                     
                    <div class="mb-1 unique-footer">
                            <h6 class=" font-weight-bold"> 1. Artwork Requirement: </h6>
                            <p>  File Format Supported- EPS, PDF, AI, PSD, CDR  <br class="d-dm-block" /> Resolution- Min 300dpi</p>
                    </div>

                    <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold"> 2. Lead Time </h6>
                        <p>  Standard (10 to 12 Business Days) <br class="d-dm-block" />
                            Rush (6 to 8 Business Days) <br class="d-dm-block" />
                        </p>
                   </div>

                   <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold">  3.No Hidden Or Setup Charges. </h6>
                        <p> </p>
                   </div>
                   <div class="max-footer-wid text-center">
                         <h3 class=" font-weight-bold"> Thank You </h3>
                         <p class="">
                             If You Have Any Questions Or Require Further Assistance, Please Contact Our Customer Service Team <br class="d-dm-block" />
                            Between 8.00am-7.00pm CST, Monday-Friday
                        </p>
                   </div>
                   <div class=" text-center" style="display: block !important;">
                      

                        <table class="table  table-1">
                            <tbody>
                                <tr style="text-align: center !important; width:100% !important;">
                                    <td style="border: 0px !important; text-align: center !important; width:100% !important;" class="font-weight-bold"><p class="text-black footer-p"><i class="fas fa-globe-americas"></i> Phone: <?php echo $get_website_data['data'][0]->number;?> </p></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table  table-1">
                            <tbody>
                                <tr>
                                    <td    style="border: 0px !important; padding-left: 5px !important;"> <a style="color:#000 !important;text-decoration: none !important;" class="text-black" href=""><?php echo $get_website_data['data'][0]->email?></a></p></td>
                                    <td    style="border: 0px !important;"><p class="text-black footer-p"><i class="fa fa-phone"></i> <a class="text-black" href=""><?php echo $get_website_data['data'][0]->website?></a>; </p></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table  table-1">
                            <tbody>
                                <tr>
                                    <td style="border: 0px !important;font-size: 12px !important;" class="font-weight-bold" >Pament Options:</td>
                                    <td style="border: 0px !important;text-align: center !important;"> <img height="" width="200px" src="https://www.thepremiumboxes.com/dist/images_box/payment_ft.png" alt="" /></td>
                                    <td style="border: 0px !important;text-align: center !important;"> <img  width="150px" src="https://printcustompackaging.com/web/images/blue-seal-250-52-blacktxt-bbb-88655540.png" alt="" /></td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" data-id="<?php echo $get_website_data['data'][0]->id ?>" class="btn btn-success view-email-doc-send-email">Send Email & Close</button>
              <!-- <button type="button" data-id="<?php //echo $get_website_data['data'][0]->id ?>" class="btn btn-warning edit-sales-enquiry-modal">Edit</button> -->
              <button type="button" class="btn btn-secondary view-email-doc-close" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>
    <?php
  }
  public function update_sales_enquiry_modal(Request $request){
    $enquiry_id = $request->data_id;
    $data['open_size_1'] = json_encode($request->open_size_value);
    $data['stock'] = json_encode($request->stock_value);
    $data['product'] = json_encode($request->product_value);
    // $data['qty'] = json_encode($request->qty_value);
    $data['price'] = json_encode($request->price_value);
    DB::table("sales_enquires")->where("id", $enquiry_id)->update($data);
  }
  public function get_product_info_view(Request $request){
    $product_id = $request->data_id;
    $result = DB::table('sales_enquires')->orderBy('id','DESC')->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where('id',$product_id)->get();
    ?>
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
          <div class="modal-header">
            <center>
              <div class="info info-prod  py-0 mb-4 print" >
                <h2 class="py-3">Product Information 
                  <button type="button" class="close get-product-info-view-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </h2>
              </div>
            </center>
            <p align="center"><b>Enquiry ID:</b> <?php echo $result[0]->id ?></p>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead class="thead-dark">
                <tr class="info pro-tr-info my-sm-5">
                  <th scope="col" class="bg-color-td">Client Name</th>
                  <th scope="col" class="bg-color-td">Client Email</th>
                  <th scope="col" class="bg-color-td">Client Phone</th>
                  <th scope="col" class="bg-color-td">Website</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bg-color-td-2"><?php echo $result[0]->c_name ?></td>
                  <td class="bg-color-td-2"><?php echo $result[0]->c_email ?></td>
                  <td class="bg-color-td-2"><?php echo $result[0]->c_phone ?></td>
                  <td class="bg-color-td-2"><?php echo $result[0]->website ?></td>
                </tr>
              </tbody>
            </table>
            <?php $modal_row = 1; for ($i=0; $i < count(json_decode($result[0]->product)); $i++) {  ?>
            <table class="table">
              <thead class="thead-dark">
                <tr class="info pro-tr-info my-sm-5">
                  <th scope="col" colspan="3" class="bg-color-td">Product <?php echo $i+1; ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bg-color-td-2"><b>Name:</b> <?php echo json_decode($result[0]->product)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Printing:</b> <?php echo json_decode($result[0]->printing)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Addons:</b> <?php echo json_decode($result[0]->addons)[$i]; ?></td>
                    </tr>
                <tr>
                  <td class="bg-color-td-2"><b>Size:</b> <?php echo json_decode($result[0]->f_s_1)[$i]; ?> <?php echo 'x'?> <?php echo json_decode($result[0]->f_s_2)[$i]; ?> <?php echo 'x'?><?php echo json_decode($result[0]->f_s_3)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Measurement:</b> <?php echo json_decode($result[0]->measurement)[$i]; ?></td>
                   <td class="bg-color-td-2"><b>USA Upping:</b> <?php echo json_decode($result[0]->usa_upping)[$i]; ?></td>
                </tr>
                <tr>
                  <td class="bg-color-td-2"><b>Open Size 1:</b> <?php echo json_decode($result[0]->open_size_1)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Open Size:</b> <?php echo json_decode($result[0]->open_size_2)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Stock:</b> <?php echo json_decode($result[0]->stock)[$i]; ?></td>
                </tr>
                <tr>
                  <?php if(Session::get('desgniation')=="sm" ){ ?>
                  <td class="bg-color-td-2">
                  	<b>Production Price:</b> <?php echo json_decode($result[0]->production_price)[$i]; ?>
                  </td>
              	<?php } ?>
                </tr>
                <tr>
                  <td colspan="3" class="bg-color-td-2"><b>CSR Comment:</b> <?php echo json_decode($result[0]->product_coment)[$i]; ?></td>
                </tr>
                <tr>
                	<th class="bg-color-td" style="text-align: center;">Quantity</th>
                	<th class="bg-color-td" style="text-align: center;">P.U Price</th>
                	<th class="bg-color-td" style="text-align: center;">Price Offered</th>
                </tr>
                <?php $product_row = json_decode($result[0]->product_numbers)[$i]; $qty_row = json_decode($result[0]->qty)->$product_row; $price_row = json_decode($result[0]->price)->$product_row; for($ui = 1; $ui <= count((array)$qty_row); $ui++){ ?>
                <tr>
                  <td class="bg-color-td-2" style="text-align: center;"><?php echo $qty_row->$ui; ?></td>
                  <td class="bg-color-td-2" style="text-align: center;"><?php echo number_format($price_row->$ui/$qty_row->$ui, 2); ?></td>
                  <td class="bg-color-td-2" style="text-align: center;"><?php echo $price_row->$ui; ?></td>
                </tr>
                <?php $modal_row++;} ?>
              </tbody>
            </table>
            <?php  } ?>
            <?php $modal_row = 1; for ($i=0; $i < count(json_decode($result[0]->product)); $i++) { $product_row = json_decode($result[0]->product_numbers)[$i]; $qty_row = json_decode($result[0]->qty)->$product_row; $price_row = json_decode($result[0]->price)->$product_row; for($ui = 1; $ui <= count((array)$qty_row); $ui++){ ?>
            <!-- <table class="table">
              <thead class="thead-dark">
                <tr class="info pro-tr-info my-sm-5">
                  <th scope="col" colspan="3" class="bg-color-td">Product <?php //echo $i+1; ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bg-color-td-2"><b>Name:</b> <?php //echo json_decode($result[0]->product)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Printing:</b> <?php //echo json_decode($result[0]->printing)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Addons:</b> <?php //echo json_decode($result[0]->addons)[$i]; ?></td>
                    </tr>
                <tr>
                  <td class="bg-color-td-2"><b>Size:</b> <?php //echo json_decode($result[0]->f_s_1)[$i]; ?> <?php //echo 'x'?> <?php //echo json_decode($result[0]->f_s_2)[$i]; ?> <?php //echo 'x'?><?php //echo json_decode($result[0]->f_s_3)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Measurement:</b> <?php //echo json_decode($result[0]->measurement)[$i]; ?></td>
                   <td class="bg-color-td-2"><b>USA Upping:</b> <?php //echo json_decode($result[0]->usa_upping)[$i]; ?></td>
                </tr>
                <tr>
                  <td class="bg-color-td-2"><b>Open Size 1:</b> <?php //echo json_decode($result[0]->open_size_1)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Open Size:</b> <?php //echo json_decode($result[0]->open_size_2)[$i]; ?></td>
                  <td class="bg-color-td-2"><b>Stock:</b> <?php //echo json_decode($result[0]->stock)[$i]; ?></td>
                </tr>
                <tr>
                  <td class="bg-color-td-2"><b>Quantity:</b><?php //echo $qty_row->$ui; ?></td>
                  <td class="bg-color-td-2"><b>P.U Price:</b><?php //echo number_format($price_row->$ui/$qty_row->$ui, 2); ?></td>
                  <td class="bg-color-td-2"><b>Price Offered:</b><?php //echo $price_row->$ui; ?></td>
                </tr>
                <tr>
                  <?php //if(Session::get('desgniation')=="sm" ){ ?>
                  <td class="bg-color-td-2">
                  	<b>Production Price:</b> <?php //echo json_decode($result[0]->production_price)[$i]; ?>
                  </td>
              	<?php //} ?>
                </tr>
                <tr>
                  <td colspan="3" class="bg-color-td-2"><b>CSR Comment:</b> <?php //echo json_decode($result[0]->product_coment)[$i]; ?></td>
                </tr>
              </tbody>
            </table> -->
            <?php $modal_row++;} } ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary get-product-info-view-close">Close</button>
          </div>
        </div>
      </div>
    
    <?php
  }
  public function urgent_price_request(Request $request){
  	$selectedid = $request->input('selectedid');
  	$data['urgent_price_request'] = 1;
  	DB::table("sales_enquires")->where("id", $selectedid)->update($data);
  }
  public function show_all_urgent_price_request(){
  	$data['get_all_enquires'] = DB::table("sales_enquires")->where("urgent_price_request", 1)->get();
  	return view("admin/show-all-urgent-price-request", $data);
  }
  public function submit_urgent_price_request(Request $request){
  	/*echo "<pre>";
  	print_r($_POST);*/
  	$data['production_price'] = json_encode($request->input("price"));
  	$data['urgent_price_request'] = 0;
  	$id = $request->input("id");
  	DB::table("sales_enquires")->where("id", $id)->update($data);
  	return redirect('show-all-urgent-price-request');
  }
  public function customer_quote_history(){
    $data = array();
    $userlogin = Session::get('user_name_login');
    $data['sales_enquires_by_sudo_name'] = DB::table("sales_enquires")->where('price_quote_send_by_email', 1)->leftJoin('website', 'website.web_id', '=', 'sales_enquires.website')->where('csr_sudo_name',$userlogin)->get();
    return view('admin/customer-quote-history', $data);
  }
}