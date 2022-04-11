@include('header')
 
 <style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
</style>
                      @if(Session::has('NewPageSuccess'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('NewPageSuccess') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('FindOldPage'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('FindOldPage') }}</div>
                    </center>
                    
                    @endif
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('save_user_data')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Add Users </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="user_name"  required/>
                                    <label class="nk-label">Name *</label>
                                </div>
                            </div>
                        </div>

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="email" class="form-control" name="user_email" required/>
                                    <label class="nk-label">Email *</label>
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="password" class="form-control" name="user_password"  required/>
                                    <label class="nk-label">Password *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Users Department</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="department" data-live-search="true" id="colorselector">
                                    <option value="production">Production Department</option>
                                    <option value="sale">Sales Department</option>
                                    <option value="shipping">Shipping Department</option>
                                      <option value="est">Estimation Department</option>
                                </select>
                            </div>
                        </div>
        
        
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                              
                            </div>
                           
                                 
                                                   
                 <div class="sales box colors" id="sale">
                            <select class="selectpicker" name="desgniation" data-live-search="true">
                            <option>Choose Option</option>
                            <option value="sm">Sales Manager</option>
                            <option value="tl">Team Leader</option>
                            <option value="csr">CSR</option>
                        </select>
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
<!--<div class="button dropdown"> -->
<!--  <select id="colorselector">-->
<!--     <option value="red">Red</option>-->
<!--     <option value="yellow">Yellow</option>-->
<!--     <option value="y">Blue</option>-->
<!--  </select>-->
<!--</div>-->

<!--<div class="output">-->
<!--  <div id="y" class="colors y"> “If I don't have red, I use blue” Pablo Picasso</div>-->
<!--</div>-->
  @include('footer')
<script>
    $(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});
</script>



 
</div>
