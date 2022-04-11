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
                  @if(Session::has('EditProduction'))
            
                <center>
                <div  class='alert alert-success'> {{ Session::get('EditProduction') }}</div>
                </center>
            
                  @endif
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update-production-form'.'/'.$value[0]->id)}}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <?php
      if (!empty($value[0]->images)) {?>
<?php foreach(json_decode($value[0]->images) as $imagegallery){ ?>
  <input type="hidden" name="oldgallery[]" value="<?php echo $imagegallery;?>">
<?php }} ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Edit Production Form</h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="job" value="{{$value[0]->job}}"  required/>
                                    <label class="nk-label">Job ID *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="date" value="<?php echo $value[0]->date ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                   
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control"  name="item"  value="{{$value[0]->item}}" required />
                                    <label class="nk-label">Item *</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="row field_wrapper1" style="margin-bottom:30px;" >
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group ic-cmp-int float-lb form-elet-mg">
                                <div class="form-ic-cmp">
                                </div>
                                    <div class="field_wrapper">
                                    <div class="nk-int-st">
                                      <?php
                                            $values = json_decode($value[0]->qty1); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                    <input type="text" class="form-control" name="qty[]" value="{{$values}}" required />
                                        <?php } }
                                               ?>
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
                                         <?php
                                            $values = json_decode($value[0]->printing1); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                    <input type="text" class="form-control" name="printing[]" value="{{$values}}"  required />
                                    <?php } } ?>
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
                                    <?php
                                            $values = json_decode($value[0]->sheet_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                    <input type="text" class="form-control" name="sheet_size[]" value="{{$values}}"  required />
                                    <?php } } ?>
                                    <label class="nk-label">Sheet Size *</label>
                                     <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    
                       <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Production Unit</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="p_unit" data-live-search="true">
                                    <option <?php if($value[0]->p_unit=='usa'){echo "selected";} ?> value="usa" >USA</option>
                                     <option <?php if($value[0]->p_unit=='usaoutsource'){echo "selected";} ?> value="usaoutsource" >USA OutSource</option>
                                    <option <?php if($value[0]->p_unit=='pakistan'){echo "selected";} ?> value="pakistan" >Pakistan</option>
                                    <option <?php if($value[0]->p_unit=='pakoutsource'){echo "selected";} ?> value="pakoutsource" >Pakistan OutSource</option>
                                   
                                </select>
                            </div>
                        </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Currency</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker"  name="currency" data-live-search="true">
                                    
                                    <option <?php if($value[0]->currency=='rupees'){echo "selected";} ?> value="rupees" >Pakistan Rupees</option>
                                    <option <?php if($value[0]->currency=='dollar'){echo "selected";} ?> value="dollar" >USA Dollar</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 10px;">
                                <h2>Website</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker"  name="website" data-live-search="true">
                                      <option value="TheCustomboxes.com">www.thecustomboxes.com</option>
                                    @foreach($website as $index)
                                    <option value="{{$index->website}}"  <?php if($index->website == $value[0]->website){echo "selected";} ?> >
                                        {{$index->website}}
                                    </option>
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
                                    <textarea id="w3review" name="planning"  style="width:100%"  row="5">{{$value[0]->planning}} </textarea>
                                    
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
                                <i class="fa fa-upload fa-7x"></i><span class="icon-shadow"></span><span>Upload Additional Document </span>
                            </p>
                        </div>
                        <p class="file-name" id="js-file-name">No file selected</p>
                    </div>
                </div>
                <div class="text-center">
                    <?php 
                $images = json_decode($value[0]->images); 
        if(!empty($images)){  foreach ($images as $images) {?>
        <img style="height:80px; width:80px;border-radius: 50%;" src="{{url('images/'.$images)}}"/> 
        <a href="{{url('del_galery_image/'.$images.'/'.$value[0]->id)}}">
                        
                        <button type="button" class="btn btn-danger" >Delete</button>
                      </a>
           <?php } }
