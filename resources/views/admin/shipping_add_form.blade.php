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
<form id="basic-form" method="post" action="{{url('save_shipping_data')}}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Add Shipping Form </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="job_number"  required/>
                                    <label class="nk-label">Job Number *</label>
                                </div>
                            </div>
                        </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="item"  required/>
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
                        <input type="text" class="form-control quantity" name="quantity[]" value="0"   placeholder="0" />
                        <label class="nk-label">job Quantity *</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp"></div>
                    <div class="nk-int-st two wide field">
                        <input type="text" class="form-control rate_unit" name="rateUnit[]" value="0" onkeyup="rateUnit(this)" placeholder="0" />
                        <label class="nk-label">Delivered Quantity *</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                    <div class="form-ic-cmp"></div>
                    <div class="nk-int-st two wide field">
                        <input type="text" class="form-control sumUnit" name="subt[]" readonly  />
                        <label class="nk-label">Balance Quantity *</label>
                         <!--<a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="ui primary right floated button addMore" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                       <div class="job_balance_quantity field_wrapper111">
                           
                       </div>
                    <div class="row" style="margin-bottom:30px;margin-top:30px;" id="tracking_id">
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="weight" required/>
                                    <label class="nk-label">Weight *</label>
                                </div>
                            </div>
                        </div>
                        
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                 <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="cutton"  required/>
                                    <label class="nk-label">Numbers of Cartoon </label>
                                </div>
                            </div>
                            
                          
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="rate"  required/>
                                    <label class="nk-label">Rate *</label>
                                </div>
                            </div>
                            </div>
                    </div>
                    
                    <div class="row field_wrapper1111" style="margin-bottom:30px;margin-top:30px;"> <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp"> </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="tracking_id[]" required/>
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
                                    <input type="text" class="form-control" name="address"  required/>
                                    <label class="nk-label">ClientName/Address *</label>
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
                                    <input type="number" class="form-control" name="amount[]"  required/>
                                    <label class="nk-label">Estimated Amount *</label>
                                    
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="number" class="form-control" name="invoice_amount[]"  required/>
                                    <label class="nk-label">Invoice  Amount </label>
                                </div>
                            </div>
                        </div>
                     
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="tax[]" required/>
                                    <label class="nk-label">Sales Tax *</label>
                                </div>
                            </div>
                            
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="miscellaneous[]"  required/>
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
                                    <option value="dollars">US Dollars</option>
                                    <option value="pkr">PKR</option>
                                     
                                    </select>
                            </div>
                    
                           
                        </div>
                        
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Shipping Process</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="process" data-live-search="true">
                                    <option value="fedex">FedEx</option>
                                    <option value="dhl">DHL</option>
                                    <option value="tcs">TCS</option>
                                    <option value="leopards">Leopards</option>
                                    </select>
                            </div>
                        </div>
                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Zone</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="zone" data-live-search="true">
                                    <option value="usa">USA</option>
                                    <option value="uk">UK</option>
                                    <option value="aus">AUS</option>
                                    <option value="pk">PK</option>
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
                                        <textarea class="form-control" name="remarks" rows="5" placeholder="Kindly add Remarks :"></textarea>
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
        sumUnit.val(quantity-rate_unit);
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
