@include('header')
 
 
                      @if(Session::has('inquiry_update'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('inquiry_update') }}</div>
                    </center>
                    
                    @endif
                     
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update_sales_enquiry')}}" enctype="multipart/form-data"
>
    <input type="hidden" name="id" value="{{$inquiry[0]->id}}">
    
     <input type="hidden" value="<?php echo Session::get('user_id_login'); ?>" name="username">
      <input type="hidden" value="<?php echo Session::get('user_name_login'); ?>" name="sudoname">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd" style="padding:20px;">
                        <h2 style="text-align:center;">Update Enquiry  </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="c_name" value="{{$inquiry[0]->c_name}}"  />
                                    <label class="nk-label">Client Name </label>
                                </div>
                            </div>
                        </div>

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="email" class="form-control" name="c_email" value="{{$inquiry[0]->c_email}}" required/>
                                    <label class="nk-label">Client Email </label>
                                </div>
                            </div>
                        </div>
                        
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="c_phone" value="{{$inquiry[0]->c_phone}}" />
                                    <label class="nk-label">Client Mob/Phone  </label>
                                </div>
                            </div>
                        </div>
                        
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="csr_coment" value="{{$inquiry[0]->csr_coment}}" />
                                    <label class="nk-label">CSR Comment  </label>
                                </div>
                            </div>
                        </div> -->
                        
                           <div class="col-lg-6">
                           
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" name="website" data-live-search="true">
                                    @foreach($website as $web)
                                    <option value="{{$web->web_id}}"  <?php if($web->web_id == $inquiry[0]->website){echo "selected";} ?> >
                                        {{$web->website}}
                                         
                                         </option>
                                   @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                                        <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" name="source_of_customer" data-live-search="true">
                                    <option <?php if($inquiry[0]->source_of_customer=="Chat"){echo "selected";} ?> value="Chat">Chat</option>
                                    <option <?php if($inquiry[0]->source_of_customer=="Call"){echo "selected";} ?> value="Call">Call</option>
                                    <option <?php if($inquiry[0]->source_of_customer=="Email"){echo "selected";} ?> value="Email">Email</option>
                                    <option <?php if($inquiry[0]->source_of_customer=="Open Quote"){echo "selected";} ?> value="Open Quote">Open Quote</option>
                                   
                                    
                                    </select>
                            </div>
                              </div> 
                        
                        
                        </div>
                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_print_p"  product-count="1"  title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                         
                            <div class="product-parent-container">
                            <?php  $values = json_decode($inquiry[0]->product); 
                                 if(!empty($values)){ $printing = json_decode($inquiry[0]->printing); $fsize1 = json_decode($inquiry[0]->f_s_1);$fsize2 = json_decode($inquiry[0]->f_s_2);$fsize3 = json_decode($inquiry[0]->f_s_3);$opensize1 = json_decode($inquiry[0]->open_size_1);$opensize2 = json_decode($inquiry[0]->open_size_2); $stock = json_decode($inquiry[0]->stock); $quantity = json_decode($inquiry[0]->qty);$price = json_decode($inquiry[0]->price); $measurement = json_decode($inquiry[0]->measurement); $country = json_decode($inquiry[0]->country); $product_numbers = json_decode($inquiry[0]->product_numbers); $product_coment = json_decode($inquiry[0]->product_coment); $customer_relation = $inquiry[0]->customer_relation; $addons = json_decode($inquiry[0]->addons); $usa_upping = json_decode($inquiry[0]->usa_upping); $temp =0;$sr=0; foreach ($values as $val) { $sr++; ?>
                            <div class="product-row product-<?php echo $sr; ?>">
                 <h1 class="text-center product-row-title">
            <a href="javascript:void(0);" style="" class="add_button_for_dublicate"  product-count="{{$sr}}"  title="Dublicate"><img src="{{url('images/add-icon.png')}}"/></a>
             Product {{$sr}}</h1>

                       
                 <div class="row" style="margin-bottom:30px;" >
                         
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                
                                    <div class="field_wrapper_print_p">
                                       
                                        
                                        <div class="nk-int-st">
                                    <input type="text" class="form-control product_name_class" name="product[]" value="<?php echo $val;?>" product_name="<?php echo $val;?>" required />
                                    <label class="nk-label">Product </label>
                                    <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" data-id="<?php echo $sr; ?>" class="sale_remove" title="Add field"><img src="../images/remove-icon.png"/></a>
                                                   </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        
                                 
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control product_printing_class" product_printing="<?php echo $printing[$temp];?>" name="printing[]"  value="<?php echo $printing[$temp];?>" required/>
                                    <label class="nk-label">Printing  </label>
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
                                    <input type="text" class="form-control length_class"  name="f_s_1[]" value="<?php echo $fsize1[$temp];?>"/>
                                    <label class="nk-label">Length</label>
                                </div>
                            </div>
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control width_class" name="f_s_2[]" value="<?php echo $fsize2[$temp];?>"/>
                                    <label class="nk-label">Width</label>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control depth_class" name="f_s_3[]" value="<?php echo $fsize3[$temp];?>"/>
                                    <label class="nk-label">Depth</label>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" id="measurement" name="measurement[]" data-live-search="true">
                                  
                                    <option <?php if($measurement[$temp]=='inch'){echo "selected";} ?> value="inch">inch</option>
                                    <option <?php if($measurement[$temp]=='cmm'){echo "selected";} ?> value="cmm">cmm</option>
                                    <option <?php if($measurement[$temp]=='mm'){echo "selected";} ?> value="mm">mm</option>
                                   
                                    </select>
                            </div>
                        </div>
                        </div>
                          
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 3px;">
                                <select class="selectpicker" name="country[]" data-live-search="true">
                                    <option <?php if($country[$temp]=='USA'){echo "selected";} ?> value="USA">USA</option>
                                    <option <?php if($country[$temp]=='AU'){echo "selected";} ?> value="AU">AU</option>
                                    <option <?php if($country[$temp]=='UK'){echo "selected";} ?> value="UK">UK</option>
                                    <option <?php if($country[$temp]=='CA'){echo "selected";} ?> value="CA">CA</option>
                                    <option <?php if($country[$temp]=='others'){echo "selected";} ?> value="others">others</option>
                                </select>
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
                                    <input type="text" class="form-control open_size_1_class" name="open_size_1[]" value="<?php echo $opensize1[$temp];?>" required/>
                                    <label class="nk-label">Open Size 1  </label>
                                </div>
                            </div>
                        </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control open_size_2_class" name="open_size_2[]" value="<?php echo $opensize2[$temp];?>"/>
                                    <label class="nk-label">Open Size </label>
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
                                    <input type="text" class="form-control stock_class" name="stock[]" value="<?php echo $stock[$temp];?>" required/>
                                    <label class="nk-label">Stock </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row sales-inquiry-qty-product-<?php echo $product_numbers[$sr-1]; ?>">
                    <?php $product_num = $product_numbers[$sr-1]; for($i = 1; $i <=count((array)$price->$product_num); $i++){ /*for($i = 0; $i <= count((array)$quantity); $i++){}*/ ?>
                        <div class="col-lg-12 sales-inquiry-qty-row sales-inquiry-qty-{{$i}}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group ic-cmp-int float-lb floating-lb ">
                                        <div class="form-ic-cmp">
                                          
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control qty_class qty_class_{{$i}}" name="qty[{{$product_num}}][{{$i}}]" value="<?php foreach($quantity->$product_num as $key=>$value){if($key==$i){echo $value;}} ?>" required/>
                                            <label class="nk-label">Quantity </label>
                                            <?php if($i==1){ ?>
                                            <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_sales_inquiry_qty" title="Add field" product-count="{{$sr}}"><img src="{{url('images/add-icon.png')}}"/></a>
                                            <input type="hidden" name="product_numbers[]" class="product_numbers_class" value="<?php echo $sr; ?>">
                                            <?php }else{ ?>
                                            <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_sales_inquiry_qty" title="Add field" row-id="{{$i}}" product-count="{{$sr}}"><img src="{{url('images/remove-icon.png')}}"/></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                        <div class="form-ic-cmp">
                                          
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control price_offered_class price_class_{{$i}}" name="price[{{$product_num}}][{{$i}}]" value="<?php foreach($price->$product_num as $key=>$value){if($key==$i){echo $value;}} ?>" <?php if(Session::get("desgniation")!="sm"){echo "";} ?> />
                                            <label class="nk-label">Price Offered </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    
                    <div class="row salesqtypro">
                        
                        <div class="col-lg-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                            <div class="nk-int-st">
                                <input type="text" class="form-control addons" name="addons[]" value="<?php echo $addons[$temp];?>" />
                                <label class="nk-label">Add ons  </label>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                            <div class="nk-int-st">
                                <input type="text" class="form-control usa_upping" name="usa_upping[]" value="<?php echo $usa_upping[$temp];?>" />
                                <label class="nk-label">USA Upping  </label>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                            <div class="nk-int-st">
                                <input type="text" class="form-control product_coment" name="product_coment[]" value="<?php echo $product_coment[$temp];?>" />
                                <label class="nk-label">CSR Comment  </label>
                            </div>
                            </div>
                        </div>
                    </div>
                        </div>
                               <?php $temp++;} }?>
                        </div>
                        <div class="col-lg-12">
                            <label class=""><div style="position: relative;"><input type="radio" class="i-checks" name="customer_relation" <?php if(Session::get('desgniation')){echo "disabled";} ?> style="position: absolute; opacity: 0;" <?php if($customer_relation=="0"){echo "checked";} ?> value="0"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins><i></i> Repeat Customer</div> </label>
                        </div>
                        <div class="col-lg-12">
                            <label class=""><div style="position: relative;"><input type="radio" class="i-checks" name="customer_relation" <?php if(Session::get('desgniation')){echo "disabled";} ?> style="position: absolute; opacity: 0;" <?php if($customer_relation=="1"){echo "checked";} ?> value="1"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins><i></i> New Customer</div> </label>
                        </div>
                                  <div class="salesssss"  >
                                
                               
                                  </div>
                            
                        
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Update</button>
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
   <!--for dublicate row-->
    <script type="text/javascript">
$(document).ready(function(){
    var addButton = $('.add_button_for_dublicate');
    var wrapper = $('.salesssss');
    $(addButton).click(function(){
    var product_count = $(this).attr("product-count");
    var target_product_content = $(".product-"+product_count).html();
    var maxField = 50;
    var product_name=$('.product-'+product_count+' .product_name_class').attr('product_name');
    var product_printing_class=$('.product-'+product_count+' .product_printing_class').attr('product_printing');
    var length_class=$('.product-'+product_count+' .length_class').val();
    var width_class=$('.product-'+product_count+' .width_class').val();
    var depth_class=$('.product-'+product_count+' .depth_class').val();
    var open_size_1_class=$('.product-'+product_count+' .open_size_1_class').val();
    var open_size_2_class=$('.product-'+product_count+' .open_size_2_class').val();
    var stock_class=$('.product-'+product_count+' .stock_class').val();
    var qty_class=$('.product-'+product_count+' .qty_class').val();
    var measurement = $('.product-'+product_count+' #measurement').html();
    var product_coment = $('.product-'+product_count+' .product_coment').val();
    var price_offered_class=$('.product-'+product_count+' .price_offered_class').val();
    var product_count_all = $(".product-row").length+1;
    var x = 1;
    var fieldHTML = '<div class="product-row product-'+product_count_all+'"  id="div2sale">'+target_product_content+'</div>';
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
         $(".product-parent-container").append(fieldHTML); //Add field html
         $(".product-"+product_count_all+" .product-row-title").html("Option "+product_count);
         $(".product-"+product_count_all+" .sale_remove").attr("data-id", product_count_all);
         $(".product-"+product_count_all+" .salesqtypro").removeClass("sales-inquiry-qty-product-"+product_count);
         $(".product-"+product_count_all+" .salesqtypro").addClass("sales-inquiry-qty-product-"+product_count_all);
         var qty_class_row_count = $(".product-"+product_count_all+" .qty_class").length;
         for (var i = 1; i <= qty_class_row_count; i++){
            $(".product-"+product_count_all+" .qty_class_"+i).attr("name", "qty["+product_count_all+"]["+i+"]");
            $(".product-"+product_count_all+" .price_class_"+i).attr("name", "price["+product_count_all+"]["+i+"]");
         }
         $(".product-"+product_count_all+" .add_button_sales_inquiry_qty").attr("product-count", product_count_all);
         $(".product-"+product_count_all+" .remove_button_sales_inquiry_qty").attr("product-count", product_count_all);
         $(".product-"+product_count_all+" .product_numbers_hidden_value").attr("value", product_count_all);
         $(".product-"+product_count_all+" .product_numbers_class").attr("value", product_count_all);
         // $(".product-"+product_count_all+" .product_name_class").val(product_name);

    // var fieldHTML = '<div class="product-row product-'+product_count_all+'"  id="div2sale">  <div class="row" style="margin-bottom:30px;" >  <h1 style="text-align:center;" class="product-row-title">Product '+product_count+' Dublicate</h1>  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <div class="form-group ic-cmp-int float-lb form-elet-mg"> <div class="form-ic-cmp"></div><div class="field_wrapper_print_p"><div class="nk-int-st"> <input type="text" class="form-control product-name-title-cl" name="product[]" value="'+product_name+'" required /> <label class="nk-label">Product </label> <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" data-id="'+product_count_all+'" class="sale_remove" title="Add field"><img src="../images/remove-icon.png"/></a> </div></div></div> </div> </div> <div class="row">              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="printing[]"  value="'+product_printing_class+'" required/><label class="nk-label">Printing  </label> </div> </div></div> <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><div class="row"> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st"><input type="text" class="form-control" name="f_s_1[]" value="'+length_class+'" required/> <label class="nk-label">Length</label></div></div></div> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div> <div class="nk-int-st"><input type="text" class="form-control" name="f_s_2[]" value="'+width_class+'"/><label class="nk-label">Width </label> </div> </div> </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st"> <input type="text" class="form-control" value="'+depth_class+'" name="f_s_3[]" /> <label class="nk-label">Depth</label> </div></div> </div> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="fm-cmp-mg" style="padding: 3px;"> <select class="selectpicker" style="width:150px !important" name="measurement[]" data-live-search="true">'+measurement+'</select></div></div></div></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div class="bootstrap-select fm-cmp-mg" style="padding: 3px;"><select class="selectpicker" name="country[]" data-live-search="true"><option value="USA">USA</option><option value="AU">AU</option> <option value="UK">UK</option><option value="CA">CA</option><option value="others">others</option></select></div> </div>  </div>         <div class="row">                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="row"><div class="col-lg-6 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control" name="open_size_1[]" value="'+open_size_1_class+'" required/> <label class="nk-label">Open Size 1  </label> </div> </div> </div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"> </div><div class="nk-int-st"> <input type="text" class="form-control" value="'+open_size_2_class+'" name="open_size_2[]" /> <label class="nk-label">Open Size  </label></div> </div></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="stock[]" value="'+stock_class+'"/><label class="nk-label">Stock </label></div> </div></div> </div>       <div class="row">                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 salesqtypro "><div class="form-group ic-cmp-int float-lb floating-lb sales-inquiry-qty-row"> <div class="form-ic-cmp"> </div><div class="nk-int-st"><input type="text" class="form-control qty_class" name="qty['+(parseFloat(product_count)+1)+'][1]" required/><label class="nk-label">Quantity *</label><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_sales_inquiry_qty" title="Add field" product-count="'+(parseFloat(product_count)+1)+'"><img src="../images/add-icon.png"/></a><input type="hidden" name="product_numbers[]" class="product_numbers_hidden_value" value="'+(parseFloat(product_count)+1)+'"></div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div> <div class="nk-int-st"> <input type="text" class="form-control" name="price[]" value="'+price_offered_class+'"/><label class="nk-label">Price Offered </label> </div> </div> </div><div class="col-lg-12"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="nk-int-st"><input type="text" class="form-control" name="product_coment[]" value="'+product_coment+'" /><label class="nk-label">CSR Comment  </label></div></div></div> </div> </div> '; //New input field html 
         
        // $('.selectpicker').selectpicker();
  
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.sale_remove', function(e){
        e.preventDefault();
        var data_id = $(this).attr("data-id");
         $(".product-"+data_id).remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
   <script type="text/javascript">
$(document).on("click",".add_button_print_p", function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_print_p'); //Add button selector
    var product_count = $(".product-row").length+1;
    
    var wrapper = $('.salesssss'); //Input field wrapper
    var fieldHTML = '<div class="product-row product-'+product_count+'"  id="div2sale">  <div class="row" style="margin-bottom:30px;" >  <h1 style="text-align:center;">Product '+product_count+'</h1>  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <div class="form-group ic-cmp-int float-lb form-elet-mg"> <div class="form-ic-cmp"></div><div class="field_wrapper_print_p"><div class="nk-int-st"> <input type="text" class="form-control" name="product[]" required /> <label class="nk-label">Product </label> <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" data-id="'+product_count+'" class="sale_remove" title="Add field"><img src="../images/remove-icon.png"/></a> </div></div></div> </div> </div> <div class="row">              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="printing[]" required/><label class="nk-label">Printing </label> </div> </div></div> <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><div class="row"> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st"><input type="text" class="form-control" name="f_s_1[]" required/> <label class="nk-label">Length</label></div></div></div> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div> <div class="nk-int-st"><input type="text" class="form-control" name="f_s_2[]" /><label class="nk-label">Width </label> </div> </div> </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st"> <input type="text" class="form-control" name="f_s_3[]" /> <label class="nk-label">Depth</label> </div></div> </div> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="fm-cmp-mg" style="padding: 3px;"> <select class="selectpicker" style="width:150px !important" name="measurement[]" data-live-search="true"><option value="inch">inch</option> <option value="cm">cm</option> <option value="mm">mm</option></select></div></div></div></div> <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><div class="bootstrap-select fm-cmp-mg" style="padding: 3px;"><select class="selectpicker" name="country[]" data-live-search="true"><option value="USA">USA</option><option value="AU">AU</option> <option value="UK">UK</option><option value="CA">CA</option><option value="others">others</option></select></div> </div> </div>         <div class="row">                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="row"><div class="col-lg-6 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control" name="open_size_1[]" required/> <label class="nk-label">Open Size 1 </label> </div> </div> </div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"> </div><div class="nk-int-st"> <input type="text" class="form-control" name="open_size_2[]" /> <label class="nk-label">Open Size  </label></div> </div></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="stock[]" required/><label class="nk-label">Stock </label></div> </div></div> </div>       <div class="row">                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sales-inquiry-qty-product-'+product_count+'">    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb sales-inquiry-qty-row"> <div class="form-ic-cmp"> </div><div class="nk-int-st"><input type="text" class="form-control" name="qty['+product_count+'][1]" required/><label class="nk-label">Quantity *</label><input type="hidden" name="product_numbers[]" value="'+product_count+'"><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_sales_inquiry_qty" title="Add field" product-count="'+product_count+'"><img src="../images/add-icon.png"/></a></div> </div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div> <div class="nk-int-st"> <input type="text" class="form-control" name="price['+product_count+'][1]" required/><label class="nk-label">Price Offered </label></div> </div> </div> </div> <div class="col-lg-12"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="nk-int-st"><input type="text" class="form-control addons" name="addons[]"  /><label class="nk-label">Add ons  </label></div></div></div><div class="col-lg-12"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="nk-int-st"><input type="text" class="form-control usa_upping" name="usa_upping[]"  /><label class="nk-label">USA Upping  </label></div></div></div><div class="col-lg-12"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="nk-int-st"><input type="text" class="form-control" name="product_coment[]"  /><label class="nk-label">CSR Comment  </label></div></div></div> </div> </div> '; //New input field html 
    var x = 1; //Initial field counter is 1
    //Once add button is clicked
    // $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
         $(".product-parent-container").append(fieldHTML); //Add field html
    $('.selectpicker').selectpicker();
         $(".add_button_print_p").attr("product-count", parseFloat(product_count)+1);
         console.log( $(".add_button_print_p").attr("product-count", parseFloat(product_count)+1));
        }
    // });
    
    //Once remove button is clicked
});
$(document).on('click', '.sale_remove', function(e){
    e.preventDefault();
     var data_id = $(this).attr("data-id");
     $(".product-"+data_id).remove();  //Remove field html
    x--; //Decrement field counter
});
</script>
</div>
