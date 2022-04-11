<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class Shipping extends Controller
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
             public function shipping_add_form(){
              
              return view('admin/shipping_add_form');
            
            }
                  public function show_shipping_form() 
                  {
         
                       $data['data'] = DB::table('shipping')->get();
                       return view('admin/show_shipping_form',$data);
                   }
                   
                   public function edit_shipping_form($id){
                       
                        $data['data'] = DB::table('shipping')->where('id',$id)->get();
                        
                        return view('admin/edit_form_shipping',$data);
                   }
                   
                   public function view_shipping_data($id){
                       
                         $data['data'] = DB::table('shipping')->where('id',$id)->get();
                         return view('admin/view_shipping_data',$data);
                   }
                   public function delete_shipping_data($id){
                       
                       DB::table('shipping')->where('id',$id)->delete();
                       Session::flash('delete_shipping','Your Data Delete Successfully '); 
                       return redirect('show-shipping-form');
                       
                       
                   }
                   
                   public function update_shipping_data(Request $request){
                       
                     $id= $request->input('id');
            $data=[

     'job_number' => $request->input('job_number'),
     'date' => $request->input('date'),
     'item' => $request->input('item'),
     'process' => $request->input('process'),
     'zone' => $request->input('zone'),
     'quantity' => json_encode($request->input('quantity')),
     
     //new
     'd_quantity' => json_encode($request->input('rateUnit')),
     'subt'=> json_encode($request->input('subt')),
     'cutton'=>$request->input('cutton'),
     'invoice_amount'=> json_encode($request->input('invoice_amount')),
      'remarks'=>$request->input('remarks'),
      
     //end
     'weight' => $request->input('weight'),
     'rate' => $request->input('rate'),
     'currency' => $request->input('currency'),
     'tracking_id' => json_encode($request->input('tracking_id')),
     'address' => $request->input('address'),
     'amount' => json_encode($request->input('amount')),
     'tax' => json_encode($request->input('tax')),
     'miscellaneous' => json_encode($request->input('miscellaneous')),
       
    ];
    //   echo "<pre>";
    // print_r($data);
    // die();
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
                 
           DB::table('shipping')->where('id',$id)->update($data); 
          Session::flash('update_shipping_data','Shipping Successfully Update !'); 
         return redirect('edit-shipping-form'.'/'.$id);
         
         
    }
            public function AddShipping(Request $request) {
   
   $data=[

     'job_number' => $request->input('job_number'),
     'date' => $request->input('date'),
     'item' => $request->input('item'),
     'process' => $request->input('process'),
     'zone' => $request->input('zone'),
     'quantity' => json_encode($request->input('quantity')),
     
     //new
     'd_quantity' => json_encode($request->input('rateUnit')),
     'subt'=> json_encode($request->input('subt')),
     'cutton'=>$request->input('cutton'),
     'invoice_amount'=> json_encode($request->input('invoice_amount')),
      'remarks'=>$request->input('remarks'),
      
     //end
     'weight' => $request->input('weight'),
     'rate' => $request->input('rate'),
     'currency' => $request->input('currency'),
     'tracking_id' => json_encode($request->input('tracking_id')),
     'address' => $request->input('address'),
     'amount' => json_encode($request->input('amount')),
     'tax' => json_encode($request->input('tax')),
     'miscellaneous' => json_encode($request->input('miscellaneous')),
       
    ];
    // echo "<pre>";
    // print_r($data);
    // die();
  if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('images/', $name);  
                $dae[] = $name;  
            }
            
         }
 
    try {
                
      $insert = DB::table('shipping')->insert($data); 
      if(!$insert){
         return redirect('shipping-form');
          
      }
      else{
          Session::flash('NewPageSuccess','Shipping Successfully Added'); 
         return redirect('shipping-form');
      }
      } catch(\Illuminate\Database\QueryException $e){
          $errorCode = $e->errorInfo[1];
          if($errorCode == '1062'){
              Session::flash('FindOldPage', 'Tracking# & Job Number Name Already Exists !!');
               return redirect('shipping-form');
          }
      }
 }
 
        public function del_shipping_galery_image($name,$id){
        if (!empty($id)) {
               $exData = DB::table('shipping')->where('id', $id)->get();
                $exData = json_decode(json_encode($exData), true);
        
               $exImages = json_decode($exData[0]['images']);
             $exImages  = json_decode(json_encode( $exImages), true);
               $newImages = array_diff($exImages, array($name));
              
         $data=[
                'images'=>json_encode($newImages),
                    ];
               DB::table('shipping')->where('id',$id)->update($data);
               return  redirect('edit-shipping-form/'.$id);
         }
         
         else{
        echo "image  already deleted";
         }
        
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
                "job"=>$importData[0],
                "plate_making_amount"=>$importData[1],
                "pm_qty"=>$importData[2],
                "stock_gsm_amount"=>$importData[3],
                "diem_qty"=>$importData[4],
                "die_making_amount"=>$importData[5],
                "embossing_amount"=>$importData[6],
                "block_making_amount"=>$importData[7],
                "printing_amount"=>$importData[8],
                "foiling_amount"=>$importData[9],
                "pasting_amount"=>$importData[10],
                "miscelianeous_amount"=>$importData[11],
                "total_amount"=>$importData[12],
                 "date"=>"2021-01-20"
                
               
               );
               
               
              
            //  json_encode
          /*   echo "<pre>";
              
              print_r($insertData);
              die(); */
          DB::table('production_house_form')->insert($insertData);

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

}