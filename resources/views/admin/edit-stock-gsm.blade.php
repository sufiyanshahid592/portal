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
										<h2>Edit Stock GSM</h2>
									 
									</div>
								</div>
							</div>

							 
						</div>
            <form action="{{url('edit-stock-gsm-process')}}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label">Enter Stock GSM:</label>
                  <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                    <div class="input-group nk-int-st">
                      <span class="input-group-addon"></span>
                      <input type="text" class="form-control" name="stock_gsm_value" value="<?php if(!empty($get_stock_gsm_by_id)){echo $get_stock_gsm_by_id[0]->stock_gsm_value; } ?>" />
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <label class="nk-label"></label>
                  <div class="form-example-int">
                    <input type="hidden" name="stock_gsm_id" value="{{$get_stock_gsm_by_id[0]->stock_gsm_id}}">
                    <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Update</button>
                  </div>
                </div>
              </div>
            </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
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