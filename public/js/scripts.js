$(document).ajaxStart(function(){
    $(".loading-view i").fadeIn();
});
$(document).ajaxComplete(function(){
    $(".loading-view i").fadeOut();
});
function calculate_all_amount(){
    var calculate_total_amount = 0;
    $(".row-amount").each(function(){
        var mis_amount = $(this).val();
        if(mis_amount!=""){
            calculate_total_amount += parseFloat(mis_amount);
        }
    });
    $(".calculate-total-amount").attr("value", calculate_total_amount.toFixed(2));
}


//Digintal print formaul


$(document).on("keyup",function(){
 
    var digintal_print_qty=$(".digintal_print_qty").val();
    var digitial_print_size=$(".digitial_print_size").val();
    var digitial_print_size_one=digitial_print_size.split('*');
    var digitial_print_size_two=digitial_print_size.split('*');
    var digitial_print_unit=$(".digitial_print_unit").val();
    $(".digitial_print_amount").attr("value", digintal_print_qty*digitial_print_size_one[0]*digitial_print_size_two[1]*digitial_print_unit)
    calculate_all_amount();
});

//Scanning Formula
$(document).on("keyup",function(){
    
    var scanning_qty_val=$(".scanning_qty_val").val();
    var scanning_size_val=$(".scanning_size_val").val();
    var scanning_size_val_one=scanning_size_val.split('*');
    var scanning_size_val_two=scanning_size_val.split('*');
    var scanning_unit_val=$(".scanning_unit_val").val();
    $(".scanning_amount_val").attr("value", scanning_qty_val*scanning_size_val_one[0]*scanning_size_val_two[1]*scanning_unit_val);
    calculate_all_amount();
});

//Outsource Printing Formula

$(document).on("keyup",function(){
    
   var printing_qty_val=$(".printing_qty_val").val();
   var printing_size_val=$(".printing_size_val").val();
   // var printing_size_val_one=printing_size_val.split('*');
   // var printing_size_val_two=printing_size_val.split('*');
   var printing_unit_val=$(".printing_unit_val").val();
   $(".printing_amount_val").attr("value", printing_qty_val*printing_size_val*printing_unit_val);
   calculate_all_amount();
});

//Lam Mat Formula

$(document).on("keyup",function(){
    
   var lam_mat_qty_val=$(".lam_mat_qty_val").val();
   var lam_mat_size_val=$(".lam_mat_size_val").val();
//   var lam_mat_size_val_one=lam_mat_size_val.split('*');
//   var lam_mat_size_val_two=lam_mat_size_val.split('*');
   var lam_mat_unit_val=$(".lam_mat_unit_val").val();
   $(".lam_mat_amount_val").attr("value", lam_mat_qty_val*lam_mat_size_val*lam_mat_unit_val);
   calculate_all_amount();
});



//Glue Formula

$(document).on("keyup",function(){
    
   var glue_val=$(".glue_val").val();
   // var glue_size_val=$(".glue_size_val").val();
 
   var glue_unit_val=$(".glue_unit_val").val();
   $(".glue_amount_val").attr("value", glue_val*glue_unit_val);
   calculate_all_amount();
});

//Spot UV Formula

$(document).on("keyup",function(){
    
   var spotuv_qty_val=$(".spotuv_qty_val").val();
   // var spotuv_size_val=$(".spotuv_size_val").val();
 
   var spotuv_unit_val=$(".spotuv_unit_val").val();
   $(".spotuv_amount_val").attr("value", spotuv_qty_val*spotuv_unit_val);
   calculate_all_amount();
});

//Plus Button On Block Making 

