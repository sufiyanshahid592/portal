<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('get-die-making-row', "Admin@get_die_making_row");
Route::post('get-die-cutting-row', "Admin@get_die_cutting_row");
Route::post('get-pasting-row', "Admin@get_pasting_row");
Route::get('dashboard', 'Admin@Dashboard');
Route::get('/', 'AdminLoginController@view');
Route::post('admin/checked-login', 'AdminLoginController@dashboardlogin');
Route::get('users-form','Admin@user_add_form');
Route::get('website-form','Admin@website_add_form');
Route::get('shipping-form','Shipping@shipping_add_form');
Route::post('job-search','Admin@job_search');
Route::get('update-data','Admin@update_data');

Route::get('get-tl-csr', "Admin@get_tl_csr");
Route::get('get-tl-csr-boxes', "Admin@get_tl_csr_boxes");

Route::get("your-tl-inquiries", "Admin@your_tl_inquiries");
Route::get("your-csr-inquiries", "Admin@your_csr_inquiries");
Route::get("tl-csr-inquiries", "Admin@tl_csr_inquiries");

Route::get("est-inquirie-filter", "Filter_Controller@est_inquirie_filter");
Route::get("sales-inquirie-filter", "Filter_Controller@sales_inquirie_filter");
Route::get("production-inquirie-filter", "Filter_Controller@production_inquirie_filter");
Route::post("production-inquirie-filter-get-data","Filter_Controller@production_inquirie_filter_get_data");
Route::post("production-inquirie-filter-by-id",'Filter_Controller@production_inquirie_filter_by_id');
Route::post("production-inquirie-filter-get-data-website",'Filter_Controller@production_inquirie_filter_get_data_website');


Route::post('date-search','Admin@date_search');
Route::post('upload_csv','Shipping@upload_csv');

Route::get('Ips-address','Admin@add_Ips');

Route::post('add_ip_address','Admin@add_ip_address');

Route::post('view-email-doc', "Admin@view_email_page");

Route::get('show-all-ip','Admin@show_all_ip');

Route::get('delete_ip/{id}','Admin@delete_ip');
Route::post('website-search','Admin@website_search');


Route::get('sales-enquiry','Admin@sales_enquiry');

Route::post('add_sales_enquiry','Admin@add_sales_enquiry');
Route::post('emp_list','Admin@ss_processing');

Route::post('stock-type-gsm-size', 'Admin@stock_type_gsm_size');
Route::get("show-all-urgent-price-request", "Admin@show_all_urgent_price_request");
Route::get('show-sales-enquiry','Admin@show_sales_enquiry');
Route::post('update-est-form','Admin@update_est_form');
Route::get('final-aproval','Admin@final_aproval');
Route::get('own-sales-enquiry','Admin@own_sales_enquiry');
Route::post('submit-urgent-price-request', "Admin@submit_urgent_price_request");
Route::get('delete_enquiry/{id}','Admin@delete_enquiry');


Route::get('final-aproval-inq/{id}','Admin@final_aproval_inq');

Route::post('price_offerd_by_sales_manager_status_update','Admin@price_offerd_by_sales_manager_status_update');

Route::get('view-inquiry/{id}','Admin@view_inquiry');

Route::get('edit-inquiry/{id}','Admin@edit_inquiry');

Route::get('delete-shipping-data/{id}','Shipping@delete_shipping_data');

Route::get('edit-shipping-form/{id}','Shipping@edit_shipping_form');
Route::post('update_shipping_data','Shipping@update_shipping_data');

Route::get('view-shipping-data/{id}','Shipping@view_shipping_data');

Route::get('del_shipping_galery_image/{name}/{id}','Shipping@del_shipping_galery_image');

Route::post('update_sales_enquiry','Admin@update_sales_enquiry');
Route::post('update_tl_csr','Admin@update_tl_csr');

Route::post('update-sales-enquiry-modal', 'Admin@update_sales_enquiry_modal');


Route::get('proceed-inquiry/{id}','Admin@proceed_inquiry');

Route::post('urgent-price-request', 'Admin@urgent_price_request');

// time increase
Route::get('time-increase/{id}', 'Admin@updateTime');
Route::get('time-increase-csr/{id}', 'Admin@updateTimeCSR');
Route::get('time-increase-sm/{id}', 'Admin@updateTimeSM');
Route::post('admin/time-update/{id}', 'Admin@updateTimeAdmin');
// time increase

Route::post('price_send_to_customer', 'Admin@price_send_to_customer');




Route::get('show-users-form','Admin@show_user_form');

Route::get('customer-quote-history', 'Admin@customer_quote_history');

Route::get('get_est','Admin@get_est');
Route::get('est_ticket/{id}','Admin@est_ticket');

Route::post('get-palte-mak-data/','Admin@get_palte_mak_data');


Route::post("get-product-info-view", "Admin@get_product_info_view");

Route::get('show-shipping-form','Shipping@show_shipping_form');
Route::get('show-website-form','Admin@show_website_form');
Route::get('only-view-user/{id}','Admin@OnlyViewUser');
Route::get('only-view-website/{id}','Admin@OnlyViewWebsite');
Route::get('edit-user-form/{id}','Admin@EditUserForm');
Route::get('edit-website-form/{id}','Admin@EditWebsiteForm');
Route::post('update-user-form/{id}','Admin@update_user_form');
Route::post('update-website-form/{id}','Admin@update_website_form');
Route::get('destroy-user/{id}','Admin@UserDestroy');
Route::get('destroy-website/{id}','Admin@WebsiteDestroy');
Route::get('follow_inquiry/{id}','Admin@follow_inquiry');
Route::post('follow_inquiry_modal','Admin@follow_inquiry_modal');
Route::post('send-follow-inquiry-email', 'Admin@send_follow_inquiry_email');

