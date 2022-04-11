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

                    @if(Session::has('UserUpdate'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('UserUpdate') }}</div>
                    </center>
                    
                    @endif
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update-user-form'.'/'.$value[0]->user_id)}}" enctype="multipart/form-data"
>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">Edit User </h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="user_name" value="{{$value[0]->user_name}}"  required/>
                                    <label class="nk-label">Name *</label>
                                </div>
                            </div>
                        </div>
                      
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="user_email" value="{{$value[0]->user_email}}" required/>
                                    <label class="nk-label">Email *</label>
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="password" class="form-control" name="user_password"   required/>
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
                                    <option <?php if($value[0]->user_department=='production'){echo "selected";} ?> value="production" >Production Department</option>
                                    <option <?php if($value[0]->user_department=='sale'){echo "selected";} ?> value="sale" >Sales Department</option>
                                    <option <?php if($value[0]->user_department=='shipping'){echo "selected";} ?> value="shipping" >Shipping Department</option>
                                       <option <?php if($value[0]->user_department=='est'){echo "selected";} ?> value="est" >Estimation Department</option>
                                  
                                    
                                
                                    </select>
                            </div>
                        </div>
                        
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 47px;">
                              
                            </div>
                           
                                 
                                 <?php if($value[0]->user_department=='sale'){ ?>
                                  <div class="sales box colors" id="sale">
                            <select class="selectpicker" name="desgniation" data-live-search="true">
                            <option>Choose Option</option>
                            <option value="sm" <?php if($value[0]->desgniation=='sm'){echo "selected";} ?>>Sales Manager</option>
                            <option value="tl" <?php if($value[0]->desgniation=='tl'){echo "selected";} ?>>Team Leader</option>
                            <option value="csr" <?php if($value[0]->desgniation=='csr'){echo "selected";} ?>>CSR</option>
                        </select>
                    </div>
                                 
                                <?php } ?>
                                                   
                
                                   
                         
                        </div>
                    </div>
                    
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <button type="submit" name="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Save</button>
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
    $(function() {
  $('#colorselector').change(function(){
    $('.colors').hide();
    $('#' + $(this).val()).show();
  });
});
</script>

</div>
