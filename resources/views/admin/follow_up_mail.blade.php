<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
      body{
          font-family: sans-serif;
      }
      p{
          line-height: 1.6;
      }

    </style>
</head>
<body>
      <h4 class="name_title" style=" color:#3092c0 ; font-weight:700"> Hi {{ $data['name'] }} , </h4>
        <p class="email_info " style="padding-left:70px;">
            {{$data['content']}}
       </p>

    <p class="email_info">  <span class="main_span"  style="display: inline-block; color:#3092c0 ; font-weight:500">  Regards,  </span>  </p>
    <p class="email_info">  <span class="main_name"  style="display: inline-block; color:#3092c0 ; font-weight:500">{{$data['csr_sudo_name']}}  </span>  </p>
    <p class="email_info">  <span class="customer_representative"  style="display: inline-block; color:#3092c0 ; font-weight:500">   Customer Service Representative </span>  </p>
    <p class="email_info">  <span class="email"  style="display: inline-block; color:#3092c0 ; font-weight:500">{{$data['website']}} </span>  </p>
  <!--<p class="email_info">  <span class="user_number"  style="display: inline-block; color:#3092c0 ; font-weight:500">Toll Free: 800-396-1840 </span>  </p>
-->
</body>
</html>



      
     

       
      
         
       
          
          
           
           
           
            
            
            
              
         
         
       
          
          
           
           
           
            
            
            
              
         