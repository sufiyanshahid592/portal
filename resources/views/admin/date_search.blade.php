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
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcomb-wp">
								 
										<div class="breadcomb-ctn" style="padding:20px">
										<h2>Date Wise Filtration</h2>
									 
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
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                             </div>
                        <div class="table-responsive">
                            <table  id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr style="background-color: #393b3c;">
                                        <th style="color:white;">#Sr</th>
                                        <th style="color:white;">Job#</th>
                                        <th style="color:white;">Date</th>
                                        <th style="color:white;">Item</th>
                                        <th style="color:white;">Website</th>
                                        <th class="text-center" style="color:white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sr=0; foreach ($data as $value){ $sr++; ?> 
                                    <tr>
                                        <td>{{$sr}}</td>
                                        <td>{{$value->job}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->item}}</td>
                                        <td>{{$value->website}}</td>
                                        <td class="text-center">
                                           <button class="btn viewdata" data-toggle="tooltip" data-placement="left" title="View Report" data-uid="<?php echo $value->id;?>">
                                                <i class="notika-icon notika-eye"></i>
                                                    
                                                </i>
                                            </button>
                                            
                                             
                                        </td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                               
                            </table>
                        </div>
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
    $src = "{{url('view-report/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are you Sure you  want to View this Report ?",
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

     

        
  });


 </script>
    