Route::get('status_change_est_sender/{id}','Admin@status_change_est_sender');
Route::post('save_user_data', 'Admin@AddUser');
Route::post('save_website_data', 'Admin@AddWebsite');
Route::post('save_shipping_data', 'Shipping@AddShipping');
Route::get('destroy', 'AdminLoginController@Destroy');
Route::get('change-password', 'Admin@changepassword');
Route::post('update-password', 'AdminLoginController@updatepassword');
Route::get('production-form','Admin@index');
Route::get('show-production-form','Admin@ShowProductionForm');
Route::get('show-all-reports','Admin@show_all_reports');
Route::get('view-report/{id}','Admin@view_report');
Route::get('only-view-production/{id}','Admin@OnlyViewProduction');
Route::get('edit-production-form/{id}','Admin@EditProductionForm');
Route::get('edit-production-data/{id}','Admin@EditProductionData');
Route::post('update-production-form/{id}','Admin@update_production_form');
Route::post('update-production-form-data','Admin@update_production_form_data');
Route::get('del_galery_image/{name}/{id}','Admin@del_galery_image');
Route::get('destroy-production/{id}','Admin@DestroyProduction');
Route::post('add-production-form','Admin@add_production_form');
Route::get('product-size-for-plate-making', 'Product_Size_For_Plate_Making@home');
Route::get('add-new-product-size-for-plate-making', 'Product_Size_For_Plate_Making@add_new_product_size');
Route::post('add-new-product-size-for-plate-making-process', 'Product_Size_For_Plate_Making@add_new_product_size_process');
Route::get('edit-product-size-for-plate-making/{any}', 'Product_Size_For_Plate_Making@edit_product_size');
Route::post('edit-product-size-for-plate-making-process', 'Product_Size_For_Plate_Making@edit_product_size_process');
Route::get('delete-product-size-for-plate-making/{any}', 'Product_Size_For_Plate_Making@delete_product_size_process');


// Stock Type Routes
Route::get('show-all-stock-type', 'Product_Stock@show_all_stock_type');
Route::get('add-new-stock-type', 'Product_Stock@add_new_stock_type');
Route::post('/add-new-stock-type-process', 'Product_Stock@add_new_stock_type_process');
Route::get('edit-stock-type/{any}', 'Product_Stock@edit_stock_type');
Route::post('edit-stock-type-process', 'Product_Stock@edit_stock_type_process');
Route::get('delete-stock-type/{any}', 'Product_Stock@delete_stock_type');

// Stock GSM Routes
Route::get('show-all-stock-gsm', 'Product_Stock@show_all_stock_gsm');
Route::get('add-new-stock-gsm', 'Product_Stock@add_new_stock_gsm');
Route::post('add-new-stock-gsm-process', 'Product_Stock@add_new_stock_gsm_process');
Route::get('edit-stock-gsm/{any}', 'Product_Stock@edit_stock_gsm');
Route::post('edit-stock-gsm-process', 'Product_Stock@edit_stock_gsm_process');
Route::get('delete-stock-gsm/{any}', 'Product_Stock@delete_stock_gsm');

// Stock Size Routes
Route::get('show-all-stock-size', 'Product_Stock@show_all_stock_size');
Route::get('add-new-stock-size', 'Product_Stock@add_new_stock_size');
Route::post('add-new-stock-size-process', 'Product_Stock@add_new_stock_size_process');
Route::get('edit-stock-size/{any}', 'Product_Stock@edit_stock_size');
Route::post('edit-stock-size-process', 'Product_Stock@edit_stock_size_process');
Route::get('delete-stock-size/{any}', 'Product_Stock@delete_stock_size');

// Vendor Type
Route::get('add-new-vendor-type', "Vendor_Material_Type@add_new_vendor_type");
Route::post('add-new-vendor-type-process', "Vendor_Material_Type@add_new_vendor_type_process");
Route::get('edit-vendor-type/{any}', "Vendor_Material_Type@edit_vendor_type");
Route::post('edit-vendor-type-process', "Vendor_Material_Type@edit_vendor_type_process");
Route::get('show-all-vendor-type', "Vendor_Material_Type@show_all_vendor_type");
Route::get('delete-vendor-type/{any}', "Vendor_Material_Type@delete_vendor_type");

// Vendor Material
Route::get('add-new-vendor-material', "Vendor_Material_Type@add_new_vendor_material");
Route::post('add-new-vendor-material-process', "Vendor_Material_Type@add_new_vendor_material_process");
Route::get('edit-vendor-material/{any}', "Vendor_Material_Type@edit_vendor_material");
Route::post('edit-vendor-material-process', "Vendor_Material_Type@edit_vendor_material_process");
Route::get('show-all-vendor-material', "Vendor_Material_Type@show_all_vendor_material");
Route::get('delete-vendor-material/{any}', "Vendor_Material_Type@delete_vendor_material");