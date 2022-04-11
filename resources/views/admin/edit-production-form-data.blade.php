@include('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table,
    td,
    th {
        background-color: white;
    }
</style>
<style>

.bootstrap-select.p_left .btn-group.bootstrap-select > .btn {
    
    padding-right: 50px !important;
   
}
             
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
  @if(Session::has('AddProduction'))
            
            <center>
            
            <div  class='alert alert-success'> {{ Session::get('AddProduction') }}</div>
            </center>
            
  @endif
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update-production-form-data')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container-fluid">
        <div class="">
            <div class=" ">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2>Edit Production Form</h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="job" value="<?php if(!empty($get_production_form_data_by_id[0]->job)){echo $get_production_form_data_by_id[0]->job;} ?>"  required/>
                                    <label class="nk-label">Job ID *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="date" value="<?php if(!empty($get_production_form_data_by_id[0]->date)){echo $get_production_form_data_by_id[0]->date;}else{echo date('m-d-Y');} ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                   
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control"  name="item" value="<?php if(!empty($get_production_form_data_by_id[0]->item)){echo $get_production_form_data_by_id[0]->item;} ?>" required />
                                    <label class="nk-label">Item *</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php foreach(json_decode($get_production_form_data_by_id[0]->qunatity_printing_sheet_size) as $key=>$value){ ?>
                    <div class="row field_wrapper1" style="margin-bottom:30px;" >
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                
                                    <div class="field_wrapper">
                                       
                                        
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control" name="qty[]" value="<?php if(!empty($value->qty)){echo $value->qty;} ?>" required />
                                    <label class="nk-label">Quantity *</label>
                                   
                                </div>
                                    </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                
                                    <div class="field_wrapper_print">
                                       
                                        
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control" name="printing[]" value="<?php if(!empty($value->printing)){echo $value->printing;} ?>" required />
                                    <label class="nk-label">Printing *</label>
                                    </div>
                                    </div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="sheet_size[]" value="<?php if(!empty($value->sheet_size)){echo $value->sheet_size;} ?>" required />
                                    <label class="nk-label">Sheet Size *</label>
                                     <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Production Unit</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="unit" data-live-search="true">
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->unit)){if($get_production_form_data_by_id[0]->unit=="Pakistan"){echo "selected";}} ?> value="Pakistan">Pakistan</option>
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->unit)){if($get_production_form_data_by_id[0]->unit=="USA"){echo "selected";}} ?> value="USA">USA</option>
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->unit)){if($get_production_form_data_by_id[0]->unit=="Pakoutsource"){echo "selected";}} ?> value="Pakoutsource">Pakistan OutSource</option>
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->unit)){if($get_production_form_data_by_id[0]->unit=="Usaoutsource"){echo "selected";}} ?> value="Usaoutsource">USA OutSource</option>
                                </select>
                            </div>
                        </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Currency</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker"  name="currency" data-live-search="true">
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->currency)){if($get_production_form_data_by_id[0]->currency=="Rupees"){echo "selected";}} ?> value="Rupees">Pakistan Rupees</option>
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->currency)){if($get_production_form_data_by_id[0]->currency=="Dollar"){echo "selected";}} ?> value="Dollar">USA Dollar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Website</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker"  name="website" data-live-search="true">
                                      <option <?php if(!empty($get_production_form_data_by_id[0]->currency)){if($get_production_form_data_by_id[0]->website=="TheCustomboxes.com"){echo "selected";}} ?> value="TheCustomboxes.com">www.thecustomboxes.com</option>
                                    @foreach($data as $value)
                                    <option <?php if(!empty($get_production_form_data_by_id[0]->currency)){if($get_production_form_data_by_id[0]->website==$value->website){echo "selected";}} ?> value="{{$value->website}}">{{$value->website}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        

                    </div>
                    
                    <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                    
                                </div>
                                <div class="nk-int-st">
                                    <textarea id="w3review" name="planning" style="width:100%"  row="5"><?php if(!empty($get_production_form_data_by_id[0]->planning)){echo $get_production_form_data_by_id[0]->planning;} ?></textarea>
                                    
                                    <label class="nk-label">Planning *</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
 <div class="container">
         
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
        
        
        

            <div class="dropzone-area">
                <div class="container-fluid">
                    <div class="">
                        <div class="">
                            <div class="Table-view">
                                <table class="table table-striped my-sm-5"  >
                                    <thead class="" style="position: sticky;
    width: 100%;
    z-index: 100000000000000000000000;
    top: 1px;  ">
                                        <tr class="info my-sm-5">
                                            <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                Production
                                            </th>
                                               <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                Vendor
                                            </th>
                                            
                                              <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                Qunatity
                                            </th>
                                                <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                Size
                                            </th>
                                               <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                 Rate Per Unit
                                            </th>
                                                <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                AMOUNT
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="my-sm-5 production-form-parent">
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Digintal print</label>

                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="digital_printing_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                             
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control digintal_print_qty" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_qty)){echo json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_qty;} ?>" name="digital_printing_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control digitial_print_size" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_size)){echo json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_size;} ?>" name="digital_printing_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control digitial_print_unit" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_unit_price)){echo json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_unit_price;} ?>" name="digital_printing_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control digitial_print_amount row-amount" placeholder="" step="any" id="dp_amount" name="digital_printing_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_amount)){echo json_decode($get_production_form_data_by_id[0]->digital_printing)->digital_printing_amount;}else{echo "0";} ?>" readonly />
                                                            
                                                        
                                                        
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Scanning</label>
                                                
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                      <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="scanning_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                        </select>
                                                    </div>
                                                     
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control scanning_qty_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_qty)){echo json_decode($get_production_form_data_by_id[0]->scanning)->scanning_qty;} ?>" name="scanning_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control scanning_size_val" placeholder="" step="any" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_size)){echo json_decode($get_production_form_data_by_id[0]->scanning)->scanning_size;} ?>" name="scanning_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control scanning_unit_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_unit_price)){echo json_decode($get_production_form_data_by_id[0]->scanning)->scanning_unit_price;} ?>" name="scanning_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control scanning_amount_val row-amount" placeholder="" step="any" id="scanning_amount" name="scanning_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->scanning)->scanning_amount)){echo json_decode($get_production_form_data_by_id[0]->scanning)->scanning_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Plate Making</label>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                   
                                                   <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="plate_making_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input id="plate_qty" type="text" class="plate_class form-control" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_qty)){echo json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_qty;} ?>" name="plate_making_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                     <div class="nk-int-st">
                                                     
                                                        <div class="bootstrap-select fm-cmp-mg">
                                                            <select class="selectpicker" id="pm_qty_p_size" name="plate_making_size" data-live-search="true">
                                   
                                    
                                                                @foreach($product_size_for_plate_making as $product_size_for_plate_making)
                                                                <option <?php if(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_size==$product_size_for_plate_making->product_size){echo "selected";} ?> value="{{$product_size_for_plate_making->product_size}}">{{$product_size_for_plate_making->product_size}}</option>
                                   
                                   
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                    <input type="text" class="form-control price-product set_new_price disp" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_unit_price)){echo json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_unit_price;} ?>" name="plate_making_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                                
                                            </td>
                                       
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                     
                                                    </div>
                                                    <div class="nk-int-st">
                                                        
                                                        <input type="number" class="mult row-amount" placeholder="" step="any" id="pm_amount" name="plate_making_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_amount)){echo json_decode($get_production_form_data_by_id[0]->plate_making)->plate_making_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->stock_gsm) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "stock-gsm-parent";} ?> stock-gsm-row" id="stock-gsm-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Stock/gsm</label>
                                            </td>
                                           
                                            <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="vendor_type[]" data-live-search="true">
                                                            <option <?php if($value->vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if($value->vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                   <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                            <?php //echo "<pre>"; print_r($stock_type); echo "</pre>"; ?>
                                                        <select class="selectpicker" name="vendor_material[]" data-live-search="true">
                                                            @foreach($stock_type as $stock_types)
                                                            <option <?php if($value->vendor_material==$stock_types->stock_type_value){echo "selected";} ?> value="{{$stock_types->stock_type_value}}">{{$stock_types->stock_type_value}}</option>
                                                            @endforeach
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_qty">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control stock-gsm-qty" value="<?php if(!empty($value->stock_gsm_qty)){echo $value->stock_gsm_qty;} ?>" name="stock_gsm_qty[]" />
                                                         
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                             <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker stock-gsm-qty-p-size" name="stock_gsm_size_qty[]" data-live-search="true">
                                                            @foreach($stock_gsm as $stock_gsms)
                                                            <option <?php if($value->stock_gsm_size_qty==$stock_gsms->stock_gsm_value){echo "selected";} ?> value="{{$stock_gsms->stock_gsm_value}}">{{$stock_gsms->stock_gsm_value}}</option>
                                                            @endforeach
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                   <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker stock-gsm-size-qty" name="stock_gsm_size[]" data-live-search="true">
                                                            @foreach($stock_size as $stock_sizes)
                                                            <option <?php if($value->stock_gsm_size==$stock_sizes->stock_size_value){echo "selected";} ?> value="{{$stock_sizes->stock_size_value}}">{{$stock_sizes->stock_size_value}}</option>
                                                            @endforeach
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control stock-gsm-per-unit" value="<?php if(!empty($value->stock_gsm_unit_price)){echo $value->stock_gsm_unit_price;} ?>" name="stock_gsm_unit_price[]" />
                                                         <!--<a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_unit" id="insert-more" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>-->
                              
                                                       
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="stock-gsm-amount row-amount" placeholder="" step="any" id="stock_gsm_amount" name="stock_gsm_amount[]" value="<?php if(!empty($value->stock_gsm_amount)){echo $value->stock_gsm_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" block-making-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->stock_gsm))+1; ?>" style="position: absolute; right: 0; top: 0;" class="add_button_stock_gsm" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_block_making" title="Add field" block-making-row-count="<?php echo $i; ?>"><img src="../images/remove-icon.png"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 ssss"  >
                                                
                                                <tbody class="">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Outsource Printing</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="out_source_printing_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                     
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control printing_qty_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_qty)){echo json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_qty;} ?>" name="out_source_printing_qty" />
                                                        <label class="nk-label">Number of Colors</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control printing_size_val" placeholder="" step="any" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_size)){echo json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_size;} ?>" name="out_source_printing_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control printing_unit_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_unit_price)){echo json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_unit_price;} ?>" name="out_source_printing_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control printing_amount_val 1 row-amount" placeholder="" step="any" id="printing_amount" name="out_source_printing_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_amount)){echo json_decode($get_production_form_data_by_id[0]->out_source_printing)->out_source_printing_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Lam Mat/ Shine</label>
                                            </td>

                                            <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="lamination_mate_shine_vendor_type" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="lamination_mate_shine_vendor_material" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_material=="LamMat"){echo "selected";} ?> value="LamMat">Lam Mat</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_material=="Shine"){echo "selected";} ?> value="Shine">Shine</option>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control lam_mat_qty_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_qty)){echo json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_qty;} ?>" name="lamination_mate_shine_vendor_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control lam_mat_size_val" placeholder="" step="any" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_size)){echo json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_size;} ?>" name="lamination_mate_shine_vendor_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
         <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control lam_mat_unit_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_unit_price)){echo json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_unit_price;} ?>" name="lamination_mate_shine_vendor_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control lam_mat_amount_val row-amount" placeholder="" step="any" id="lms_amount" name="lamination_mate_shine_vendor_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_amount)){echo json_decode($get_production_form_data_by_id[0]->lamination_mate_shine)->lamination_mate_shine_vendor_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                         <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Glue</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="glue_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->glue)->glue_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->glue)->glue_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                     
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control glue_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->glue)->glue_qty)){echo json_decode($get_production_form_data_by_id[0]->glue)->glue_qty;} ?>" name="glue_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control glue_size_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->glue)->glue_size)){echo json_decode($get_production_form_data_by_id[0]->glue)->glue_size;} ?>" placeholder="" step="any" value="" name="glue_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control glue_unit_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->glue)->glue_unit_price)){echo json_decode($get_production_form_data_by_id[0]->glue)->glue_unit_price;} ?>" name="glue_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                          
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control glue_amount_val row-amount" placeholder="" step="any" id="lms_amount" name="glue_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->glue)->glue_amount)){echo json_decode($get_production_form_data_by_id[0]->glue)->glue_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Spot u.v</label>
                                            </td>

                                                <td>
                                                
                                                 <table>
                                                     <tr>
                                                    <td>
                                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="spot_vendor_type" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->spot)->spot_vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->spot)->spot_vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="spot_vendor_material" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->spot)->spot_vendor_material=="Positive"){echo "selected";} ?> value="Positive">Positive </option>
                                                            <!--<option value="Negative">Negative</option>-->
                                                            
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                                  <td>
                                                  <div class="form-group ic-cmp-int float-lb floating-lb">
                                                  <div class="form-ic-cmp">
                                                  </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control spotuv_qty_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->spot)->spot_qty)){echo json_decode($get_production_form_data_by_id[0]->spot)->spot_qty;} ?>" name="spot_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control spotuv_size_val" placeholder="" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->spot)->spot_size)){echo json_decode($get_production_form_data_by_id[0]->spot)->spot_size;} ?>" step="any" value="" name="spot_size" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control spotuv_unit_val" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->spot)->spot_unit_price)){echo json_decode($get_production_form_data_by_id[0]->spot)->spot_unit_price;} ?>" name="spot_unit_price" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control spotuv_amount_val row-amount" placeholder="" step="any" id="spotuv_amount" name="spot_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->spot)->spot_amount)){echo json_decode($get_production_form_data_by_id[0]->spot)->spot_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->block_making) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "block-making-parent";} ?> block-making-row" id="div-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Block Making</label>
                                            </td>
                                            
                                            
                                               <td>
                                                
                                                 <table>
                                                     <tr>
                                                    <td>
                                                    <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="block_making_vendor_type[]" data-live-search="true">
                                                            <option <?php if($value->block_making_vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if($value->block_making_vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="block_making_vendor_material[]" data-live-search="true">
                                                            <option <?php if($value->block_making_vendor_material=="Block"){echo "selected";} ?> value="Block">Block</option>
                                                            <!--<option value="Negative">Negative</option>-->
                                                            
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                     <div class="bm_qty">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control block-making-qty" value="<?php if(!empty($value->block_making_qty)){echo $value->block_making_qty;} ?>" name="block_making_qty[]" />
                                                          
                              
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                     
                                                    </div>
                                                     <div class="field_wrapper_bm">
                                                         
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control block-making-size" value="<?php if(!empty($value->block_making_size)){echo $value->block_making_size;} ?>" placeholder="" step="any" value="" name="block_making_size[]" />
                                                   
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                     <div class="field_wrapper_bm_unit">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control block-making-unit-price" value="<?php if(!empty($value->block_making_unit_price)){echo $value->block_making_unit_price;} ?>" name="block_making_unit_price[]" />
                              
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control block-making-amount row-amount" placeholder="" step="any" id="bm_amount" name="block_making_amount[]" value="<?php if(!empty($value->block_making_amount)){echo $value->block_making_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" block-making-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->block_making))+1; ?>" style="position: absolute; right: 0; top: 0;" class="add_button_bm_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_block_making" title="Add field" block-making-row-count="<?php echo $i; ?>"><img src="../images/remove-icon.png"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <tr>
                                            <td colspan="10" align="center" >
                                                  <table class="table table-striped my-sm-5 fffff"  >
                                                
                                                <tbody class="emptyf">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->embossing) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "embossing-parent";} ?> embossing-row" id="embossing-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Embossing/Debossing</label>
                                            </td>
                                            <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="embossing_vendor_type[]" data-live-search="true">
                                                            <option <?php if($value->embossing_vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if($value->embossing_vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="embossing_vendor_material[]" data-live-search="true">
                                                            <option <?php if($value->embossing_vendor_material=="Embossing"){echo "selected";} ?> value="Embossing">Embossing</option>
                                                            <option <?php if($value->embossing_vendor_material=="Debossing"){echo "selected";} ?> value="Debossing">Debossing</option>
                                                            
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_embossing_qty">
                                                        <div class="nk-int-st">
                                                            <input type="text" class="form-control embossing-qty" value="<?php if(!empty($value->embossing_qty)){echo $value->embossing_qty;} ?>" name="embossing_qty[]" />
                                                            <label class="nk-label">Quantity</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_embossing">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control embossing-size" value="<?php if(!empty($value->embossing_size)){echo $value->embossing_size;} ?>" placeholder="" step="any" value="" name="embossing_size[]" />
                                                        
                                                        
                              
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                     <div class="field_wrapper_puint">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control embossing-unit-price" value="<?php if(!empty($value->embossing_unit_price)){echo $value->embossing_unit_price;} ?>" name="embossing_unit_price[]" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control embossing-amount row-amount" placeholder="" step="any" id="embossing_amount" name="embossing_amount[]" value="<?php if(!empty($value->embossing_amount)){echo $value->embossing_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_emb_punit" embossing-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->embossing))+1; ?>" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="embossing_remove_button" embossing-row-count="<?php echo $i; ?>" title="Add field"><img src="../images/remove-icon.png"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                         <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 eeeee"  >
                                                
                                                <tbody class="emptye">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <tr class="foiling-row">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Foiling</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="bootstrap-select fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="folling_vendor" data-live-search="true">
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->folling)->folling_vendor=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if(json_decode($get_production_form_data_by_id[0]->folling)->folling_vendor=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                    
                                                     
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control foiling-qty" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->folling)->folling_qty)){echo json_decode($get_production_form_data_by_id[0]->folling)->folling_qty;} ?>" name="folling_qty" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control foiling-size" placeholder="" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->folling)->folling_size)){echo json_decode($get_production_form_data_by_id[0]->folling)->folling_size;} ?>" step="any" value="" name="folling_size" />
                                                        <label class="nk-label"> Size</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control foiling-unit-price" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->folling)->folling_unit_price)){echo json_decode($get_production_form_data_by_id[0]->folling)->folling_unit_price;} ?>" name="folling_unit_price" />
                                                        <label class="nk-label"> Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control foiling-amount row-amount" placeholder="" step="any" id="folling_amount" name="folling_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->folling)->folling_amount)){echo json_decode($get_production_form_data_by_id[0]->folling)->folling_amount;}else{echo "0";} ?>" readonly />
                                                        <label class="nk-label"> Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->die_making) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "die-making-parent";} ?> die-making-row" id="die-making-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Die making</label>
                                            </td>

                                            <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="die_making_vendor[]" data-live-search="true">

                                                            <?php if(!empty($get_all_vendor_type)){foreach($get_all_vendor_type as $key=>$s_value){if($s_value->vendor_type_for==1){ ?>
                                                            <option <?php if($value->die_making_vendor==$s_value->vendor_type_value){echo "selected";} ?> value="<?php echo $s_value->vendor_type_value; ?>"><?php echo $s_value->vendor_type_value; ?></option>
                                                            <?php }}} ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                       <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_diem_qty"> 
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="<?php if(!empty($value->die_making_number_of_ups)){echo $value->die_making_number_of_ups;} ?>" name="die_making_number_of_ups[]" />
                                                        
                              
                                                        <label class="nk-label">Number of Ups</label>
                                                    </div>
                                                    </div>
                                                </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_diem_qty"> 
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-making-qty" value="<?php if(!empty($value->die_making_qty)){echo $value->die_making_qty;} ?>" name="die_making_qty[]" />
                                                        
                              
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                   <div class="field_wrapper_die">  
                                                        
                                                   
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-making-size" value="<?php if(!empty($value->die_making_size)){echo $value->die_making_size;} ?>" placeholder="" step="any" name="die_making_size[]" />
                                                         
                              
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                    
                                                     </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                      <div class="field_wrapper_diem_unit">  
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-making-unit-price" value="<?php if(!empty($value->die_making_unit_price)){echo $value->die_making_unit_price;} ?>" name="die_making_unit_price[]" />
                              
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control die-making-amount row-amount" placeholder="" step="any" id="diem_amount" name="die_making_amount[]" value="<?php if(!empty($value->die_making_amount)){echo $value->die_making_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_diem_unit" die-making-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->die_making))+1; ?>" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="die_making_remove_button" die-making-row-count="<?php echo $i; ?>" title="Add field"><img src="../images/remove-icon.png"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 ddddd"  >
                                                
                                                <tbody class="emptyd">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->die_cuting) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "die-cutting-parent";} ?> die-cutting-row" id="die-cutting-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Die cutting</label>
                                            </td>

                                          <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="die_cuting_vender_type[]" data-live-search="true">                                                            
                                                            <?php if(!empty($get_all_vendor_type)){foreach($get_all_vendor_type as $key=>$s_value){if($s_value->vendor_type_for==2){ ?>
                                                            <option <?php if($value->die_cuting_vender_type==$s_value->vendor_type_value){echo "selected";} ?> value="<?php echo $s_value->vendor_type_value; ?>"><?php echo $s_value->vendor_type_value; ?></option>
                                                            <?php }}} ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="die_cuting_vender_material[]" data-live-search="true">
                                                            <?php if(!empty($get_all_vendor_material)){foreach($get_all_vendor_material as $key=>$s_value){if($s_value->vendor_material_for==2){ ?>
                                                            <option <?php if($value->die_cuting_vender_material==$s_value->vendor_material_value){echo "selected";} ?> value="<?php echo $s_value->vendor_material_value; ?>"><?php echo $s_value->vendor_material_value; ?></option>
                                                            <?php }}} ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-cutting-qty" value="<?php if(!empty($value->die_cuting_qty)){echo $value->die_cuting_qty;} ?>" name="die_cuting_qty[]" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-cutting-size" value="<?php if(!empty($value->die_cuting_size)){echo $value->die_cuting_size;} ?>" placeholder="" step="any" value="" name="die_cuting_size[]" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control die-cutting-unit-price" value="<?php if(!empty($value->die_cuting_unit_price)){echo $value->die_cuting_unit_price;} ?>" name="die_cuting_unit_price[]" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control die-cutting-amount row-amount" placeholder="" step="any" id="diec_amount" name="die_cuting_amount[]" value="<?php if(!empty($value->die_cuting_amount)){echo $value->die_cuting_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_die_cutting" die-cutting-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->die_cuting))+1; ?>" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_die_cutting" die-cutting-row-count="<?php echo $i; ?>" title="Add field"><img src="{{url('images/remove-icon.png')}}"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->pasting) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "pasting-parent";} ?> pasting-row" id="pasting-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Pasting</label>
                                            </td>

                                          <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="pasting_vendor_type[]" data-live-search="true">
                                                            <?php if(!empty($get_all_vendor_type)){foreach($get_all_vendor_type as $key=>$s_value){if($s_value->vendor_type_for==3){ ?>
                                                            <option <?php if($value->pasting_vendor_type==$s_value->vendor_type_value){echo "selected";} ?> value="<?php echo $s_value->vendor_type_value; ?>"><?php echo $s_value->vendor_type_value; ?></option>
                                                            <?php }}} ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="pasting_vendor_material[]" data-live-search="true">

                                                            <?php if(!empty($get_all_vendor_material)){foreach($get_all_vendor_material as $key=>$s_value){if($s_value->vendor_material_for==3){ ?>
                                                            <option <?php if($value->pasting_vendor_material==$s_value->vendor_material_value){echo "selected";} ?> value="<?php echo $s_value->vendor_material_value; ?>"><?php echo $s_value->vendor_material_value; ?></option>
                                                            <?php }}} ?>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control pasting-qty" value="<?php if(!empty($value->pasting_qty)){echo $value->pasting_qty;} ?>" name="pasting_qty[]" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control pasting-size" value="<?php if(!empty($value->pasting_size)){echo $value->pasting_size;} ?>" placeholder="" step="any" value="" name="pasting_size[]" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control pasting-unit-price" value="<?php if(!empty($value->pasting_unit_price)){echo $value->pasting_unit_price;} ?>" name="pasting_unit_price[]" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control pasting-amount row-amount" placeholder="" step="any" id="diec_amount" name="pasting_amount[]" value="<?php if(!empty($value->pasting_amount)){echo $value->pasting_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_pasting" pasting-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->pasting))+1; ?>" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_pasting" pasting-row-count="<?php echo $i; ?>" title="Add field"><img src="{{url('images/remove-icon.png')}}"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->double_pasting) as $key=>$value){ ?>
                                        <tr class="<?php if($i==1){echo "double-pasting-parent";} ?> double-pasting-row" id="double-pasting-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Double Pasting</label>
                                            </td>

                                          <td>
                                                
                                                 <table>
                                                     <tr>
                                                          <td>
                                                              <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="double_pasting_vendor_type[]" data-live-search="true">
                                                            <option <?php if($value->double_pasting_vendor_type=="Inhouse"){echo "selected";} ?> value="Inhouse">Inhouse</option>
                                                            <option <?php if($value->double_pasting_vendor_type=="OutSource"){echo "selected";} ?> value="OutSource">OutSource</option>
                                                             
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                         <td>
                                                             <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="bootstrap-select p_left fm-cmp-mg" style="">
                                                        <select class="selectpicker" name="double_pasting_vendor_material[]" data-live-search="true">
                                                            <option <?php if($value->double_pasting_vendor_material=="samandbond"){echo "selected";} ?> value="samandbond">Samand Bond</option>
                                                            <option <?php if($value->double_pasting_vendor_material=="tape"){echo "selected";} ?> value="tape">Tape</option>
                                                            <option <?php if($value->double_pasting_vendor_material=="elfy"){echo "selected";} ?> value="elfy">Elfy</option>
                                                        </select>
                                                    </div>
                                                 </div>
                                                         </td>
                                                        
                                                     </tr>
                                                 </table>
                                            </td>
                                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control double-pasting-qty" value="<?php if(!empty($value->double_pasting_qty)){echo $value->double_pasting_qty;} ?>" name="double_pasting_qty[]" />
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control double_pasting-size" value="<?php if(!empty($value->double_pasting_size)){echo $value->double_pasting_size;} ?>" placeholder="" step="any" value="" name="double_pasting_size[]" />
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control double-pasting-unit-price" value="<?php if(!empty($value->double_pasting_unit_price)){echo $value->double_pasting_unit_price;} ?>" name="double_pasting_unit_price[]" />
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control double-pasting-amount row-amount" placeholder="" step="any" id="diec_amount" name="double_pasting_amount[]" value="<?php if(!empty($value->double_pasting_amount)){echo $value->double_pasting_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_double_pasting" double-pasting-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->double_pasting))+1; ?>" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="remove_button_double_pasting" double-pasting-row-count="<?php echo $i; ?>" title="Add field"><img src="{{url('images/remove-icon.png')}}"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                          
                                        <?php $i++; } ?>
                                        
                                          <tr class="corrugation-row corrugation-row-parent">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Corrugation</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_vendor)){echo json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_vendor;} ?>" name="corrugation_vendor" />
                                                        
                                                        <label class="nk-label">Corrugation vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_mc_qty">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control corrugation-qty" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_qty)){echo json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_qty;} ?>" name="corrugation_qty" />
                                                        
                              
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="field_wrapper_mc">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control corrugation-size" placeholder="" step="any" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_size)){echo json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_size;} ?>" name="corrugation_size" />
                                                        
                                                        
                              
                                                       
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_mc_unit">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control corrugation-unit-price" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_unit_price)){echo json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_unit_price;} ?>" name="corrugation_unit_price" />
                              
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control corrugation-amount row-amount" placeholder="" step="any" id="corrugation_amount"  name="corrugation_amount" value="<?php if(!empty(json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_amount)){echo json_decode($get_production_form_data_by_id[0]->corrugation)->corrugation_amount;}else{echo "0";} ?>"" readonly />
                                                        <!--<a href="javascript:void(0);" corrugation-row-count="1" style="position: absolute; right: 0; top: 0;" class="add_button_corrugation" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        --><label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>  
                                        <?php $i = 1; foreach(json_decode($get_production_form_data_by_id[0]->mis_cellaneouse) as $key=>$value){ ?>
                                        <tr class="mis-cellaneouse-row <?php if($i==1){echo "mis-cellaneouse-parent";} ?>" id="mis-cellaneouse-row-<?php echo $i; ?>">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">MisCellaneouse</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="<?php if(!empty($value->mis_cellaneouse_vendor)){echo $value->mis_cellaneouse_vendor;} ?>" name="mis_cellaneouse_vendor[]" />
                                                        
                                                        <label class="nk-label">MisCellaneous vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_mc_qty">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control mis-cellaneouse-qty" value="<?php if(!empty($value->mis_cellaneouse_qty)){echo $value->mis_cellaneouse_qty;} ?>" name="mis_cellaneouse_qty[]" />
                                                        
                              
                                                        <label class="nk-label">Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="field_wrapper_mc">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control mis-cellaneouse-size" placeholder="" step="any" value="<?php if(!empty($value->mis_cellaneouse_size)){echo $value->mis_cellaneouse_size;} ?>" name="mis_cellaneouse_size[]" />
                                                        
                                                        
                              
                                                       
                                                        <label class="nk-label">Size</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_mc_unit">
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control mis-cellaneouse-unit-price" value="<?php if(!empty($value->mis_cellaneouse_unit_price)){echo $value->mis_cellaneouse_unit_price;} ?>" name="mis_cellaneouse_unit_price[]" />
                              
                                                        <label class="nk-label">Rate Per Unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control mis-cellaneouse-amount row-amount" placeholder="" step="any" id="mc_amount" name="mis_cellaneouse_amount[]" value="<?php if(!empty($value->mis_cellaneouse_amount)){echo $value->mis_cellaneouse_amount;}else{echo "0";} ?>" readonly />
                                                        <?php if($i==1){ ?>
                                                        <a href="javascript:void(0);" mis-cellaneouse-row-count="<?php echo count((array)json_decode($get_production_form_data_by_id[0]->mis_cellaneouse))+1; ?>" style="position: absolute; right: 0; top: 0;" class="add_button_mc_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <?php }else{ ?>
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" mis-cellaneouse-row-count="<?php echo $i; ?>" class="mc_remove_button" title="Add field"><img src="../images/remove-icon.png"/></a>
                                                        <?php } ?>
                                                        <label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <tr>
                                            <td>
                                                <label class=""><div class="icheckbox_square-green checked" style="position: relative;"><input type="checkbox" <?php if($get_production_form_data_by_id[0]->production_form_status=="on"){echo "checked";} ?> class="i-checks" name="production_form_status" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <i></i> Job Completed</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 mcmc"  >
                                                
                                                <tbody class="emptymc">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td><td></td>
                                            <td>
                                                <div class="text-center">
                                                    <div id="center-btn" class="text-center" style="text-align: center;">

                                                    <div class="form-example-int">
                                        <!-- <button type="button" class="btn btn-success notika-btn-success" onclick="calculator()">Calculate Value</button> -->
                                        <!-- <button type="button" class="btn btn-success notika-btn-success calculate-all-amount">Calculate Value</button> -->
                                    </div>

                                                         
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                             <td></td><td></td>
                                            <td></td>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Total</label>
                                               
                                                <input type="text" class="inputFields form-control calculate-total-amount" value="<?php echo $get_production_form_data_by_id[0]->total_amount; ?>" 
                                                id="total_amount" name="total_amount" readonly />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <input type="hidden" name="production_form_id" value="<?php echo $get_production_form_data_by_id[0]->production_form_id; ?>">
                                        <?php if($get_production_form_data_by_id[0]->production_form_status!="on"){ ?>
                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Update</button>
                                        <?php } ?>
                                    </div>
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
    
 $(document).ready(function() {
 
       $(".plate_class").keyup(function(){
       var size=$("#plate_qty").val();
       
          var data=$('#pm_qty_p_size option:selected').val();
            $('#ajaxspinner').show();
            $.ajax({
         data:{
             'data':data,
             'size':size,
              "_token": "{{ csrf_token() }}",
         },
         url: "{{ url('get-palte-mak-data')}}",
         type:"POST",
        
         
         success:function(data){
             orgPrice = Number(data);
              $('#ajaxspinner').hide();
             $(".set_new_price").attr("value", orgPrice);
             $(".mult").attr("value", orgPrice*size);
             
         },
         error: function (data) {
                console.log('Error:', data);
            }

           });
           
       $('#pm_qty_p_size').change(function(){
           
       var data=$('#pm_qty_p_size option:selected').val();
       var size= $("#plate_qty").val();
       if(size==0){
         alert("please Enter Quantity First and then Select the Size !");
           
       }
       
    else{
         $('#ajaxspinner').show();
      $.ajax({
         data:{
             'data':data,
             'size':size,
              "_token": "{{ csrf_token() }}",
         },
         url: "{{ url('get-palte-mak-data')}}",
         type:"POST",
        
         
         success:function(data){
             orgPrice = Number(data);
              $('#ajaxspinner').hide();
             $(".set_new_price").attr("value", orgPrice);
             $(".mult").attr("value", orgPrice*size);
             
         },
         error: function (data) {
                console.log('Error:', data);
            }

           }); 
           }
         });
       });
          
    
    });
    
    
</script>

 



