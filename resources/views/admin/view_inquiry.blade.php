@include('header')
 
 
                     
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('add_sales_enquiry')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd" style="padding:20px;">
                        <h2 style="text-align:center;">View  Enquiry  </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="c_name" value="{{$inquiry[0]->c_name}}" readonly/>
                                    <label class="nk-label">Client Name *</label>
                                </div>
                            </div>
                        </div>

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="email" class="form-control" name="c_email" value="{{$inquiry[0]->c_email}}" readonly/>
                                    <label class="nk-label">Client Email *</label>
                                </div>
                            </div>
                        </div>
                        
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="c_phone" value="{{$inquiry[0]->c_phone}}" readonly/>
                                    <label class="nk-label">Client Mob/Phone  *</label>
                                </div>
                            </div>
                        </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="csr_coment"  value="{{$inquiry[0]->csr_coment}}" readonly/>
                                    <label class="nk-label">CSR Comment  *</label>
                                </div>
                            </div>
                        </div>
                        
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" name="website" data-live-search="true">
                                    @foreach($website as $web)
                                   
                                    
                                        <option value="{{$web->website}}"  <?php if($web->website == $inquiry[0]->website){echo "selected";} ?> >
                                        {{$web->website}}
                                         
                                         </option>
                                    
                                    
                               
                                
                                   @endforeach
                                    </select>
                            </div>
                        </div>
                        </div>
              <?php  $values = json_decode($inquiry[0]->product); 
                                 if(!empty($values)){ $printing = json_decode($inquiry[0]->printing); $fsize1 = json_decode($inquiry[0]->f_s_1);$fsize2 = json_decode($inquiry[0]->f_s_2);$fsize3 = json_decode($inquiry[0]->f_s_3);$opensize1 = json_decode($inquiry[0]->open_size_1);$opensize2 = json_decode($inquiry[0]->open_size_2); $stock = json_decode($inquiry[0]->stock); $quantity = json_decode($inquiry[0]->qty);$price = json_decode($inquiry[0]->price); $measurement = json_decode($inquiry[0]->measurement);$temp =0;$sr=0; foreach ($values as $val) {$sr++; ?>
                 <h1 class="text-center">Product Form {{$sr}}</h1>
                 <div class="row" style="margin-bottom:30px;" >
                         
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                
                                    <div class="field_wrapper_print_p">
                                       
                                        
                                        <div class="nk-int-st">
                                    <input type="text" class="form-control" name="product[]" value="<?php echo $val;?>"  readonly/>
                                    <label class="nk-label">Product *</label>
                                   
                                           
                                </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        
                                 
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="printing[]" value="<?php echo $printing[$temp];?>" readonly/>
                                    <label class="nk-label">Printing  *</label>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                             <div class="row">
                               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="f_s_1[]" value="<?php echo $fsize1[$temp];?>" readonly/>
                                    <label class="nk-label">Finish Size 1 *</label>
                                </div>
                            </div>
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="f_s_2[]" value="<?php echo $fsize2[$temp];?>" readonly/>
                                    <label class="nk-label">Finish Size 2 </label>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="f_s_3[]" value="<?php echo $fsize3[$temp];?>" readonly/>
                                    <label class="nk-label">Finish Size 3</label>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                           
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" name="measurement[]" data-live-search="true" readonly>
                                  
                                    <option <?php if($measurement[$temp]=='inch'){echo "selected";} ?> value="inch" readonly>inch</option>
                                    <option <?php if($measurement[$temp]=='cmm'){echo "selected";} ?> value="mm" readonly>cmm</option>
                                    <option <?php if($measurement[$temp]=='mm'){echo "selected";} ?> value="mm" readonly>mm</option>
                                   
                                    </select>
                            </div>
                        </div>
                        </div>
                          
                        </div>
                        
                    </div>
                    
                    
                    <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="row">
                           <div class="col-lg-6 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="open_size_1[]" value="<?php echo $opensize1[$temp];?>" readonly/>
                                    <label class="nk-label">Open Size 1  *</label>
                                </div>
                            </div>
                        </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="open_size_2[]" value="<?php echo $opensize2[$temp];?>" readonly/>
                                    <label class="nk-label">Open Size  *</label>
                                </div>
                            </div>
                        </div>
                              
                          </div>
                        </div>
                        
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="stock[]" value="<?php echo $stock[$temp];?>" readonly/>
                                    <label class="nk-label">Stock *</label>
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
                                    <input type="text" class="form-control" name="qty[]" value="<?php echo $quantity[$temp];?>" readonly/>
                                    <label class="nk-label">Quantity *</label>
                                </div>
                            </div>
                        </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="price[]" value="<?php echo $price[$temp];?>" readonly/>
                                    <label class="nk-label">Price Offered *</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                        
                               <?php $temp++;} }?>
                  
                  
                </div>
            </div>
        </div>

 
        
        
        

            
        </div>
    </div>

</form>
   @include('footer')
</div>
