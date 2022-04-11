@include('header')
 <style>
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #70ac4870;
}
 </style>

  
<div class="form-element-area">
    <div class="container">
        	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Date Wise Filter</h2>
									</div>
								</div>
							</div>
            </div>
            <form action="{{url('production-inquirie-filter-get-data')}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon">From:</span>
                                    <input type="text" class="form-control" name="date_from" value="<?php echo date('m-d-Y'); ?>" />
                                </div>
                            </div>
                        </div>
                        
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon">To:</span>
                                    <input type="text" class="form-control" name="date_to" value="<?php echo date('m-d-Y'); ?>" />
                                </div>
                            </div>
                        </div> 
               
                <!-- <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label">Status:</label>
                  <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                    <div class="input-group nk-int-st">
                      <select class="form-control" name="inquiry_status">
                        <option>-- Select Inquiry Status --</option>
                        <option <?php //if(!empty($inquiry_status)){if($inquiry_status=="1"){echo "selected";}} ?> value="1">Current</option>
                        <option <?php //if(!empty($inquiry_status)){if($inquiry_status=="2"){echo "selected";}} ?> value="2">Closed</option>
                      </select>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label"></label>
                  <div class="form-example-int">
                    <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">seacrh</button>
                  </div>
                </div>
              </div>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
      	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-windows"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>ID Wise Filter</h2>
                  </div>
                </div>
              </div>
            </div>
            <form action="{{url('production-inquirie-filter-by-id')}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  
                  <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                    <div class="input-group nk-int-st">
                      <span class="input-group-addon">From:</span>
                      <input type="text" class="form-control" name="product_traking_id_from" value=""  required/>
                    </div>
                  </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  
                  <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                    <div class="input-group nk-int-st">
                      <span class="input-group-addon">To:</span>
                      <input type="text" class="form-control" name="product_traking_id_to" value=""  required/>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label"></label>
                  <div class="form-example-int">
                    <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">seacrh</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Website Wise Filter</h2>
									</div>
								</div>
							</div>
            </div>
            <form action="{{url('production-inquirie-filter-get-data-website')}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon">Website Name:</span>
                                       <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                  <select class="selectpicker"  name="website" data-live-search="true">
                                      <option value="TheCustomboxes.com">www.thecustomboxes.com</option>
                                    @foreach($website as $value)
                                    <option value="{{$value->website}}">{{$value->website}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                     
               
              
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label"></label>
                  <div class="form-example-int">
                    <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">seacrh</button>
                  </div>
                </div>
              </div>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
        </div>
    </div>




    @include('footer')
    
     <script type="text/javascript">
     $(document).ready(function () {
               $('.viewdata').click(function(){
     
     $product_id=$(this).attr('data-uid');
     console.log($product_id);
    $src = "{{url('only-view-production/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "you want to View this Form ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes',
            }).then((ok) => {
     if (ok.value) {
 
       window.location = $src;
     }
      else
                    {console.log('cancelled');}
     });

      });

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
          $src = "{{url('edit-production-form/')}}"+'/'+$id;
           console.log($id);
           swal.fire({

title:"Are you Sure you want to Edit this Form",
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