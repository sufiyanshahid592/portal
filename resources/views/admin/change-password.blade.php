@include('header')
  
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
                    @if(Session::has('password_update'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('password_update') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('password_error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('password_error') }}</div>
                    </center>
                    
                    @endif
                    
             <form action="{{url('update-password')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="nk-form">
               
                   <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required>
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="New Password" name="newpassword" required>
                    </div>
                </div>
                
             
                                
                      <div class="nk-navigation nk-lg-ic">       
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Update</button>
                                    </div>
                                </div>
                                
                      </div>
            </div>

           
                </form>
               
          
        </div>

        <!-- Register -->
        

        <!-- Forgot Password -->
        
    </div>
@include('footer')