?>
                </div>
            </div>
        </div>
        
        
        

            <div class="dropzone-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="Table-view">
                                <table class="table table-striped my-sm-5">
                                        <thead class="">
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
                                                 P.Uint
                                            </th>
                                                <th class="my-sm-5" style="background-color: #393b3c;color: white; text-align:center !important;">
                                                AMOUNT
                                            </th>
                                        </tr>
                                    </thead>
                                   <tbody class="my-sm-5">
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Digintal print</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->dp_vendor}}" name="dp_vendor" />
                                                        <label class="nk-label">Digintal print Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                
                                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->dp_qty}}" name="dp_qty" />
                                                        <label class="nk-label">Digintal print Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->digitial_print_qty_p_size}}" name="dp_qty_p_size" />
                                                        <label class="nk-label">Digintal print Size</label>
                                                    </div>
                                                </div>
                                            </td>
 <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->dp_unit}}" name="dp_unit" />
                                                        <label class="nk-label">Digintal print P.uint</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" id="dp_amount" value="{{$value[0]->digitial_print_amount}}" name="dp_amount" />
                                                        <label class="nk-label">Digintal print amount</label>
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
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any"  value="{{$value[0]->scanning_vendor}}" name="scanning_vendor" />
                                                        <label class="nk-label">Scaning Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->scanning_qty}}" name="scanning_qty" />
                                                        <label class="nk-label">Scanning Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->scanning_qty_p_size}}"  name="scanning_qty_p_size" />
                                                        <label class="nk-label">Scaning Size</label>
                                                    </div>
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="scanning_unit" value="{{$value[0]->scanning_unit}}"  />
                                                        <label class="nk-label">Scanning P.uint</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" value="{{$value[0]->scanning_amount}}"  step="any"  id="scanning_amount" name="scanning_amount" />
                                                        <label class="nk-label">Scaning Amount</label>
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
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->pm_vendor}}" name="pm_vendor" />
                                                        <label class="nk-label">Plate Making Vendor</label>
                                                    </div>
                                                </div>
                                            </td>

                                               <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="pm_qty" value="{{$value[0]->pm_qty}}" />
                                                        <label class="nk-label">Plate Making Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->plate_making_qty_p_size}}"  name="pm_qty_p_size" />
                                                        <label class="nk-label">Plate Making Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="pm_unit" value="{{$value[0]->pm_unit}}" />
                                                        <label class="nk-label">Plate Making P.uint</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                     
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->plate_making_amount}}" id="pm_amount" name="pm_amount" />
                                                        <label class="nk-label">Plate Making Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Stock/gsm</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->stock_gsm_vendor}}"  name="stock_gsm_vendor" />
                                                        <label class="nk-label">Stock/gsm Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
 
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_qty">
                                                    <div class="nk-int-st">
                                                        
                                                         <?php
                                            $values = json_decode($value[0]->stock_gsm_qty); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                            
                                                        <input type="text" class="form-control" value="{{$values}}" name="stock_gsm_qty[]" />
                                                        
                                                          <?php } }
                                               ?>
                                                        
                              
                                                       
                                                        <label class="nk-label">Stock/gsm Quantity</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    
                                                      <div class="field_wrapper_stock">
                                       
                                                    <div class="nk-int-st">
                                                        
                                                        <?php
                                            $values = json_decode($value[0]->stock_gsm_qty_p_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" placeholder="" value="{{$values}}" step="any"  name="stock_gsm_qty_p_size[]" />
                                                        <?php } }
                                               ?>
                                                       
                              
                                                        <label class="nk-label">Stock Size</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_unit">
                                                    <div class="nk-int-st">
                                                        <?php
                                            $values = json_decode($value[0]->stock_unit); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control"  value="{{$values}}" name="stock_unit[]" />
                                                        <?php } }
                                               ?>
                                                        
                                                         <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                              
                                                       
                                                        <label class="nk-label">Stock P.unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" value="{{$value[0]->stock_gsm_amount}}"  step="any" value="" id="stock_gsm_amount" name="stock_gsm_amount" />
                                                        <label class="nk-label">Stock/gsm amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->printing_vendor}}"  name="printing_vendor" />
                                                        <label class="nk-label">Outsource Printing Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="printing_qty" value="{{$value[0]->printing_qty}}" />
                                                        <label class="nk-label">Outsource Printing Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->printing_qty_p_size}}" name="printing_qty_p_size" />
                                                        <label class="nk-label">Printing Size </label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="printing_unit"  value="{{$value[0]->printing_unit}}"/>
                                                        <label class="nk-label">Printing P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->printing_amount}}"  id="printing_amount" name="printing_amount" />
                                                        <label class="nk-label">Printing amount </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Lam Mat/ Shine</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->lms_vendor}}"  name="lms_vendor" />
                                                        <label class="nk-label">Lam Mat/ Shine Vendor </label>
                                                    </div>
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="lms_qty" value="{{$value[0]->lms_qty}}" />
                                                        <label class="nk-label">Lam Mat/Shine Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->lam_matt_shine_qty_p_size}}"  name="lms_qty_p_size" />
                                                        <label class="nk-label">Lam Mat Size</label>
                                                    </div>
                                                </div>
                                            </td>
         <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="lms_unit" value="{{$value[0]->lms_unit}}" />
                                                        <label class="nk-label">Lam Mat P.uint</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->lam_matt_shine_amount}}"  id="lms_amount" name="lms_amount" />
                                                        <label class="nk-label">Lam Mat/ Shine Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">spot u.v</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->spotuv_vendor}}"  name="spotuv_vendor" />
                                                        <label class="nk-label">Spot U.V Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
 <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="spotuv_qty" value="{{$value[0]->spotuv_qty}}"/>
                                                        <label class="nk-label">Spot U.V Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->spot_u_v_shine_qty_p_size}}"  name="spotuv_qty_p_size" />
                                                        <label class="nk-label">Spot U.V Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="spotuv_unit" value="{{$value[0]->spotuv_unit}}" />
                                                        <label class="nk-label">Spot U.v P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                         
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->spot_u_v_amount}}" id="spotuv_amount" name="spotuv_amount" />
                                                        <label class="nk-label">Spot U.V Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Block Making</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    
                                                    </div>
                                                    <div class="nk-int-st">
                                                        
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->bm_vendor}}"  name="bm_vendor" />
                                                        <label class="nk-label">Block Makin Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                     <div class="bm_qty">
                                                    <div class="nk-int-st">
                                                        <?php
                                            $values = json_decode($value[0]->bm_qty); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" name="bm_qty[]"  value="{{$values}}"/>
                                                         
                                      <?php } }
                                               ?> 
                                                        <label class="nk-label">Block Making Quantity</label>
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
                                                         <?php
                                                        $values = json_decode($value[0]->block_making_qty_p_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$values}}" name="bm_qty_p_size[]" />
                                                        <?php } }
                                               ?> 
                                                        
                              
                                                       
                                                        <label class="nk-label">Block Making Size</label>
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
                                                        
                                                        <?php
                                                        $values = json_decode($value[0]->bm_unit); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" name="bm_unit[]"  value="{{$values}}"/>
                                                        
                                                                <?php } }
                                               ?> 
                              
                                                        <label class="nk-label">Block Making P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->block_making_amount}}" id="bm_amount" name="bm_amount" />
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_bm_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        <label class="nk-label">Block Makin Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 fffff"  >
                                                
                                                <tbody class="emptyf">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>

                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Embossing/Debossing</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                               
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->embossiong_vendor}}"  name="embossiong_vendor" />
                                                        <label class="nk-label">Embossing Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                             <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_embossing_qty">
                                                    <div class="nk-int-st">
                                                              
                                                        <?php
                                                        $values = json_decode($value[0]->embossing_qty); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                             <input type="text" class="form-control" name="embossing_qty[]" value="{{$values}}"/>
                                                  
                                                        
                                                                <?php } }
                                               ?> 
                                                        
                                                       
                                                        
                                                        <label class="nk-label">Embossing Quantity</label>
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
                                                        
                                                                   
                                                        <?php
                                                        $values = json_decode($value[0]->embossing_qty_p_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$values}}" name="embossing_qty_p_size[]" />
                                                                         <?php } }
                                                                         ?> 
                                                       
                              
                                                        <label class="nk-label">Embossing Size</label>
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
                                                                     
                                                        <?php
                                                        $values = json_decode($value[0]->embossing_unit); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" value="{{$values}}" name="embossing_unit[]" />
                                                        
                                                        <?php } }
                                                        ?> 
                                                                         
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_emb_punit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                       
                                                        <label class="nk-label">Embossing P.unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->embossing_amount}}"  id="embossing_amount" name="embossing_amount" />
                                                        <label class="nk-label">Embossing Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                         <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 eeeee"  >
                                                
                                                <tbody class="emptye">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Folling</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->folling_vendor}}"  name="folling_vendor" />
                                                        <label class="nk-label">Folling Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
 <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="folling_qty"  value="{{$value[0]->folling_qty}}"/>
                                                        <label class="nk-label">Folling Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->foiling_qty_p_size}}" name="folling_qty_p_size" />
                                                        <label class="nk-label">Folling Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" name="folling_unit"  value="{{$value[0]->folling_unit}}"/>
                                                        <label class="nk-label">Folling P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->foiling_amount}}"  id="folling_amount" name="folling_amount" />
                                                        <label class="nk-label">Folling Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Die making</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                    
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->diem_vendor}}"  name="diem_vendor" />
                                                        <label class="nk-label">Die Making Vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="field_wrapper_diem_qty"> 
                                                    <div class="nk-int-st">
                                                        
                                                        
                                                         <?php
                                                        $values = json_decode($value[0]->diem_qty); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        
                                                         <input type="text" class="form-control" value="{{$values}}"  name="diem_qty[]" />
                                                        <?php } }
                                                        ?> 
                                                        
                                                        
                                                        
                                                       
                                                        
                              
                                                        <label class="nk-label">Die Making Quantity</label>
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
                                                         <?php
                                                        $values = json_decode($value[0]->die_making_qty_p_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$values}}" name="diem_qty_p_size[]" />
                                                       
                                                            <?php } }
                                                        ?> 
                                                        
                                                        
                              
                                                        <label class="nk-label">Die Making Size</label>
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
                                                        
                                                         <?php
                                                        $values = json_decode($value[0]->diem_unit); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" value="{{$values}}"  name="diem_unit[]" />
                                                       <?php } }
                                                        ?> 
                                                       
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_diem_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                              
                                                        <label class="nk-label">Die Making P.unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->die_making_amount}}" id="diem_amount" name="diem_amount" />
                                                        <label class="nk-label">Die Making Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" align="center" >
                                                  <table class="table table-striped my-sm-5 ddddd"  >
                                                
                                                <tbody class="emptyd">
                                                   
                                                </tbody>
                                            </table>
                                            </td>
                                       
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Die cutting</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any"  value="{{$value[0]->diec_vendor}}"  name="diec_vendor" />
                                                        <label class="nk-label">Die Cutting vendor</label>
                                                    </div>
                                                </div>
                                            </td>
                                              <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control"  value="{{$value[0]->diec_qty}}"  name="diec_qty" />
                                                        <label class="nk-label">Die Cutting Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->die_cutting_qty_p_size}}" name="diec_qty_p_size" />
                                                        <label class="nk-label">Die Cutting Size</label>
                                                    </div>
                                                </div>
                                            </td>