$(document).ready(function(){
    var maxField = 50; 
    var addButton = $('.add_button_bm_unit');  
    var wrapper = $('.fffff');  
    var x = 1;  
    
   
    $(addButton).click(function(){
   
        if(x < maxField){ 
            x++;  
            var row_count = $(this).attr("block-making-row-count");
            var fieldHTML = '<tr class="block-making-row" id="div-'+row_count+'"><td><label for="username" class="mb-0 m-lable">Block Making</label></td> <td><table><tbody><tr><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="block_making_vendor_type[]">  <option value="Inhouse">Inhouse</option>  <option value="OutSource">OutSource</option>  </select></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""> <select class="selectpicker" name="block_making_vendor_material[]" data-live-search="true"> <option value="Positive">Block</option>  </select></div></div></td> </tr></tbody></table>     </td>   <td>  <div class="form-group ic-cmp-int float-lb floating-lb">  <div class="form-ic-cmp"> </div> <div class="bm_qty"><div class="nk-int-st"> <input type="text" class="form-control block-making-qty" name="block_making_qty[]" /> <label class="nk-label">Quantity</label>   </div>   </div> </div>   </td>  <td>  <div class="form-group ic-cmp-int float-lb floating-lb">  <div class="form-ic-cmp">  </div><div class="field_wrapper_bm">  <div class="nk-int-st">  <input type="text" class="form-control block-making-size" placeholder="" step="any" value="" name="block_making_size[]" /><label class="nk-label">Size</label> </div> </div> </div>  </td> <td><div class="form-group ic-cmp-int float-lb floating-lb"> <div class="form-ic-cmp">  </div>  <div class="field_wrapper_bm_unit"><div class="nk-int-st">  <input type="text" class="form-control block-making-unit-price" name="block_making_unit_price[]" /> <label class="nk-label">Rate Per Unit</label>   </div></div> </div>   </td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control block-making-amount row-amount" placeholder="" step="any" value="0" id="bm_amount" name="block_making_amount[]" readonly /><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_block_making" title="Add field" block-making-row-count="'+row_count+'"><img src="../images/remove-icon.png"/></a><label class="nk-label">Amount</label></div></div></td></tr>';
            $(".block-making-parent").after(fieldHTML); 
            var row_count = $(this).attr("block-making-row-count", (parseFloat(row_count)+1));
        }
        $('.selectpicker').selectpicker();
    });
    
   
});
$(document).on('click', '.remove_button_block_making', function(e){
    var row_count = $(this).attr("block-making-row-count");
    e.preventDefault();
     $("#div-"+row_count).remove();  
     calculate_all_amount()
});


// Block Making Formula with plus sign

$(document).on("keyup", ".block-making-qty, .block-making-size, .block-making-unit-price", function(){
    var i = 1;
    $(".block-making-row").each(function(index, obj){
        var block_making_qty = $(this).find(".block-making-qty").val();
        var block_making_size = $(this).find(".block-making-size").val();
        var block_making_size_split = block_making_size.split("*");
        var block_making_unit_price = $(this).find(".block-making-unit-price").val();
        var block_making_amount = block_making_qty*block_making_size_split[0]*block_making_size_split[1]*block_making_unit_price;
        if(isNaN(block_making_amount)){
            block_making_amount = 0;
        }
        $(this).find(".block-making-amount").attr("value", block_making_amount);
        // console.log(block_making_size);
    });
    calculate_all_amount();
});


