@include('header')
 
 <style>
     .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #70ac4870;
}
 </style>
<div class="form-element-area">
    <div class="container">
        	<!-- Breadcomb area Start-->
	<!--<div class="breadcomb-area">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
	<!--			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
	<!--				<div class="breadcomb-list">-->
	<!--					<div class="row">-->
	<!--						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
	<!--							<div class="breadcomb-wp">-->
								 
	<!--									<div class="breadcomb-ctn" style="padding:20px">-->
	<!--									<h2>Search By Job ID</h2>-->
									 
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
							 
	<!--					</div>-->
	<!--			    <form action="{{url('job-search')}}" method="post" enctype="multipart/form-data">-->
 <!--               <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
	<!--				 <div class="row">-->
	<!--						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
	<!--						      <div class="form-group ic-cmp-int float-lb floating-lb">-->
 <!--                               <div class="form-ic-cmp">-->
                                  
 <!--                               </div>-->
 <!--                               <div class="nk-int-st">-->
 <!--                                   <input type="text" class="form-control" name="jobid1" required/>-->
 <!--                                   <label class="nk-label">JOB ID From *</label>-->
 <!--                               </div>-->
 <!--                           </div>-->
							    
	<!--						    </div>-->
	<!--						    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
	<!--						      <div class="form-group ic-cmp-int float-lb floating-lb">-->
 <!--                               <div class="form-ic-cmp">-->
                                  
 <!--                               </div>-->
 <!--                               <div class="nk-int-st">-->
 <!--                                   <input type="text" class="form-control" name="jobid2" required/>-->
 <!--                                   <label class="nk-label">JOB ID To *</label>-->
 <!--                               </div>-->
 <!--                           </div>-->
							    
	<!--						    </div>-->
							    
							    
	<!--						    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
	<!--						      <div class="form-example-int">-->
 <!--                                       <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Search</button>-->
 <!--                                   </div>-->
							    
	<!--						    </div>-->
	<!--						    </div>-->
							    
	<!--						    </form>-->
						
	<!--				</div>-->
	<!--			</div>-->
				
	<!--			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
	<!--				<div class="breadcomb-list">-->
	<!--					<div class="row">-->
	<!--						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
	<!--							<div class="breadcomb-wp">-->
								 
	<!--								<div class="breadcomb-ctn" style="padding:20px">-->
	<!--									<h2>Search By Website</h2>-->
									 
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
							 
	<!--					</div>-->
						
						
	<!--				<form action="{{url('website-search')}}" method="post" enctype="multipart/form-data">-->
 <!--               <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
	<!--					     <div class="row">-->
	<!--						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
	<!--						      <div class="form-group ic-cmp-int float-lb floating-lb">-->
 <!--                               <div class="form-ic-cmp">-->
                                  
 <!--                               </div>-->
 <!--                               <div class="nk-int-st">-->
 <!--                                   <input type="text" class="form-control" name="website" required/>-->
 <!--                                   <label class="nk-label">WEBSITE *</label>-->
 <!--                               </div>-->
 <!--                           </div>-->
							    
	<!--						    </div>-->
							    
							    
	<!--						    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
	<!--						      <div class="form-example-int">-->
 <!--                                       <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">seacrh</button>-->
 <!--                                   </div>-->
							    
	<!--						    </div>-->
	<!--						    </div>-->
	<!--					</form>-->
					
						
	<!--				</div>-->
	<!--			</div>-->
				
	<!--		</div>-->
			
			
	<!--	</div>-->
	<!--</div>-->
	<!--	<div class="breadcomb-area">-->
	<!--	<div class="container">-->
	<!--		<div class="row">-->
			 
				
	<!--			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">-->
	<!--				<div class="breadcomb-list">-->
	<!--					<div class="row">-->
	<!--						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
	<!--							<div class="breadcomb-wp">-->
								 
	<!--								<div class="breadcomb-ctn" style="padding:20px">-->
	<!--									<h2>Search By Date</h2>-->
									 
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
							 
	<!--					</div>-->
						
						
	<!--				<form action="{{url('date-search')}}" method="post" enctype="multipart/form-data">-->
 <!--                  <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
	<!--					     <div class="row">-->
	<!--					   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
 <!--                           <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">-->
 <!--                               <div class="input-group date nk-int-st">-->
 <!--                                   <span class="input-group-addon"></span>-->
 <!--                                   <input type="text" class="form-control" name="date1" value="<?php echo date('m-d-Y'); ?>" />-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                       </div>-->
	<!--						    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
 <!--                           <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">-->
 <!--                               <div class="input-group date nk-int-st">-->
 <!--                                   <span class="input-group-addon"></span>-->
 <!--                                   <input type="text" class="form-control" name="date2" value="<?php echo date('m-d-Y'); ?>" />-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                       </div>-->
							    
	<!--						    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
	<!--						    	       <label class="nk-label"></label>-->
	<!--						      <div class="form-example-int">-->
 <!--                                       <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">seacrh</button>-->
 <!--                                   </div>-->
							    
	<!--						    </div>-->
	<!--						    </div>-->
	<!--					</form>-->
					
						
	<!--				</div>-->
	<!--			</div>-->
				
	<!--		</div>-->
			
			
	<!--	</div>-->
	<!--</div>-->
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
    