 @include('header')
 
  <style>
    table,
    td,
    th {
        background-color: white;
    }
</style>
  <style>
             
            :root {
                --overlay-color: rgba(0, 0, 0, 0.7);
                --dialog-color: #e9ecef;
                --dialog-border-radius: 20px;
                --icon-color: #000000;
                --dialog-padding: 20px;
                --drag-over-background: #e3e5e8;
            }

            .file-container {
                font-family: sans-serif;
                font-size: 13pt;
                color: #4d4d4d;
            }
            .file-container .file-overlay {
               
                background-color: #ffffff;
            }
            .file-container .file-wrapper {
                position: relative;
                display: block;
                width: 70vw;
                /* height: 80vh; */
                height: 300px;
                /* min-height: 400px; */
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                margin: auto;
                background-color: #f6f8fa;
                z-index: 20;
                border-radius: var(--dialog-border-radius);
                padding: var(--dialog-padding);
            }
            .file-container .file-wrapper .file-input {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: #000;
                z-index: 10;
                cursor: pointer;
                opacity: 0;
            }
            .file-container .file-wrapper .file-input--active + .file-content {
                background: var(--drag-over-background);
            }
            .file-container .file-wrapper .file-input--active + .file-content .file-icon {
                opacity: 0.5;
            }
            .file-container .file-wrapper .file-input--active + .file-content .file-icon i {
                animation-name: bounce;
                animation-duration: 0.6s;
                animation-iteration-count: infinite;
                animation-timing-function: ease;
            }
            .file-container .file-wrapper .file-input--active + .file-content .file-icon .icon-shadow {
                animation-name: shrink;
                animation-duration: 0.6s;
                animation-iteration-count: infinite;
            }
            .file-container .file-wrapper .file-content {
                position: relative;
                display: block;
                width: 100%;
                height: 100%;
                border: 4px dashed var(--icon-color);
                border-radius: var(--dialog-border-radius);
                transition: 0.2s;
            }
            .file-container .file-wrapper .file-content .file-infos {
                position: absolute;
                display: flex;
                width: 50%;
                height: 50%;
                min-width: 400px;
                /* min-height: 202px; */
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                margin: auto;
                flex-direction: column;
                justify-content: center;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon {
                position: relative;
                width: 100%;
                height: 100%;
                margin: 0;
                color: var(--icon-color);
                background-color: #ffffff;
                padding: var(--dialog-padding);
                transition: 0.2s;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon i {
                margin-bottom: 20px;
                width: 100%;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon .icon-shadow {
                position: relative;
                display: block;
                width: 95px;
                height: 7px;
                border-radius: 100%;
                background-color: var(--drag-over-background);
                top: -17px;
                margin-left: auto;
                margin-right: auto;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon > span {
                position: absolute;
                bottom: var(--dialog-padding);
                width: calc(100% - var(--dialog-padding) * 2);
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon > span span {
                display: none;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon > span .has-drag {
                display: inline;
            }
            .file-container .file-wrapper .file-content .file-infos .file-icon i,
            .file-container .file-wrapper .file-content .file-infos .file-icon span {
                display: block;
                text-align: center;
                text-transform: uppercase;
                font-weight: bold;
            }
            .file-container .file-wrapper .file-content .file-name {
                position: absolute;
                width: 100%;
                text-align: middle;
                left: 0;
                bottom: var(--dialog-padding);
                right: 0;
                font-weight: bold;
                font-size: 15pt;
                margin: auto;
                text-align: center;
            }

            @keyframes bounce {
                0% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-15px);
                }
                100% {
                    transform: translateY(0px);
                }
            }
            @keyframes shrink {
                0% {
                    width: 95px;
                }
                50% {
                    width: 75px;
                }
                100% {
                    width: 95px;
                }
            }
        </style>
                <style type="text/css">
  input.myText {
    opacity: 0.5 !important; /* Fade effect */
    cursor: not-allowed; /* Cursor change to disabled state*/
      pointer-events:none;
  }
</style>  
                      @if(Session::has('update_shipping_data'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('update_shipping_data') }}</div>
                    </center>
                    
                    @endif
                  
                  
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update_shipping_data')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<?php
      if (!empty($data[0]->images)) {?>
<?php foreach(json_decode($data[0]->images) as $imagegallery){ ?>
  <input type="hidden" name="oldgallery[]" value="<?php echo $imagegallery;?>">
<?php }} ?>
  <input type="hidden" name="id" value="{{$data[0]->id}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Update Shipping Form </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="job_number" value="{{$data[0]->job_number}}" />
                                    <label class="nk-label">Job Number *</label>
                                </div>
                            </div>
                        </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="date" value="{{$data[0]->date}}">
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="item" value="{{$data[0]->item}}"   />
                                    <label class="nk-label">Item *</label>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                       
                    </div>
                    
<div class="ui">
    <div class="three fields fieldGroup">
        <div class="row field_wrapper111" style="margin-bottom: 30px; margin-top: 30px;" id="p_scents">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp"></div>
                                
                    <div class="nk-int-st two wide field">
                        <?php $quantity = json_decode($data[0]->quantity); if(!empty($quantity)){  foreach ($quantity as $quantity) {?>
                        <input type="text"  class="form-control quantity myText" name="quantity[]" value="{{$quantity}}" onkeyup="quantity(this)" placeholder="0" />
                        <?php } } ?>
                        <label class="nk-label">job Quantity *</label>
                    </div>
                      
                </div>
                
            </div>
             
   
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                 
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp"></div>
                    <div class="nk-int-st two wide field">
                         <?php $d_quantity = json_decode($data[0]->d_quantity);  if(!empty($d_quantity)){  foreach ($d_quantity as $d_quantity) {?>
                        <input type="text" class="form-control rate_unit myText" name="rateUnit[]" value="{{$d_quantity}}" onkeyup="rateUnit(this)" placeholder="0" />
                        <?php } } ?>
                        <label class="nk-label">Delivered Quantity *</label>
                    </div>
                </div>
                
            </div>
               
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                 
                
                    <div class="form-ic-cmp"></div>
                    <div class="nk-int-st two wide field">
                         <?php  $subt = json_decode($data[0]->subt);   if(!empty($subt)){  foreach ($subt as $subt) {?>
                        <input type="text"  class="form-control myText" name="subt[]" value="{{$subt}}"  />
                        <?php } } ?>
                        <label class="nk-label">Balance Quantity *</label>
                         <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui primary right floated button addMore" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                    </div>
                    
                </div>
                 
            </div>
        </div>
     
            
        
    </div>
</div>
                    
                    <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="weight" value="{{$data[0]->weight}}"/>
                                    <label class="nk-label">Weight *</label>
                                </div>
                            </div>
                        </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="cutton"  value="{{$data[0]->cutton}}"/>
                                    <label class="nk-label">Numbers of Cuttons </label>
                                </div>
                            </div>
                            
                          
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="rate"  value="{{$data[0]->rate}}"/>
                                    <label class="nk-label">Rate *</label>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <?php
                                            $valuest = json_decode($data[0]->tracking_id); 
                                            if(!empty($valuest)){  foreach ($valuest as $valuest) {?>
                                    <input type="text" class="form-control" name="tracking_id[]" value="{{$valuest}}"/>
                                    <?php } }
                                               ?>
                                    <label class="nk-label">Tracking Id *</label>
                                    <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui primary right floated button add_tracking_id" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="address"  value="{{$data[0]->address}}"/>
                                    <label class="nk-label">Client Address *</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                        <tr>
                                            <td colspan="3" align="center" >
                                                  <table class="table table-striped my-sm-5 ttttt"  >
                                                
                                                <tbody class="emptyt">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                       <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                     <?php
                                            $valuesea = json_decode($data[0]->amount); 
                                            if(!empty($valuesea)){  foreach ($valuesea as $valuesea) {?>
                                    <input type="number" class="form-control" name="amount[]"  value="{{$valuesea}}"/>
                                    <?php } }
                                               ?>
                                    <label class="nk-label">Estimated Amount *</label>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <?php
                                            $valuesia = json_decode($data[0]->invoice_amount); 
                                            if(!empty($valuesia)){  foreach ($valuesia as $valuesia) {?>
                                    <input type="number" class="form-control" name="invoice_amount[]"  value="{{$valuesia}}"/>
                                       <?php } }
                                               ?>
                                    <label class="nk-label">Invoice  Amount </label>
                                </div>
                            </div>
                        </div>
                     
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                     <?php
                                            $valuesst = json_decode($data[0]->tax); 
                                            if(!empty($valuesst)){  foreach ($valuesst as $valuesst) {?>
                                    <input type="text" class="form-control" name="tax[]" value="{{$valuesst}}"/>
                                     <?php } }
                                               ?>
                                    <label class="nk-label">Sales Tax *</label>
                                </div>
                            </div>
                            
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                     <?php
                                            $valuesm = json_decode($data[0]->miscellaneous); 
                                            if(!empty($valuesm)){  foreach ($valuesm as $valuesm) {?>
                                    <input type="text" class="form-control" name="miscellaneous[]"  value="{{$valuesm}}"/>
                                     <?php } }
                                               ?>
                                    <label class="nk-label">Miscellaneous *</label>
                                    <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui primary right floated button add_estimate" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                </div>
                            </div>
                        </div>
                         <tr>
                                            <td colspan="3" align="center" >
                                                  <table class="table table-striped my-sm-5 eseseses"  >
                                                
                                                <tbody class="emptyestimate">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           
                             
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Currency</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="currency" data-live-search="true">
                                     <option <?php if($data[0]->currency=='pkr'){echo "selected";} ?> value="pkr" >Pakistan Rupees</option>
                                    <option <?php if($data[0]->currency=='dollars'){echo "selected";} ?> value="dollars" >USA Dollar</option>
                                   
                                     
                                    </select>
                            </div>
                    
                           
                        </div>
                        
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Shipping Process</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="process" data-live-search="true">
                                    <option <?php if($data[0]->process=='fedex'){echo "selected";} ?> value="fedex">FedEx</option>
                                    <option <?php if($data[0]->process=='dhl'){echo "selected";} ?> value="dhl">DHL</option>
                                    <option <?php if($data[0]->process=='tcs'){echo "selected";} ?>  value="tcs">TCS</option>
                                    <option <?php if($data[0]->process=='leopards'){echo "selected";} ?> value="leopards">Leopards</option>
                                    </select>
                            </div>
                        </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Zone</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="zone" data-live-search="true">
                                    <option  <?php if($data[0]->zone=='usa'){echo "selected";} ?> value="usa">USA</option>
                                    <option <?php if($data[0]->zone=='uk'){echo "selected";} ?> value="uk">UK</option>
                                    <option <?php if($data[0]->zone=='aus'){echo "selected";} ?> value="aus">AUS</option>
                                    <option  <?php if($data[0]->zone=='pk'){echo "selected";} ?> value="pk">PK</option>
                                    </select>
                            </div>
                        </div>
                           
                    </div>
                           <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Remarks</h2>
                            
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <textarea class="form-control" name="remarks"  placeholder="Kindly add Remarks :">{{$data[0]->remarks}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                     
                       
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="file-container">
                <div class="file-overlay"></div>
                <div class="file-wrapper">
                    <input class="file-input" name="images[]" id="js-file-input" type="file" multiple />
                    <div class="file-content">
                        <div class="file-infos">
                            <p class="file-icon">
                                <i class="fa fa-upload fa-7x"></i>
                        <span class="icon-shadow"></span>
                        <span>Upload Additional Document </span>
                            </p>
                        </div>
                        <p class="file-name" id="js-file-name">No file selected</p>
                    </div>
                </div>
                <div>
                  <?php 

        $images = json_decode($data[0]->images); 
        if(!empty($images)){  foreach ($images as $images) {?>
      <img style="height:50px; width:50px;border-radius: 50%;" src="{{url('images/'.$images)}}"/> 
 
     <a href="{{url('del_shipping_galery_image/'.$images.'/'.$data[0]->id)}}">
                        
                        <button type="button" class="btn btn-danger" >Delete</button>
                      </a>
   <?php } }
?> 
                </div>
            </div>
        </div>
        
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
<script>
$( ".myTextt" ).css( "pointer-event", "none" ).css( "cursor", "not-allowed" )   ;
</script>

           <script>
               function rateUnit(rateUnit){
                  
    var regex=/^[0-9]+$/;
    if(!rateUnit.value.match(regex)){
        rateUnit.value = rateUnit.value.replace(/[^0-9\.]/g,'');
        return false;
    }else{
        var fieldGroup  = $(rateUnit).parents(".fieldGroup");
        var rate_unit   = fieldGroup.find(".rate_unit").val();
        var quantity    = fieldGroup.find(".quantity").val();
        quantity = parseInt(quantity);
        var sumUnit     = fieldGroup.find(".sumUnit");
        sumUnit.val(rate_unit-quantity);

    }
}

function quantity(quantity){
   
    var regex=/^[0-9]+$/;
    if(!quantity.value.match(regex)){
        quantity.value = quantity.value.replace(/[^0-9\.]/g,'');
        return false;
    }else{
        var fieldGroup  = $(quantity).parents(".fieldGroup");
        var rate_unit   = fieldGroup.find(".rate_unit").val();
        var quantity    = fieldGroup.find(".quantity").val();
        quantity = parseInt(quantity);
        var sumUnit     = fieldGroup.find(".sumUnit");
        sumUnit.val(quantity-rate_unit);

    }
}

$(document).ready(function(){
   
    //group add limit
    var maxGroup = 20;
    
    //add more fields group
    $(".addMore").click(function(){
      //alert($('form').find('.ui.form').length);
        if($('form').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="ui"> <div class="three fields fieldGroup"><div class="row field_wrapper111" style="margin-bottom: 30px; margin-top: 30px;" id="p_scents"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st two wide field"> <input type="text" class="form-control rate_unit" name="quantity[]" value="0" onkeyup="quantity(this)" placeholder="0" /> <label class="nk-label">Job Quantity *</label> </div> </div> </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st two wide field"><input type="text" class="form-control quantity" name="rateUnit[]" value="0" onkeyup="rateUnit(this)" placeholder="0" /> <label class="nk-label">Delivered Quantity *</label> </div></div> </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div> <div class="nk-int-st two wide field"><input type="text" class="form-control sumUnit"  name="subt[]" readonly /><label class="nk-label">Balance Quantity *</label>  <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui primary right floated button addMore" title="Add field"><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui remove button minus icon" title="Add field"><img src="../images/remove-icon.png"/></a> </div> </div> </div></div></div></div>';
            $('form').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $('form').on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
           </script>

   <script>
       $(document).ready(function() {
    //this calculates values automatically 
    sum();
    $("#num1, #num2").on("keydown keyup", function() {
        sum();
    });
});

function sum() {
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;
		 
			var result1 = parseInt(num1) - parseInt(num2);
            if (!isNaN(result1)) {
              
				document.getElementById('subt').value = result1;
            }
        }
   </script>
</div>