// Embosing

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_emb_punit'); //Add button selector
    var wrapper = $('.eeeee'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("embossing-row-count");
            var fieldHTML = '<tr class="empty embossing-row" id="embossing-row-'+row_count+'"><td><label for="username" class="mb-0 m-lable">Embossing/Debossing</label></td><td><table><tr><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="embossing_vendor_type[]" data-live-search="true"><option value="Inhouse">Inhouse</option><option value="OutSource">OutSource</option></select></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="embossing_vendor_material[]" data-live-search="true"><option value="Embossing">Embossing</option><option value="Debossing">Debossing</option></select></div></div></td></tr></table></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_embossing_qty"><div class="nk-int-st"><input type="text" class="form-control embossing-qty" name="embossing_qty[]" /><label class="nk-label">Quantity</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_embossing"><div class="nk-int-st"><input type="text" class="form-control embossing-size" placeholder="" step="any" value="" name="embossing_size[]" /><label class="nk-label">Size</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_puint"><div class="nk-int-st"><input type="text" class="form-control embossing-unit-price" name="embossing_unit_price[]" /><label class="nk-label">Rate Per Unit</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control embossing-amount row-amount" placeholder="" step="any" value="0" id="embossing_amount" name="embossing_amount[]" readonly /><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="embossing_remove_button" embossing-row-count="'+row_count+'" title="Add field"><img src="../images/remove-icon.png"/></a><label class="nk-label">Amount</label></div></div></td></tr>'; //New input field html 
            $(".embossing-parent").after(fieldHTML); //Add field html
            $(this).attr("embossing-row-count", (parseFloat(row_count)+1));
        }
        $('.selectpicker').selectpicker();
    });
    
    //Once remove button is clicked
});
$(document).on('click', '.embossing_remove_button', function(e){
    var row_count = $(this).attr("embossing-row-count");
    // console.log(row_count);
    e.preventDefault();
    $("#embossing-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});
$(document).on("keyup", ".embossing-qty, .embossing-size, .embossing-unit-price", function(){
    var i = 1;
    $(".embossing-row").each(function(index, obj){
        var embossing_qty = $(this).find(".embossing-qty").val();
        var embossing_size = $(this).find(".embossing-size").val();
        var embossing_size_split = embossing_size.split("*");
        var embossing_unit_price = $(this).find(".embossing-unit-price").val();
        var embossing_amount = embossing_qty*embossing_size_split[0]*embossing_size_split[1]*embossing_unit_price;
        if(isNaN(embossing_amount)){
            embossing_amount = 0;
        }
        $(this).find(".embossing-amount").attr("value", embossing_amount);
        // console.log(embossing_size);
    });
    calculate_all_amount();
});

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_diem_unit'); //Add button selector
    var wrapper = $('.ddddd'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("die-making-row-count");
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "https://www.thecustomboxes.online/get-die-making-row",
                method: "post",
                data: {row_count:row_count, "_token":csrf_token},
                success: function(succ){
                    $(".die-making-parent").after(succ); //Add field html
                    $('.selectpicker').selectpicker();
                    $(this).attr("die-making-row-count", (parseFloat(row_count)+1));
                }
            });
        }
    });
    
    //Once remove button is clicked
});
$(document).on('click', '.die_making_remove_button', function(e){
    var row_count = $(this).attr("die-making-row-count");
    e.preventDefault();
    $("#die-making-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});

$(document).on("keyup", ".die-making-qty, .die-making-size, .die-making-unit-price", function(){
    var i = 1;
    $(".die-making-row").each(function(index, obj){
        var die_making_qty = $(this).find(".die-making-qty").val();
        var die_making_size = $(this).find(".die-making-size").val();
        var die_making_size_split = die_making_size.split("*");
        var die_making_unit_price = $(this).find(".die-making-unit-price").val();
        var die_making_amount = die_making_qty*die_making_size_split[0]*die_making_size_split[1]*die_making_unit_price;
        if(isNaN(die_making_amount)){
            die_making_amount = 0;
        }
        $(this).find(".die-making-amount").attr("value", die_making_amount);
        // console.log(die_making_size);
    });
    calculate_all_amount();
});


$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_mc_unit'); //Add button selector
    var wrapper = $('.mcmc'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("mis-cellaneouse-row-count");
            var fieldHTML = '<tr class="mis-cellaneouse-row" id="mis-cellaneouse-row-'+row_count+'"><td><label for="username" class="mb-0 m-lable">MisCellaneouse</label></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control" placeholder="" step="any" value="" name="mis_cellaneouse_vendor[]" /><label class="nk-label">MisCellaneous vendor</label></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_mc_qty"><div class="nk-int-st"><input type="text" class="form-control mis-cellaneouse-qty" name="mis_cellaneouse_qty[]" /><label class="nk-label">Quantity</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_mc"><div class="nk-int-st"><input type="text" class="form-control mis-cellaneouse-size" placeholder="" step="any" value="" name="mis_cellaneouse_size[]" /><label class="nk-label">Size</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_mc_unit"><div class="nk-int-st"><input type="text" class="form-control mis-cellaneouse-unit-price" name="mis_cellaneouse_unit_price[]" /><label class="nk-label">Rate Per Unit</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control mis-cellaneouse-amount row-amount" placeholder="" step="any" value="0" id="mc_amount" name="mis_cellaneouse_amount[]" readonly /><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" mis-cellaneouse-row-count="'+row_count+'" class="mc_remove_button" title="Add field"><img src="../images/remove-icon.png"/></a><label class="nk-label">Amount</label></div></div></td></tr>'; //New input field html 
            $(".mis-cellaneouse-parent").after(fieldHTML); //Add field html
            $(this).attr("mis-cellaneouse-row-count", (parseFloat(row_count)+1));
        }
    });
});
$(document).on('click', '.mc_remove_button', function(e){
    var row_count = $(this).attr("mis-cellaneouse-row-count");
    e.preventDefault();
    $("#mis-cellaneouse-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});


$(document).on("keyup", ".mis-cellaneouse-qty, .mis-cellaneouse-size, .mis-cellaneouse-unit-price", function(){
    var i = 1;
    $(".mis-cellaneouse-row").each(function(index, obj){
        var mis_cellaneouse_qty = $(this).find(".mis-cellaneouse-qty").val();
        var mis_cellaneouse_size = $(this).find(".mis-cellaneouse-size").val();
        var mis_cellaneouse_size_split = mis_cellaneouse_size.split("*");
        var mis_cellaneouse_unit_price = $(this).find(".mis-cellaneouse-unit-price").val();
        var mis_cellaneouse_amount = mis_cellaneouse_qty*mis_cellaneouse_unit_price;
        if(isNaN(mis_cellaneouse_amount)){
            mis_cellaneouse_amount = 0;
        }
        $(this).find(".mis-cellaneouse-amount").attr("value", mis_cellaneouse_amount);
        // console.log(mis_cellaneouse_amount);
    });
    calculate_all_amount();
});


// Die Cutting 

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_die_cutting'); //Add button selector
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("die-cutting-row-count");
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "https://www.thecustomboxes.online/get-die-cutting-row",
                method: "post",
                data: {row_count:row_count, "_token":csrf_token},
                success: function(succ){
                    $(".die-cutting-parent").after(succ); //Add field html
                    $('.selectpicker').selectpicker();
                    $(this).attr("die-cutting-row-count", (parseFloat(row_count)+1));
                }
            });
        }
    });
});
$(document).on('click', '.remove_button_die_cutting', function(e){
    var row_count = $(this).attr("die-cutting-row-count");
    e.preventDefault();
    $("#die-cutting-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});
$(document).on("keyup", ".die-cutting-qty, .die-cutting-size, .die-cutting-unit-price", function(){
    var i = 1;
    $(".die-cutting-row").each(function(index, obj){
        var die_cutting_qty = $(this).find(".die-cutting-qty").val();
        var die_cutting_size = $(this).find(".die-cutting-size").val();
        // var die_cutting_size_split = die_cutting_size.split("*");
        var die_cutting_unit_price = $(this).find(".die-cutting-unit-price").val();
        var die_cutting_amount = die_cutting_qty*die_cutting_size*die_cutting_unit_price;
        if(isNaN(die_cutting_amount)){
            die_cutting_amount = 0;
        }
        $(this).find(".die-cutting-amount").attr("value", die_cutting_amount);
        // console.log(die_cutting_amount);
    });
    calculate_all_amount();
});


// Pasting

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_pasting'); //Add button selector
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("pasting-row-count");
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "https://www.thecustomboxes.online/get-pasting-row",
                method: "post",
                data: {row_count:row_count, "_token":csrf_token},
                success: function(succ){
                    $(".pasting-parent").after(succ); //Add field html
                    $('.selectpicker').selectpicker();
                    $(this).attr("pasting-row-count", (parseFloat(row_count)+1));
                }
            });
        }
    });
    calculate_all_amount();
});
$(document).on('click', '.remove_button_pasting', function(e){
    var row_count = $(this).attr("pasting-row-count");
    e.preventDefault();
    $("#pasting-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});
$(document).on("keyup", ".pasting-qty, .pasting-size, .pasting-unit-price", function(){
    var i = 1;
    $(".pasting-row").each(function(index, obj){
        var pasting_qty = $(this).find(".pasting-qty").val();
        var pasting_size = $(this).find(".pasting-size").val();
        // var pasting_size_split = pasting_size.split("*");
        var pasting_unit_price = $(this).find(".pasting-unit-price").val();
        var pasting_amount = pasting_qty*pasting_size*pasting_unit_price;
        if(isNaN(pasting_amount)){
            pasting_amount = 0;
        }
        $(this).find(".pasting-amount").attr("value", pasting_amount);
        // console.log(pasting_amount);
    });
});

// Double Pasting

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_double_pasting'); //Add button selector
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("double-pasting-row-count");
            var fieldHTML = '<tr class="double-pasting-row" id="double-pasting-row-'+row_count+'"><td><label for="username" class="mb-0 m-lable">Double Pasting</label></td><td><table><tr><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="double_pasting_vendor_type[]" data-live-search="true"><option value="Inhouse">Inhouse</option><option value="OutSource">OutSource</option></select></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="double_pasting_vendor_material[]" data-live-search="true"><option value="samandbond">Samand Bond</option><option value="tape">Tape</option><option value="elfy">Elfy</option></select></div></div></td></tr></table></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control double-pasting-qty" name="double_pasting_qty[]" /><label class="nk-label">Quantity</label></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control double-pasting-size" placeholder="" step="any" value="" name="double_pasting_size[]" /><label class="nk-label">Size</label></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control double-pasting-unit-price" name="double_pasting_unit_price[]" /><label class="nk-label">Rate Per Unit</label></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="form-control double-pasting-amount row-amount" placeholder="" step="any" id="diec_amount" name="double_pasting_amount[]" value="0" readonly /><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_pasting" double-pasting-row-count="'+row_count+'" title="Add field"><img src="../images/remove-icon.png"/></a><label class="nk-label">Amount</label></div></div></td></tr>'; //New input field html 
            $(".double-pasting-parent").after(fieldHTML); //Add field html
            $(this).attr("double-pasting-row-count", (parseFloat(row_count)+1));
        }
        $('.selectpicker').selectpicker();
    });
    calculate_all_amount();
});
$(document).on('click', '.remove_button_pasting', function(e){
    var row_count = $(this).attr("double-pasting-row-count");
    e.preventDefault();
    $("#double-pasting-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});
$(document).on("keyup", ".double-pasting-qty, .double-pasting-size, .double-pasting-unit-price", function(){
    var i = 1;
    $(".double-pasting-row").each(function(index, obj){
        var double_pasting_qty = $(this).find(".double-pasting-qty").val();
        var double_pasting_size = $(this).find(".double-pasting-size").val();
        var double_pasting_size_split = double_pasting_size.split("*");
        var double_pasting_unit_price = $(this).find(".double-pasting-unit-price").val();
        var double_pasting_amount = double_pasting_qty*double_pasting_size_split[0]*double_pasting_size_split[1]*double_pasting_unit_price;
        if(isNaN(double_pasting_amount)){
            double_pasting_amount = 0;
        }
        $(this).find(".double-pasting-amount").attr("value", double_pasting_amount);
        // console.log(double_pasting_amount);
    });
    calculate_all_amount();
});

// Foiling
$(document).on("keyup", ".foiling-qty, .foiling-size, .foiling-unit-price", function(){
    var i = 1;
    $(".foiling-row").each(function(index, obj){
        var foiling_qty = $(this).find(".foiling-qty").val();
        var foiling_size = $(this).find(".foiling-size").val();
        // var foiling_size_split = foiling_size.split("*");
        var foiling_unit_price = $(this).find(".foiling-unit-price").val();
        var foiling_amount = foiling_qty*foiling_size*foiling_unit_price;
        if(isNaN(foiling_amount)){
            foiling_amount = 0;
        }
        $(this).find(".foiling-amount").attr("value", foiling_amount);
        // console.log(foiling_amount);
    });
    calculate_all_amount();
});



$(document).on("click", ".calculate-all-amount", function(){
    var calculate_total_amount = 0;
    $(".row-amount").each(function(){
        var mis_amount = $(this).val();
        if(mis_amount!=""){
            calculate_total_amount += parseFloat(mis_amount);
        }
    });
    $(".calculate-total-amount").attr("value", calculate_total_amount.toFixed(2));
});

$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button_stock_gsm'); //Add button selector
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            var row_count = $(this).attr("stock-gsm-row-count");
            var fieldHTML = '<tr class="stock-gsm-row" id="stock-gsm-row-'+row_count+'"><td><label for="username" class="mb-0 m-lable">Stock/gsm</label></td><td><table><tbody><tr><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="vendor_type[]" data-live-search="true"><option value="Inhouse">Inhouse</option><option value="OutSource">OutSource</option></select></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker" name="vendor_material[]" data-live-search="true"><option value="Bleach Card">Bleach Card</option><option value="Kraft Card">Kraft Card</option><option value="Art Card">Art Card</option><option value="corrugated Material">corrugated Material</option></select></div></div></div></td></tr></tbody></table></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="field_wrapper_qty"><div class="nk-int-st"><input type="text" class="form-control stock-gsm-qty" name="stock_gsm_qty[]"><label class="nk-label">Quantity</label></div></div></div></td><td><table><tbody><tr><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker stock-gsm-qty-p-size" name="stock_gsm_size_qty[]" data-live-search="true"><option value="210">210</option><option value="300">300</option><option value="350">350</option><option value="400">400</option><option value="270">270</option><option value="250">250</option><option value="600">600</option></select></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="bootstrap-select p_left fm-cmp-mg" style=""><select class="selectpicker stock-gsm-size-qty" name="stock_gsm_size[]" data-live-search="true"><option value="20*30">20*30</option><option value="23*30">23*30</option><option value="23*36">23*36</option><option value="25*30">25*30</option><option value="25*36">25*36</option><option value="22*28">22*28</option></select></div></div></div></td></tr></tbody></table></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class=""><div class="nk-int-st"><input type="text" class="form-control stock-gsm-per-unit" name="stock_gsm_unit_price[]"><!--<a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_unit" id="insert-more" title="Add field"><img src="https://www.thecustomboxes.online/images/add-icon.png"/></a>--><label class="nk-label">Rate Per Unit</label></div></div></div></td><td><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="number" class="stock-gsm-amount row-amount" placeholder="" step="any" id="stock_gsm_amount" name="stock_gsm_amount[]" value="0" readonly=""><a href="javascript:void(0);" stock-gsm-row-count="'+row_count+'" style="position: absolute; right: 0; top: 0;" class="remove_button_stock_gsm" title="Add field"><img src="https://www.thecustomboxes.online/images/remove-icon.png"></a><label class="nk-label">Amount</label></div></div></td></tr>'; //New input field html 
            $(".stock-gsm-parent").after(fieldHTML); //Add field html
            $(this).attr("stock-gsm-row-count", (parseFloat(row_count)+1));
        }
        $('.selectpicker').selectpicker();
    });
});
$(document).on('click', '.remove_button_stock_gsm', function(e){
    var row_count = $(this).attr("stock-gsm-row-count");
    e.preventDefault();
    $("#stock-gsm-row-"+row_count).remove(); //Remove field html
    calculate_all_amount();
});
$(document).on("keyup", ".stock-gsm-qty", function(){
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $(".stock-gsm-row").each(function(index, obj){
        var stock_gsm_qty = $(this).find(".stock-gsm-qty").val();
        var stock_gsm_qty_p_size = $(this).find(".stock-gsm-qty-p-size").children("option:selected").val();
        var stock_gsm_size_qty = $(this).find(".stock-gsm-size-qty").children("option:selected").val();
        var stock_gsm_size_qty_split = stock_gsm_size_qty.split("*");
        var stock_gsm_per_unit = $(this).find(".stock-gsm-per-unit").val();
        var stock_gsm_amount = stock_gsm_qty*stock_gsm_qty_p_size*stock_gsm_size_qty_split[0]*stock_gsm_size_qty_split[1]*stock_gsm_per_unit/15500;
        $(this).find(".stock-gsm-amount").attr("value", stock_gsm_amount.toFixed(2));
    });
    calculate_all_amount();
});
$(document).on("change", ".stock-gsm-qty-p-size", function(){
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $(".stock-gsm-row").each(function(index, obj){
        var stock_gsm_qty = $(this).find(".stock-gsm-qty").val();
        var stock_gsm_qty_p_size = $(this).find(".stock-gsm-qty-p-size").children("option:selected").val();
        var stock_gsm_size_qty = $(this).find(".stock-gsm-size-qty").children("option:selected").val();
        var stock_gsm_size_qty_split = stock_gsm_size_qty.split("*");
        var stock_gsm_per_unit = $(this).find(".stock-gsm-per-unit").val();
        var stock_gsm_amount = stock_gsm_qty*stock_gsm_qty_p_size*stock_gsm_size_qty_split[0]*stock_gsm_size_qty_split[1]*stock_gsm_per_unit/15500;
        $(this).find(".stock-gsm-amount").attr("value", stock_gsm_amount.toFixed(2));
    });
    calculate_all_amount();
});
$(document).on("change", ".stock-gsm-size-qty", function(){
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $(".stock-gsm-row").each(function(index, obj){
        var stock_gsm_qty = $(this).find(".stock-gsm-qty").val();
        var stock_gsm_qty_p_size = $(this).find(".stock-gsm-qty-p-size").children("option:selected").val();
        var stock_gsm_size_qty = $(this).find(".stock-gsm-size-qty").children("option:selected").val();
        var stock_gsm_size_qty_split = stock_gsm_size_qty.split("*");
        var stock_gsm_per_unit = $(this).find(".stock-gsm-per-unit").val();
        var stock_gsm_amount = stock_gsm_qty*stock_gsm_qty_p_size*stock_gsm_size_qty_split[0]*stock_gsm_size_qty_split[1]*stock_gsm_per_unit/15500;
        $(this).find(".stock-gsm-amount").attr("value", stock_gsm_amount.toFixed(2));
    });
    calculate_all_amount();
});
$(document).on("keyup", ".stock-gsm-per-unit", function(){
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $(".stock-gsm-row").each(function(index, obj){
        var stock_gsm_qty = $(this).find(".stock-gsm-qty").val();
        var stock_gsm_qty_p_size = $(this).find(".stock-gsm-qty-p-size").children("option:selected").val();
        var stock_gsm_size_qty = $(this).find(".stock-gsm-size-qty").children("option:selected").val();
        var stock_gsm_size_qty_split = stock_gsm_size_qty.split("*");
        var stock_gsm_per_unit = $(this).find(".stock-gsm-per-unit").val();
        var stock_gsm_amount = stock_gsm_qty*stock_gsm_qty_p_size*stock_gsm_size_qty_split[0]*stock_gsm_size_qty_split[1]*stock_gsm_per_unit/15500;
        $(this).find(".stock-gsm-amount").attr("value", stock_gsm_amount.toFixed(2));
    });
    calculate_all_amount();
});
$(document).on("keyup", ".corrugation-qty, .corrugation-unit-price", function(){
	var corrugation_qty = $(".corrugation-qty").val();
	var corrugation_unit_price = $(".corrugation-unit-price").val();
	var corrugation_amount = $(".corrugation-amount").attr("value", corrugation_qty*corrugation_unit_price);
});
$(document).on("click", ".edit-sales-enquiry-modal", function(){
    var data_id = $(this).attr("data-id");
    $(".sales-enquires-modal").each(function(index, obj){
        var open_size = $(this).find(".open-size").html();
        $(this).find(".open-size").html("<input type='text' value='"+open_size+"' />");
        var stock = $(this).find(".stock").html();
        $(this).find(".stock").html("<input type='text' value='"+stock+"' />");
        var product = $(this).find(".product").html();
        $(this).find(".product").html("<input type='text' value='"+product+"' />");
        var printing = $(this).find(".printing").html();
        $(this).find(".printing").html("<input type='text' value='"+printing+"' />");
        var qty = $(this).find(".qty").html();
        $(this).find(".qty").html("<input type='text' value='"+qty+"' />");
        var price = $(this).find(".price").html();
        $(this).find(".price").html("<input type='text' value='"+price+"' />");
        $(".modal-footer").html('<button type="button" class="btn btn-warning view-email-doc-edit-cancel">Cancel</button><button type="button" data-id="'+data_id+'" class="btn btn-success view-email-doc-edit-update">Update</button>');
    });
});
$(document).on("click", ".view-email-doc-edit-cancel", function(){
    var data_id = $(this).attr("data-id");
    $(".sales-enquires-modal").each(function(index, obj){
        var open_size = $(this).find(".open-size input").val();
        $(this).find(".open-size").html(open_size);
        var stock = $(this).find(".stock input").val();
        $(this).find(".stock").html(stock);
        var product = $(this).find(".product input").val();
        $(this).find(".product").html(product);
        var printing = $(this).find(".printing input").val();
        $(this).find(".printing").html(printing);
        var qty = $(this).find(".qty input").val();
        $(this).find(".qty").html(qty);
        var price = $(this).find(".price input").val();
        $(this).find(".price").html(price);
        $(".modal-footer").html('<button data-id="'+data_id+'" type="button" class="btn btn-success">Send Email & Close</button><!--<button data-id="'+data_id+'" type="button" class="btn btn-warning edit-sales-enquiry-modal">Edit</button>--><button type="button" class="btn btn-secondary view-email-doc-close" data-dismiss="modal">Close</button>');
    });
});
$(document).on("click", ".view-email-doc-edit-update", function(){
    var data_id = $(this).attr("data-id");
    var open_size_value = [];
    var stock_value = [];
    var product_value = [];
    var printing_value = [];
    var qty_value = [];
    var price_value = [];
    var i = 0;
    $(".sales-enquires-modal").each(function(index, obj){
        var open_size = $(this).find(".open-size input").val();
        open_size_value[i] = open_size;
        $(this).find(".open-size").html(open_size);
        var stock = $(this).find(".stock input").val();
        stock_value[i] = stock;
        $(this).find(".stock").html(stock);
        var product = $(this).find(".product input").val();
        product_value[i] = product;
        $(this).find(".product").html(product);
        var printing = $(this).find(".printing input").val();
        printing_value[i] = printing;
        $(this).find(".printing").html(printing);
        var qty = $(this).find(".qty input").val();
        qty_value[i] = qty;
        $(this).find(".qty").html(qty);
        var price = $(this).find(".price input").val();
        price_value[i] = price;
        $(this).find(".price").html(price);
        $(".modal-footer").html('<button data-id="'+data_id+'" type="button" class="btn btn-success">Send Email & Close</button><button data-id="'+data_id+'" type="button" class="btn btn-warning edit-sales-enquiry-modal">Edit</button><button type="button" class="btn btn-secondary view-email-doc-close" data-dismiss="modal">Close</button>');
        i++;
    });
    csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "https://www.thecustomboxes.online/update-sales-enquiry-modal",
        method: "post",
        data:{open_size_value:open_size_value, stock_value:stock_value, product_value:product_value, printing_value:printing_value, qty_value:qty_value, price_value:price_value, data_id:data_id, "_token":csrf_token},
        success: function(succ){

        }
    });
});
$(document).on("click", ".view-email-doc-send-email", function(){
    var data_id = $(this).attr("data-id");
    var document_comment = $(".view-email-doc-comment").val();
    var csrf_token = $("meta[name=csrf-token]").attr("content");
    console.log(document_comment);
    $.ajax({
        url: "https://www.thecustomboxes.online/price_send_to_customer",
        method: "POST",
        data: {data_id:data_id, document_comment:document_comment, "_token":csrf_token},
        success: function(){
            $(".view-email-doc").removeClass("show");
            $(".view-email-doc").addClass("fade");
            $(".view-email-doc").html("");
            $("body").css("overflow", "");
            $(".alert-section").html("<center><div class='alert alert-success'>Email Send Successfully!...</div></center>");
            setTimeout(function(){
                $(".alert-section").html("");
            }, 3000);
            $(".alert-section").html("<center><div  class='alert alert-success'>Price Send Successfully!...</div></center>");
            $(".sent-price-quote-btn-"+data_id).html('<button style=" width: 100%;background-color: #00c292;border: 1px solid #00c292;" class="btn btn-primary" data-toggle="modal">Price Sent</button>');
            $(".onchange").children("option:selected").prop("selected", false);
        }
    });
});
$(document).on("click", ".get-product-info-view", function(){
    var data_id = $(this).data("id");
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "https://www.thecustomboxes.online/get-product-info-view",
        method: "post",
        data:{data_id:data_id, "_token":csrf_token},
        success: function(succ){
            $(".get-product-info-view-modal").html(succ);
            $(".get-product-info-view-modal").addClass("in");
            $(".get-product-info-view-modal").css("display", "block");
            $("body").addClass("modal-open");
            $("body").css("padding-right", "17px");
        }
    });
});
$(document).on("click", ".get-product-info-view-close", function(){
    $(".get-product-info-view-modal").html("");
    $(".get-product-info-view-modal").removeClass("in");
    $(".get-product-info-view-modal").css("display", "none");
    $("body").removeClass("modal-open");
    $("body").css("padding-right", "");
});

