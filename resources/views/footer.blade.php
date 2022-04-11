 
<script>
    (function () {
    window.supportDrag = (function () {
       let div = document.createElement("div");
       return (
          ("draggable" in div || ("ondragstart" in div && "ondrop" in div)) &&
          "FormData" in window &&
          "FileReader" in window
       );
    })();
 
    let input = document.getElementById("js-file-input");
 
    if (!supportDrag) {
       document.querySelectorAll(".has-drag")[0].classList.remove("has-drag");
    }
 
    input.addEventListener(
       "change",
       function (e) {
          document.getElementById("js-file-name").innerHTML = this.files[0].name;
          document
             .querySelectorAll(".file-input")[0]
             .classList.remove("file-input--active");
       },
       false
    );
 
    if (supportDrag) {
       input.addEventListener("dragenter", function (e) {
          document
             .querySelectorAll(".file-input")[0]
             .classList.add("file-input--active");
       });
 
       input.addEventListener("dragleave", function (e) {
          document
             .querySelectorAll(".file-input")[0]
             .classList.remove("file-input--active");
       });
    }
 })();
</script>
    <script>
                function calculator() {
                    var dp_amount = document.getElementById("dp_amount").value;
                    if (dp_amount == "") {
                        var dp_amount = (document.getElementById("dp_amount").value = 0);
                    }
                    var scanning_amount = document.getElementById("scanning_amount").value;
                    if (scanning_amount == "") {
                        var scanning_amount = (document.getElementById("scanning_amount").value = 0);
                    }
                    var pm_amount = document.getElementById("pm_amount").value;
                    if (pm_amount == "") {
                        var pm_amount = (document.getElementById("pm_amount").value = 0);
                    }
                    var stock_gsm_amount = document.getElementById("stock_gsm_amount").value;
                    if (stock_gsm_amount == "") {
                        var stock_gsm_amount = (document.getElementById("stock_gsm_amount").value = 0);
                    }
                    var printing_amount = document.getElementById("printing_amount").value;
                    if (printing_amount == "") {
                        var printing_amount = (document.getElementById("printing_amount").value = 0);
                    }
                    var lms_amount = document.getElementById("lms_amount").value;
                    if (lms_amount == "") {
                        var lms_amount = (document.getElementById("lms_amount").value = 0);
                    }
                    var spotuv_amount = document.getElementById("spotuv_amount").value;
                    if (spotuv_amount == "") {
                        var spotuv_amount = (document.getElementById("spotuv_amount").value = 0);
                    }
                    var bm_amount = document.getElementById("bm_amount").value;
                    if (bm_amount == "") {
                        var bm_amount = (document.getElementById("bm_amount").value = 0);
                    }
                    var embossing_amount = document.getElementById("embossing_amount").value;
                    if (embossing_amount == "") {
                        var embossing_amount = (document.getElementById("embossing_amount").value = 0);
                    }
                    var folling_amount = document.getElementById("folling_amount").value;
                    if (folling_amount == "") {
                        var folling_amount = (document.getElementById("folling_amount").value = 0);
                    }
                    var diem_amount = document.getElementById("diem_amount").value;
                    if (diem_amount == "") {
                        var diem_amount = (document.getElementById("diem_amount").value = 0);
                    }
                    var diec_amount = document.getElementById("diec_amount").value;
                    if (diec_amount == "") {
                        var diec_amount = (document.getElementById("diec_amount").value = 0);
                    }
                    var pasting_amount = document.getElementById("pasting_amount").value;
                    if (pasting_amount == "") {
                        var pasting_amount = (document.getElementById("pasting_amount").value = 0);
                    }
                    var double_pasting_amount = document.getElementById("double_pasting_amount").value;
                    if (double_pasting_amount == "") {
                        var double_pasting_amount = (document.getElementById("double_pasting_amount").value = 0);
                    }
                    
                    var mc_amount = document.getElementById("mc_amount").value;
                    if (mc_amount == "") {
                        var mc_amount = (document.getElementById("mc_amount").value = 0);
                    }

                    var result =
                        parseFloat(dp_amount) +
                        parseFloat(scanning_amount) +
                        parseFloat(pm_amount) +
                        parseFloat(stock_gsm_amount) +
                        parseFloat(printing_amount) +
                        parseFloat(lms_amount) +
                        parseFloat(spotuv_amount) +
                        parseFloat(bm_amount) +
                        parseFloat(embossing_amount) +
                        parseFloat(folling_amount) +
                        parseFloat(diem_amount) +
                        parseFloat(diec_amount) +
                        parseFloat(pasting_amount) +
                        parseFloat(double_pasting_amount)+
                        parseFloat(mc_amount);

                    if (!isNaN(result)) {
                        document.getElementById("total_amount").value = result;
                    }
                }
            </script>

