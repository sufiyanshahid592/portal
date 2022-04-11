<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminLoginController extends Controller
{
public function view(){
  //$ip=$_SERVER['REMOTE_ADDR'];
//  $ip = $_SERVER["REMOTE_ADDR"];
//  $all_ip=DB::table('all_ip_address')->get();
 
//  foreach($all_ip as $dd){
     
//      $one_ip=$dd->ip_address;
//  if($ip==$one_ip){
return view('admin/login-view');
 // }

//  }
 
//     echo "Your Ip is Blocked Get Well Soon ! ";
 
}
public function dashboardlogin(Request $request)
 {
     Session::flash('login_successfully', 'Login Successfully !');
    
    $user = $request->input('user');
    $password = md5($request->input('password'));
    $checkLogin = DB::table('admin_user_login')->where(['user_name'=>$user,'user_password'=>$password])->get();
    /*echo "<pre>";
    print_r($checkLogin[0]->user_department);
    die();*/
     if(count($checkLogin) >0)
    {
        if ($checkLogin){
                Session::put('user_name_login',$checkLogin[0]->user_name);
                Session::put('user_email_login',$checkLogin[0]->user_email);
                Session::put('user_password_login',$checkLogin[0]->user_password);
                Session::put('user_department',$checkLogin[0]->user_department);
                Session::put('user_role_login',$checkLogin[0]->user_role);
                Session::put('user_id_login',$checkLogin[0]->user_id);
                Session::put('desgniation',$checkLogin[0]->desgniation);
                $ip = $_SERVER["REMOTE_ADDR"];
                $all_ip=DB::table('all_ip_address')->get();
                foreach($all_ip as $add){
                $get_ip=$add->ip_address;    
                if($get_ip==$ip || $user=='amir' || $user=='admin' || $user=='Waqas_yousaf'){
                  if(Session::get('desgniation')=='sm' || Session::get('desgniation')=='tl' || Session::get('desgniation')=='csr'){
                   return redirect('sales-enquiry')->with('success', 'Login Successfully!');

                  }else{
                  	if($checkLogin[0]->user_department=="est"){
                	return redirect('get_est')->with('success', 'Login Successfully!');
                }else{
                   return redirect('dashboard')->with('success', 'Login Successfully!');
               }
                  }
                }
                
              
              
              }
              echo "Your Ip is blocked please contact to Admin";
              
               }
                else{
                 echo "Your Ip is blocked please contact to Admin ";
              }
            
    }
     else{
          Session::flash('error', 'Name or Password do not match & your Ip is Blocked');
          return redirect('/');
        }
    }

    public function updatepassword(Request $request){
      $id = Session::get('user_id_login');
     $oldpassword = md5($request->input('oldpassword'));
     $checkLogin = DB::table('admin_user_login')->where('user_id',$id)->get();
    //      echo "<pre>";
    //  print_r($var);
    //  die();
    $var= $checkLogin[0]->user_password;
    //      echo "<pre>";
    //  print_r($var);
    //  die();
  if ($var==$oldpassword) {
    Session::flash('password_update', 'Password Update Successfully !');
          $data=[

           'user_password' => md5($request->input('newpassword')),

          ];
         }
         else {
          Session::flash('password_error', 'Old Password do not match');
          return redirect('change-password');
         }
      DB::table('admin_user_login')->where('user_id',$id)->update($data);
      
      return redirect('change-password');   
    }
    public function Destroy(Request $request){
      Session::forget('user_name_login');
      Session::forget('user_password_login'); 
        session()->flush();
      return redirect('/');
    }
}


?>

