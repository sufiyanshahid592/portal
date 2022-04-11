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
										<h2>All Website</h2>
									 
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
                                        <th style="color: white;">Website</th>
                                        <th class="text-center" style="color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sr=0; foreach ($data as $value){ $sr++; ?> 
                                    <tr>
                                        <td>{{$sr}}</td>
                                        <td>{{$value->website}}</td>
                                        <td class="text-center">
                                            
                                             <a href="{{url('only-view-website'.'/'.$value->web_id)}}" title="View"  
                                      onclick="return confirm('Are you sure you want to See this Data ?')">
                                                 
                                                <button class="btn " data-toggle="tooltip" data-placement="bottom" title="View">
                                                    <i class="notika-icon notika-eye"></i>
                                                </button>
                                            </a>
                                                 
                                                  <a href="{{url('edit-website-form'.'/'.$value->web_id)}}" title="Edit" 
                                      onclick="return confirm('Are you sure you want to Edit this Data ?')">
                                                  <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Edit"  >
                                                <i class="notika-icon notika-edit">
                                                    
                                                </i>
                                            </button>
                                              </a>
                                              
                                              <a href="{{url('destroy-website'.'/'.$value->web_id)}}" title="Delete" 
                                      onclick="return confirm('Are you sure you want to Edit this Data ?')">
                                                <button class="btn " data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                <i class="notika-icon notika-close"></i>
                                            </button>
                                              </a>
                                           
                                           
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
    $src = "{{url('only-view-website/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "you want to View this User Info ?",
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
    $src = "{{url('destroy-website/')}}"+'/'+$product_id;
    
       swal.fire({

            title: "Are You Sure, you want to Delete this Web Url ?",
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
          $src = "{{url('edit-website-form/')}}"+'/'+$id;
           console.log($id);
           swal.fire({

title:"Are you Sure you want to Edit this User Info",
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