<div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2021
. All rights reserved. Template by <a href="#">TheCustomBoxes</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{URL::asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
		         <!-- Data Table JS
		============================================ -->
    <script src="{{URL::asset('js/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('js/data-table/data-table-act.js')}}"></script>
    <script src="{{URL::asset('js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{URL::asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{URL::asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{URL::asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{URL::asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{URL::asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{URL::asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{URL::asset('js/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{URL::asset('js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{URL::asset('js/knob/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('js/knob/jquery.appear.js')}}"></script>
    <script src="{{URL::asset('js/knob/knob-active.js')}}"></script>

    <script src="{{URL::asset('js/jasny-bootstrap.min.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{URL::asset('js/wave/waves.min.js')}}"></script>
    <script src="{{URL::asset('js/wave/wave-active.js')}}"></script>
    <script src="{{URL::asset('js/chosen/chosen.jquery.js')}}"></script>


 <script src="{{URL::asset('mobile/build/js/intlTelInput.js')}}"></script>
 
  
    <!-- icheck JS
		============================================ -->
    <script src="{{URL::asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{URL::asset('js/icheck/icheck-active.js')}}"></script>


    <script src="{{URL::asset('js/rangle-slider/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{URL::asset('js/rangle-slider/jquery-ui-touch-punch.min.js')}}"></script>
    <script src="{{URL::asset('js/rangle-slider/rangle-active.js')}}"></script>


    <script src="{{URL::asset('js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('js/datapicker/datepicker-active.js')}}"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{URL::asset('js/bootstrap-select/bootstrap-select.js')}}"></script>


    <script src="{{URL::asset('js/color-picker/farbtastic.min.js')}}"></script>
    <script src="{{URL::asset('js/color-picker/color-picker.js')}}"></script>
    

    <script src="{{URL::asset('js/notification/bootstrap-growl.min.js')}}"></script>
    <script src="{{URL::asset('js/notification/notification-active.js')}}"></script>

    

    <script src="{{URL::asset('js/summernote/summernote-updated.min.js')}}"></script>
    <script src="{{URL::asset('js/summernote/summernote-active.js')}}"></script>

   <!-- <script src="{{URL::asset('mobile/dropzone.js')}}"></script>-->

             <!-- Sweet Alert Script
		============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.1/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.js"></script>
    
       <script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_tracking_id'); //Add button selector
    var wrapper = $('.ttttt'); //Input field wrapper
    var fieldHTML = '<tr class="emptyt"  id="divt"><td> <div class="row""><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"> </div> <div class="nk-int-st"><input type="text" class="form-control" name="tracking_id[]" required/><label class="nk-label">Tracking Id *</label>  </div></div> <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="tracking_id_remove_button" title="Add field"><img src="../images/remove-icon.png"/></a>  </td></div> </div></tr>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.tracking_id_remove_button', function(e){
        e.preventDefault();
        $("#divt").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
              <script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_estimate'); //Add button selector
    var wrapper = $('.eseseses'); //Input field wrapper
    var fieldHTML = '<tr class="emptyestimate"  id="dives"><td> <div class="row""> <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control" name="amount[]"  required/> <label class="nk-label">Estimated Amount *</label></div></div> </div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control" name="invoice_amount[]"  required/> <label class="nk-label">Invoice  Amount </label></div> </div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="tax[]" required/> <label class="nk-label">Sales Tax *</label></div> </div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"> <input type="text" class="form-control" name="miscellaneous[]"  required/><label class="nk-label">Miscellaneous *</label><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="estimate_remove_button" title="Add field"><img src="../images/remove-icon.png"/></a></div></div></div>   </td></div> </div></tr>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.estimate_remove_button', function(e){
        e.preventDefault();
        $("#dives").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
    <script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper1'); //Input field wrapper
    var fieldHTML = '<div class="row" id="div1" style="margin:10px 0px 30px 0px;float:none; "> <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <div class="form-group ic-cmp-int float-lb form-elet-mg"> <div class="form-ic-cmp"> </div> <div class="field_wrapper"><div class="nk-int-st"> <input type="text" class="form-control" name="qty[]" required />  <label class="nk-label">Quantity *</label> </div> </div> </div> </div>  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <div class="form-group ic-cmp-int float-lb form-elet-mg">  <div class="form-ic-cmp"> </div> <div class="field_wrapper_print"> <div class="nk-int-st"> <input type="text" class="form-control" name="printing[]" required /> <label class="nk-label">Printing *</label>  </div> </div>  </div>  </div>  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">  <div class="form-group ic-cmp-int float-lb form-elet-mg">  <div class="form-ic-cmp"> </div> <div class="nk-int-st"> <input type="text" class="form-control" name="sheet_size[]" required /> <label class="nk-label">Sheet Size</label> <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button" title="Add field"><img src="../images/remove-icon.png"/></a>  </div> </div> </div> </div>  '; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
         
      $("#div1").remove();
        x--; //Decrement field counter
    });
});
</script>

  
  

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_stock'); //Add button selector
    var wrapper = $('.field_wrapper_stock'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_stock">  <div class="nk-int-st"> <input type="text" class="form-control" name="stock_gsm_qty_p_size[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_stock" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_stock', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_die'); //Add button selector
    var wrapper = $('.field_wrapper_die'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_die">  <div class="nk-int-st"> <input type="text" class="form-control" name="diem_qty_p_size[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_die" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_die', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_bm'); //Add button selector
    var wrapper = $('.field_wrapper_bm'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_bm">  <div class="nk-int-st"> <input type="text" class="form-control" name="bm_qty_p_size[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_bm" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_bm', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_print'); //Add button selector
    var wrapper = $('.field_wrapper_print'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_print">  <div class="nk-int-st"> <input type="text" class="form-control" name="printing[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_print" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_print', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_embossing'); //Add button selector
    var wrapper = $('.field_wrapper_embossing'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_embossing">  <div class="nk-int-st"> <input type="text" class="form-control" name="embossing_qty_p_size[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_embossing" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_embossing', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_mc'); //Add button selector
    var wrapper = $('.field_wrapper_mc'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_embossing">  <div class="nk-int-st"> <input type="text" class="form-control" name="mc_qty_p_size[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_mc" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_mc', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_diem_qty'); //Add button selector
    var wrapper = $('.field_wrapper_diem_qty'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_diem_qty">  <div class="nk-int-st"> <input type="text" class="form-control" name="diem_qty[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_diem_qty" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_diem_qty', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>




<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_mc_qty'); //Add button selector
    var wrapper = $('.field_wrapper_mc_qty'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_mc_qty">  <div class="nk-int-st"> <input type="text" class="form-control" name="mc_qty[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_mc_qty" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_mc_qty', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>





<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_qty'); //Add button selector
    var wrapper = $('.field_wrapper_qty'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_qty">  <div class="nk-int-st"> <input type="text" class="form-control" name="stock_gsm_qty[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_qty" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_qty', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_unit'); //Add button selector
    var wrapper = $('.ssss'); //Input field wrapper
    var fieldHTML = '<tr class="empty"  id="div2"><td></td><td></td><td><td><td></td><td><td></td><td></td><td></td><td><td></td><td></td><td><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp">  </div>  <div class="field_wrapper_qty"><div class="nk-int-st"> <input type="text" class="form-control" name="stock_gsm_qty[]" /> <label class="nk-label">Stock/gsm Quantity</label></div> </div>  </div> </td>  <td> <div class="form-group ic-cmp-int float-lb floating-lb">  <div class="form-ic-cmp">  </div> <div class="field_wrapper_stock"><div class="nk-int-st">  <input type="text" class="form-control" placeholder="" step="any" value="" name="stock_gsm_qty_p_size[]" /> <label class="nk-label">Stock Size</label>   </div>  </div>  </div>  </td>    <td> <div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"> </div>  <div class="field_wrapper_unit">  <div class="nk-int-st">  <input type="text" class="form-control" name="stock_unit[]" /><label class="nk-label">Stock P.uint</label> <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="stock_remove" title="Add field"><img src="../images/remove-icon.png"/></a>  </div>   </div>  </div>  </td></tr>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
         $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.stock_remove', function(e){
        e.preventDefault();
         $("#div2").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_bm_qty'); //Add button selector
    var wrapper = $('.bm_qty'); //Input field wrapper
    var fieldHTML = ' <div class="bm_qty">  <div class="nk-int-st"> <input type="text" class="form-control" name="bm_qty[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_bm_qty" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_bm_qty', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<script type="text/javascript">

</script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_emb_qty'); //Add button selector
    var wrapper = $('.field_wrapper_embossing_qty'); //Input field wrapper
    var fieldHTML = ' <div class="field_wrapper_embossing_qty">  <div class="nk-int-st"> <input type="text" class="form-control" name="embossing_qty[]"  />   <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_emb_die" title="Add field"><img src="../images/remove-icon.png"/></a></div> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button_emb_die', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>



    <!--  Chat JS
		============================================ -->
    <script src="{{URL::asset('js/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
    
    
		============================================ -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.js"></script>
      
      
       <script type="text/javascript">
     $(document).ready(function () {

      $('.deleteButton').click(function(){
     
     $product_id=$(this).attr('data-uid');
     console.log($product_id);
    $src = "{{url('destroy-production/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete this Form ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            confirmButtonColor: '#A10C1A'
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });

      });

          $('.editdata').click(function(){
          
          $id=$(this).attr('data-uid');
          $src = "{{url('editcategory/')}}"+'/'+$id;
           console.log($id);
           swal.fire({

title:"Are you Sure you want to Edit this Category",
type:"warning",
showCancelButton:true,
confirmButtonText:'next',

           }).then((ok)=>{
            if(ok.value){

                window.location=$src;
            }
             else
             {
                console.log("error");
             }

          });
    });  
  });


 </script>


    <script src="{{URL::asset('js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['TheCustomBoxes', 'PrintingCircle', 'Pakboxes', 'MyBoxPackaging', 'CustomPrintedBoxes', 'GoCustomBoxes','KayPackaging'],
        datasets: [{
            label: 'TCB PORTAL',
            data: [100, 80, 60, 40, 70, 65,88],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                 'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                  'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
<script type="text/javascript" src="{{URL::asset('js/scripts.js?v=')}}<?php echo time(); ?>"></script>
	<!-- tawk chat JS
		============================================ -->
 	<!--   <script src="{{URL::asset('js/tawk-chat.js')}}"></script> -->
</body>

</html>