@include('header')
 
 
                      @if(Session::has('ipaddress'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('ipaddress') }}</div>
                    </center>
                    
                    @endif
                    
                 
<div class="form-element-area">
    <a href="{{url('show-all-ip')}}">
        
   
       <button class="btn btn-success">Check All Ip Address </button>
       
       </a>
<form id="basic-form" method="post" action="{{url('add_ip_address')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Add Ip Address </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="ipaddress"  required/>
                                    <label class="nk-label">Ip Address *</label>
                                </div>
                            </div>
                        </div>

                        

                        
                    </div>
                    
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Save</button>
                                    </div>
                                </div>
                      
                  </div>
                  
                </div>
            </div>
        </div>

        </div>
    </div>

</form>
   @include('footer')
</div>
