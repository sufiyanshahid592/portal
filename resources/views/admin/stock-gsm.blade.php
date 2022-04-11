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
										<h2>Stock GSM</h2>
									 
									</div>
								</div>
							</div>

							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
	@if(Session::has('success'))
  <center>
    <div class='alert alert-success'> {{ Session::get('success') }}</div>
  </center>
  @endif
  @if(Session::has('error'))
  <center>
    <div class='alert alert-danger'> {{ Session::get('error') }}</div>
  </center>
  @endif
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                             </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Stock GSM</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $i = 1; if(!empty($get_all_stock_gsm)){foreach($get_all_stock_gsm as $key=>$value){  ?>
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $value->stock_gsm_value; ?></td>
                                    <td><a href="{{url('edit-stock-gsm/'.$value->stock_gsm_id)}}" class="btn btn-warning">Edit</a></td>
                                    <td><a onclick="return confirm('Are you sure you want to Delete this Stock GSM ?')" href="{{url('delete-stock-gsm/'.$value->stock_gsm_id)}}" class="btn btn-danger">Delete</a></td>
                                  </tr>
                                  <?php }} ?>
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
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