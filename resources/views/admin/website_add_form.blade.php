@include('header')
 
 
<!--      <form id="basic-form" method="post" action="{{url('upload_csv')}}" enctype="multipart/form-data"-->
<!-->-->
<!--  <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
<!--                  <div class="row">-->
<!--                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">-->
<!--                                   <div class="form-example-int">-->
<!--                                         <input type="file" name="file" required >-->
<!--                                    </div>-->
<!--                                </div>-->
                      
<!--                  </div>-->
<!--                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">-->
<!--                                   <div class="form-example-int">-->
<!--                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Save</button>-->
<!--                                    </div>-->
<!--                                </div>-->
                      
<!--                  </div>-->
                  
                  
                  
<!--                  </form>  -->
 
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
<form id="basic-form" method="post" action="{{url('save_website_data')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Add Website Information </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="website"  required/>
                                    <label class="nk-label">Website *</label>
                                </div>
                            </div>
                        </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="email" class="form-control" name="email"  required/>
                                    <label class="nk-label">Website Email *</label>
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                    
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="address"  required/>
                                    <label class="nk-label">Address *</label>
                                </div>
                            </div>
                        </div>

                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="number"  required/>
                                    <label class="nk-label">Phone Number *</label>
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                    <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="file" class="form-control" name="image"  required/>
                                    
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
