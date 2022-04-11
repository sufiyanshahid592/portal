@include('header')
 <style>
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #70ac4870;
}
 </style>
 
         @if(Session::has('delete_shipping'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('delete_shipping') }}</div>
                    </center>
                    
                    @endif
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
										<h2>All Shippings</h2>
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
	   @if(Session::has('WebsiteDelete'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('WebsiteDelete') }}</div>
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
                                    <tr style="background-color: #393b3c;">
                                        <th style="color: white;">#Sr</th>
                                        <th style="color: white;">Job Number</th>
                                        <th style="color: white;">Date</th>
                                        <th style="color: white;">Item</th>
                                        <th style="color: white;">Tracking Id</th>
                                        <th style="color: white;">Amount</th>
                                        <th class="text-center" style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sr=0; foreach ($data as $value){ $sr++; ?> 
                                    <tr>
                                        <td>{{$sr}}</td>
                                        <td>{{$value->job_number}}</td>
                                         <td><?php echo date('Y, F j',strtotime($value->date));?></td>
                                          <td>{{$value->item}}</td>
                                          <?php
      if (!empty($value->tracking_id)) {?>
<?php foreach(json_decode($value->tracking_id) as $ship){ ?>
   <td><?php echo $ship;?></td>
<?php }} ?>

                                          
                                            <td>{{$value->amount}}</td>
                                        <td class="text-center" width="200px">
                                            
                                             <a href="{{url('view-shipping-data/'.$value->id)}}" title="view" class="delete" 
                                             onclick="return confirm('Are you sure you want to View this Shipment')">
                                                <button class="btn " data-toggle="tooltip" data-placement="bottom" title="View" data-uid="<?php echo $value->id; ?>">
                                                    <i class="notika-icon notika-eye"></i>
                                                </button>
                                            
                                                 </a>
                                                 
                                                   <?php
                                             
                                             if(Session::get('user_name_login') =='admin'){ ?>
                                               <a href="{{url('edit-shipping-form/'.$value->id)}}" title="Edit" class="delete" 
                                             onclick="return confirm('Are you sure you want to View this Shipment')">
                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->id; ?>">
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                            </a>
                                              
                                             <a href="{{url('delete-shipping-data/'.$value->id)}}" title="Delete" class="delete" 
                                             onclick="return confirm('Are you sure you want to View this Shipment')">
                                                <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Delete" data-uid="<?php echo $value->id; ?>">
                                                <i class="notika-icon notika-close"></i>
                                            </button>
                                            
                                            </a>
                                                    
                                          <?php    } 
                                             ?>
                                           
                                           
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
    <!-- Data Table area End-->
        </div>
    </div>




    @include('footer')
    
     <script type="text/javascript">
     $(document).ready(function () {
               $('.viewdata').click(function(){
     
     $product_id=$(this).attr('data-uid');
     console.log($product_id);
    $src = "{{url('view-shipping-data/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "you want to View this Shipping Info ?",
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
    $src = "{{url('delete-shipping-data/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete this Shipping Data ?",
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
          $src = "{{url('edit-shipping-form/')}}"+'/'+$id;
           console.log($id);
           swal.fire({

title:"Are you Sure you want to Edit this Shipping  Info",
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