$(document).on("click", ".add_button_sales_inquiry_qty", function(){
    var product_num = $(this).attr("product-count");
    var count_row = $(".sales-inquiry-qty-product-"+product_num+" .sales-inquiry-qty-row").length+1;
    $(".sales-inquiry-qty-product-"+product_num).append('<div class=" sales-inquiry-qty-row sales-inquiry-qty-'+count_row+'"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div><div class="nk-int-st"><input type="text" class="form-control" name="qty['+product_num+']['+count_row+']" required/><label class="nk-label">Quantity *</label><a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_sales_inquiry_qty" title="Add field" product-count="'+product_num+'" row-id="'+count_row+'"><img src="../images/remove-icon.png"/></a></div></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="form-group ic-cmp-int float-lb floating-lb"><div class="form-ic-cmp"></div> <div class="nk-int-st"> <input type="text" class="form-control" name="price['+product_num+']['+count_row+']" /><label class="nk-label">Price Offered </label> </div> </div> </div></div>');
});
$(document).on("click", ".remove_button_sales_inquiry_qty", function(){
    var row_id = $(this).attr("row-id");
    var product_id = $(this).attr("product-count");
    $(".sales-inquiry-qty-product-"+product_id+" .sales-inquiry-qty-"+row_id).remove();
});
$(document).on("keyup", ".production-price-val, .shipping-price-val", function(){
    $(".product-main-details").each(function(){
        var product_price_val = $(this).find(".production-price-val").val();
        var split_product_price_val = product_price_val.split('*');
        var split_product_price_final_val = split_product_price_val[0]*split_product_price_val[1];
        var shipping_price_val = $(this).find(".shipping-price-val").val();
        var split_shipping_price_val = shipping_price_val.split('*');
        var split_shipping_price_final_val = split_shipping_price_val[0]*split_shipping_price_val[1];
        // console.log(split_product_price_final_val);
        if(product_price_val==""){
            product_price_val = 0;
        }
        if(shipping_price_val==""){
            shipping_price_val = 0;
        }
        var est_ticket_total_price = parseFloat(product_price_val)+parseFloat(shipping_price_val);
        if(est_ticket_total_price==0){
            $(this).find(".est-ticket-total-price").val("");
        }else{
            $(this).find(".est-ticket-total-price").val(split_product_price_final_val+split_shipping_price_final_val);
        }
    })
});
$(document).on("click", ".show-final-aproval-inq", function(){
    $(".final-aproval-inq-container").addClass("show-inq");
    $(".show-final-aproval-inq").addClass("hide-final-aproval-inq");
    $(".hide-final-aproval-inq").removeClass("show-final-aproval-inq");
});
$(document).on("click", ".hide-final-aproval-inq", function(){
    $(".final-aproval-inq-container").removeClass("show-inq");
    $(".hide-final-aproval-inq").addClass("show-final-aproval-inq");
    $(".show-final-aproval-inq").removeClass("hide-final-aproval-inq");
});
$(document).on("click", "viewdata", function(){
    $product_id=$(this).attr('data-uid');
    $src = "{{url('view-inquiry/')}}"+'/'+$product_id;
    swal.fire({
        title: "you want to View this Inquiry Info ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Yes',
    }).then((ok) => {
        if (ok.value) {
            window.location = $src;
        }else{
            console.log('cancelled');
        }
    });
});
$(document).on("click", ".view-email-doc-close", function(){
    $(".onchange").children("option:selected").prop("selected", false);
    $(".view-email-doc").removeClass("show");
    $(".view-email-doc").addClass("fade");
    $(".view-email-doc").html("");
    $("body").css("overflow", "");
});