<td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->diec_unit}}" name="diec_unit" />
                                                        <label class="nk-label">Die Cutting P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->die_cutting_amount}}"  id="diec_amount" name="diec_amount" />
                                                        <label class="nk-label">Die Cutting amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">pasting</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->pasting_vendor}}" name="pasting_vendor" />
                                                        <label class="nk-label">pasting vendor</label>
                                                    </div>
                                                </div>
                                            </td>
     <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->pasting_qty}}" name="pasting_qty" />
                                                        <label class="nk-label">Pasting Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->pasting_qty_p_size}}" name="pasting_qty_p_size" />
                                                        <label class="nk-label">Pasting Size</label>
                                                    </div>
                                                </div>
                                            </td>
 <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control"  value="{{$value[0]->pasting_unit}}" name="pasting_unit" />
                                                        <label class="nk-label">Pasting P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any"  value="{{$value[0]->pasting_amount}}"  id="pasting_amount" name="pasting_amount" />
                                                        <label class="nk-label">pasting Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        
                                           <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Double Pasting</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any"  value="{{$value[0]->double_pasting_vendor}}" name="double_pasting_vendor" />
                                                        <label class="nk-label">Double pasting vendor</label>
                                                    </div>
                                                </div>
                                            </td>
     <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control"  value="{{$value[0]->double_pasting_qty}}" name="double_pasting_qty" />
                                                        <label class="nk-label">Double Pasting Quantity</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->double_pasting_size}}"  name="double_pasting_size" />
                                                        <label class="nk-label">Double Pasting Size</label>
                                                    </div>
                                                </div>
                                            </td>
 <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" value="{{$value[0]->double_pasting_unit}}" name="double_pasting_unit" />
                                                        <label class="nk-label">Double Pasting P.unit</label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                      
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->pasting_amount}}" id="double_pasting_amount" name="pasting_amount" />
                                                        <label class="nk-label">Double Pasting Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                              <tr class="corrugation-row corrugation-row-parent">
                                            <td>
                                                <label for="username" class="mb-0 m-lable">Corrugation</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->corrugation_vendor}}" name="corrugation_vendor[]" />
                                                        
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
                                                        <input type="text" class="form-control corrugation-qty" value="{{$value[0]->corrugation_qty}}" name="corrugation_qty[]" />
                                                        
                              
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
                                                        <input type="text" class="form-control corrugation-size" placeholder="" step="any" value="{{$value[0]->corrugation_size}}" name="corrugation_size[]" />
                                                        
                                                        
                              
                                                       
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
                                                        <input type="text" class="form-control corrugation-unit-price" value="{{$value[0]->corrugation_unit_price}}" name="corrugation_unit_price[]" />
                              
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
                                                        <input type="number" class="form-control corrugation-amount row-amount" placeholder="" step="any" id="corrugation_amount" name="corrugation_amount[]" value="0" readonly />
                                                        <!--<a href="javascript:void(0);" corrugation-row-count="1" style="position: absolute; right: 0; top: 0;" class="add_button_corrugation" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                                                        --><label class="nk-label">Amount</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="username" class="mb-0 m-lable">MisCellaneouse</label>
                                            </td>

                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                        
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="text" class="form-control" placeholder="" step="any" value="{{$value[0]->mc_vendor}}" name="mc_vendor" />
                                                        
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
                                                        
                                                           <?php
                                                        $values = json_decode($value[0]->mc_qty); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" value="{{$values}}"  name="mc_qty[]" />
                                                       <?php } }
                                                        ?> 
                                                        
                                                        
                                                
                                                        
                              
                                                        <label class="nk-label">Miscellaneous Quantity</label>
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
                                                        
                                                         <?php
                                                        $values = json_decode($value[0]->miscelianeous_qty_p_size); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" value="{{$values}}"  name="mc_qty_p_size[]" />
                                                       <?php } }
                                                        ?> 
                                                        
                                                        
                                                      
                                                        
                                                        
                              
                                                       
                                                        <label class="nk-label">MisCellaneous Size</label>
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
                                                        
                                                        <?php
                                                        $values = json_decode($value[0]->mc_unit); 
                                            if(!empty($values)){  foreach ($values as $values) {?>
                                                        <input type="text" class="form-control" value="{{$values}}"  name="mc_unit[]" />
                                                       <?php } }
                                                        ?> 
                                                        
                                                        
                                                       
                                                        <a href="javascript:void(0);" style="position: absolute; right: 0; top: 0;" class="add_button_mc_unit" title="Add field"><img src="{{url('images/add-icon.png')}}"/></a>
                              
                                                        <label class="nk-label">MisCellaneous P.unit</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group ic-cmp-int float-lb floating-lb">
                                                    <div class="form-ic-cmp">
                                                       
                                                    </div>
                                                    <div class="nk-int-st">
                                                        <input type="number" class="form-control" placeholder="" step="any" value="{{$value[0]->miscelianeous_amount}}"  id="mc_amount" name="mc_amount" />
                                                        <label class="nk-label">MisCellaneous Amount</label>
                                                    </div>
                                                </div>
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
                                        <button type="button" class="btn btn-success notika-btn-success" onclick="calculator()">Calculate Value</button>
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
                                               
                                                <input type="text" class="inputFields form-control" value="{{$value[0]->total_amount}}"
                                                id="total_amount" name="total_amount" readonly />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

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
    </div>

</form>

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
                        parseFloat(mc_amount);

                    if (!isNaN(result)) {
                        document.getElementById("total_amount").value = result;
                    }
                }
            </script>
    @include('footer')
   
