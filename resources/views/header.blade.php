<!doctype html>
<html class="no-js" lang="">
<style>
    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgb(230 255 216);
}
.loading-view {
  position: fixed;
  z-index: 9999999; /* High z-index so it is on top of the page */
  top: 50%;pr
  right: 50%; /* or: left: 50%; */
  left:50%;
  transform: translate(-50%, -50%);

}  

 
</style>

<link rel="stylesheet" href="{{URL::asset('admin/plugins/jqvmap/jqvmap.min.css')}}">


<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | TCB Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!-- font awesome CSS
		============================================ -->


    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/summernote/summernote.css')}}">
    <!-- Range Slider CSS
		============================================ -->
     <link rel="stylesheet" href="{{URL::asset('css/themesaller-forms.css')}}">
     <!-- Sweet Alert CSS
		============================================ -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />




    <!-- Notika icon CSS
    
    
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/notika-custom-icon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-select/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/datapicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/chosen/chosen.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/dropzone/dropzone.css')}}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/wave/waves.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/wave/button.css')}}">
    
    
      <link rel="stylesheet" href="{{URL::asset('mobile/demo.css')}}">
      
    <link rel="stylesheet" href="{{URL::asset('mobile/intlTelInput.css')}}">
      
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('style.css')}}">
    <!-- responsive CS
		============================================ -->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">

    <!-- modernizr JS
		============================================ -->
    <script src="{{URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body >
    <div class="loading-view" id="" style="">
             
                    <i id="ajaxspinner" class="fa fa-spinner fa-spin fa-5x fa-fw" style="display:none"></i> 
                 
                 
             
          </div>
    
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="logo-area">
                        <a href="{{url('dashboard')}}"><img src="{{url('images/logo.jpeg')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                     
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span>
                                <i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2 class="text-uppercase"><?php echo Session::get('user_name_login'); ?></h2>
                                    </div>
                                   
                                    <div class="hd-message-info">
                                        <a href="{{url('change-password')}}">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="{{url('images/changepassword.png')}}" alt="" />
                                                <div class="chat-avaible"> </div>
                                            </div>
                                            <div class="hd-mg-ctn mt-16">
                                                <h3>Change Password</h3>
                                                
                                            </div>
                                        </div>
                                        </a>
                                        <a href="{{url('destroy')}}">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                 <img src="{{url('images/logout.png')}}" alt="" />
                                                    <div class="chat-avaible"> </div>
                                                </div>
                                                <div class="hd-mg-ctn mt-16">
                                                    <h3>Logout</h3>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#" href="">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Users</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                      <li><a href="google-map.html">Google Map</a></li>
                                       <li><a href="google-map.html">Google Map</a></li>
                                     
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Production Form</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="{{url('production-form')}}">Add Production Form</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <?php if(!Session::get('desgniation')=='sm'){ ?>
                        <li class="<?php if(Request::segment(1)=="dashboard"){echo "active";} ?>" >
                    <a   href="{{url('dashboard')}}">
                        <i class="notika-icon notika-house"></i> Home <?php echo Session::get('user_name'); ?></a>
                        </li>
                        <?php } ?>

                         <?php
                         if(Session::get('user_department')=='production' || Session::get('user_name_login')=='admin'){?>       
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Production Form</a>
                        </li>
                           
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Reporting System </a>
                        </li>
                         <?php } ?>
                        
                          <?php
                         if(Session::get('user_name_login')=='admin'){?>  
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-support"></i> Users</a>
                        </li>
                        <li><a data-toggle="tab" href="#Website"><i class="notika-icon notika-edit"></i> Website</a>
                        </li>
                         <?php } ?>
                         <?php
                         if(Session::get('user_department')=='sale' || Session::get('user_name_login')=='admin'){?>     
                         <li><a data-toggle="tab" href="#sales"><i class="notika-icon notika-edit"></i> Sales Enquiry System</a>
                        </li>
                         <?php } ?>
                         <?php
                         if( Session::get('desgniation')=='tl'){?>    
                      
                              <div style="text-align: right;">
                                <a target="_blank" href="{{url('tl-csr-inquiries')}}"> <button target="_blank" class="custom-btn_hov btn-12 button_hov"><span>Click</span><span>Tl Csr Data</span></button> </a>
                            </div>
                        
                        
                            <?php } ?>
                         <?php
                                             
                        if(Session::get('user_department')=='shipping' || Session::get('user_name_login')=='admin'){?>       
                        
                        <li><a data-toggle="tab" href="#Shipping"><i class="notika-icon notika-edit"></i>Shipping</a>  
                        </li>
                        <?php } ?>   
                      
                        
                      
                       <?php
                                
                       if(Session::get('desgniation')=='sm' ){?>       
                        
                            
                     <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Select TL's + CSR</a>
                        </li>
                        <?php } ?> 
                        
                 
                        
                          
                            <?php
                         if(Session::get('user_name_login')=='admin'){?>  
                        <li><a data-toggle="tab" href="#add_ips"><i class="notika-icon notika-support"></i> Add IP's Address</a>
                        </li>
                         
                         <?php } ?>
                         
                         
                           
                      
                      
                      
                            <?php
                         if(Session::get('user_name_login')=='admin' || Session::get('user_department')=='est' ){?>  
                        <li><a data-toggle="tab" href="#est"><i class="notika-icon notika-support"></i> Show New Est Inquires </a>
                        </li>
                         
                         <?php } ?>
                         
                         
                             <?php
                         if(Session::get('user_name_login')=='admin' || Session::get('desgniation')=='sm' ){?>  
                        <li><a data-toggle="tab" href="#final"><i class="notika-icon notika-support"></i>Pending Prices</a>
                        </li>
                         
                         <?php } ?>

                         <?php
                         if(Session::get('desgniation')=='sm' ){?>  
                        <li><a data-toggle="tab" href="#urgent-price-request"><i class="notika-icon notika-support"></i>Urgent Price Request</a>
                        </li>
                         
                         <?php } ?>

                         <?php
                         if(Session::get('user_name_login')=='admin' ){?>  
                        <li><a data-toggle="tab" href="#product-size"><i class="notika-icon notika-support"></i>Product Sizes</a>
                        </li>
                         <?php } ?>

                        <?php
                         if(Session::get('user_name_login')=='admin'){?>  
                        <li><a data-toggle="tab" href="#stock-type"><i class="notika-icon notika-support"></i>Stock Type</a></li>
                        <li><a data-toggle="tab" href="#stock-gsm"><i class="notika-icon notika-support"></i>Stock GSM</a></li>
                        <li><a data-toggle="tab" href="#stock-size"><i class="notika-icon notika-support"></i>Stock Size</a></li>
                        <li><a data-toggle="tab" href="#vendor-type"><i class="notika-icon notika-support"></i>Vendor Type</a></li>
                        <li><a data-toggle="tab" href="#vendor-material"><i class="notika-icon notika-support"></i>Vendor Material</a></li>
                         
                        <?php } ?>
                        
                         
                        <?php if(Session::get('user_name_login')=='admin'){?>  
                        <li><a data-toggle="tab" href="#Filters"><i class="notika-icon notika-support"></i>Filters</a>
                        </li>
                         
                         <?php } ?>
                         <li><a data-toggle="tab" href="#History"><i class="notika-icon notika-support"></i>History</a>
                        </li>
                         
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="History" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('customer-quote-history')}}">Customer Quote History</a></li>
                            </ul>
                        </div>
                        <div id="urgent-price-request" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('show-all-urgent-price-request')}}">Show All Price Request</a></li>
                            </ul>
                        </div>
                        <div id="vendor-type" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-vendor-type')}}">Add New Vendor Type</a></li>
                                <li><a href="{{url('show-all-vendor-type')}}">Show All Vendor Type</a></li>
                            </ul>
                        </div>
                        <div id="vendor-material" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-vendor-material')}}">Add New Vendor Material</a></li>
                                <li><a href="{{url('show-all-vendor-material')}}">Show All Vendor Material</a></li>
                            </ul>
                        </div>
                        <div id="stock-type" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-stock-type')}}">Add New Stock Type</a></li>
                                <li><a href="{{url('show-all-stock-type')}}">Show All Stock Type</a></li>
                            </ul>
                        </div>
                        <div id="stock-gsm" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-stock-gsm')}}">Add New Stock GSM</a></li>
                                <li><a href="{{url('show-all-stock-gsm')}}">Show All Stock GSM</a></li>
                            </ul>
                        </div>
                        <div id="stock-size" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-stock-size')}}">Add New Stock Size</a></li>
                                <li><a href="{{url('show-all-stock-size')}}">Show All Stock Size</a></li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('show-all-reports')}}">Show All Reports</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('users-form')}}">Add Users</a>
                                <li><a href="{{url('show-users-form')}}">Show Users</a></li>
                                </li>
                               
                                </li>
                            </ul>
                        </div>
                        <div id="Filters" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('est-inquirie-filter')}}">EST Inquirie Filter</a></li>
                                <li><a href="{{url('sales-inquirie-filter')}}">Sales Inquirie Filter</a></li>
                                <li><a href="{{url('production-inquirie-filter')}}">Production Inquirie Filter</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Website" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('website-form')}}">Add Website</a>
                                <li><a href="{{url('show-website-form')}}">Show Websites</a></li>
                                </li>
                               
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('update-data')}}">Update TL's+CSR</a>
                                </li>
                             
                            </ul>
                        </div>
                           <div id="add_ips" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('Ips-address')}}">Add Ip's</a>
                                </li>
                             
                            </ul>
                        </div>
                        
                        
                        <div id="est" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('get_est')}}">EST Inquires </a>
                                </li>
                             
                            </ul>
                        </div>
                        
                        
                        
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                               
                                <li><a href="{{url('production-form')}}">Add Production Form</a>
                                </li>
                                
                                <li><a href="{{url('show-production-form')}}">Show Production Form</a>
                                </li>
                            </ul>
                        </div>
                        <div id="sales" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('sales-enquiry')}}">Add  Enquiry</a>
                                </li>
                                
                                <?php   if(Session::get('user_name_login')=='admin') { ?>
                                 <li><a href="{{url('show-sales-enquiry')}}">Show all Enquiry</a>
                               <?php }  ?>
                   
                                </li>
                            </ul>
                        </div>
                        
                          
                                         
                        <div id="Shipping" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('shipping-form')}}">Add Shipping</a>
                                <li><a href="{{url('show-shipping-form')}}">Show Shipping</a></li>
                                </li>
                               
                                </li>
                            </ul>
                        </div>
                          
                             <div id="final" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('final-aproval')}}">Pending Prices </a>  </li>
                               
                                </li>
                            </ul>
                        </div>

                        <div id="product-size" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{url('add-new-product-size-for-plate-making')}}">Add New</a></li>
                                <li><a href="{{url('product-size-for-plate-making')}}">Product Size for Plate Making </a>  </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Contact</a>
                                </li>
                                <li><a href="invoice.html">Invoice</a>
                                </li>
                                <li><a href="typography.html">Typography</a>
                                </li>
                                <li><a href="color.html">Color</a>
                                </li>
                                <li><a href="login-register.html">Login Register</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>