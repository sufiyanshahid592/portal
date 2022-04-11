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
										<h2>All Production Form</h2>
									 
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
	@if(Session::has('ProducdtionDelete'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('ProducdtionDelete') }}</div>
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
                                    <tr  style="background-color: #393b3c;">
                                        <th style="color: white;">#Sr</th>
                                        <th style="color: white;">Job#</th>
                                        <th style="color: white;">Date</th>
                                        <th style="color: white;">Item</th>
                                        <th style="color: white;">Website</th>
                                        <th style="color: white;">Status</th>
                                        <th class="text-center" style="color: white;">Action</th>
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
                                        <td><?php if($value->production_form_status=="on"){echo "Completed Job";}elseif($value->production_form_status=="off"){echo "Pending Job";} ?></td>
                                        <td class="text-center">
                                            
                                               
                                             <a href="{{url('only-view-production'.'/'.$value->production_form_id)}}" title="View" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">
                                                 
                                                  <button class="btn" data-toggle="tooltip" data-placement="bottom" title="View" >
                                                    <i class="notika-icon notika-eye"></i>
                                                </button>
                                            </a>
                                             
                                             <?php
                                             
                                             if(Session::get('user_name_login') =='admin'){
                                              if($value->production_form_status!="on"){
                                              ?>
                                                 
                                                  <a href="{{url('edit-production-data'.'/'.$value->production_form_id)}}" title="Edit" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">

                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit" data-uid="<?php echo $value->production_form_id; ?>">
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                              </a>
                                              <?php } ?>
                                              <a href="{{url('destroy-production'.'/'.$value->production_form_id)}}" title="delete" class="delete" 
                                               onclick="return confirm('Are you sure you want to View this Form ?')">
                                                    
                                                    
                                                <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Delete" data-uid="<?php echo $value->production_form_id; ?>">
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