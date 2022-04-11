@include('header')
  
  <div class="clearfix">
                <?php  if(Session::get('desgniation')=='tl'){?> 
                                <div class="breadcomb-ctn">
                                  
                                 
                                </div>
                                <?php }elseif(Session::get("desgniation")=='sm'){ ?>
                                <div class="breadcomb-ctn">
                                    <div class="row text-center">
                                        <div class="col-lg-12">
                                            <a href="{{url('your-tl-inquiries')}}" target="_blank"><button target="_blank" class="custom-btn_hov btn-12 button_hov" style="background-color: #00c292;border: 1px #00c292;"><span>Get</span><span> Your TL Inquiries</span></button></a>
                                          <a href="{{url('your-csr-inquiries')}}" target="_blank"><button target="_blank" class="custom-btn_hov btn-12 button_hov" style="background-color: #00c292;border: 1px #00c292;"><span>Get</span><span> Your CSR Inquiries</span></button></a>
                                       
                                        </div>
                                     
                                    </div>
                                    <br>
                                 
                                </div>

                                <?php } ?>
  </div>
<div class="container">
@if(Session::has('insert_csr_tl'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('insert_csr_tl') }}</div>
                    </center>
                    
                    @endif    
    
<form id="basic-form" method="post" action="{{url('update_tl_csr')}}" enctype="multipart/form-data">
     <input type="hidden" value="<?php echo Session::get('user_name_login'); ?>" name="username">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
        <div class="col-md-6 col-lg-6"> 
             <h5> Select One TL </h5>
             
             
             <?php   if(count($manager_name) > 0){ ?>
             
             
               <select class="selectpicker select-team-leader" name="desgniation" data-live-search="true">
            
                <?php $temp=$manager_name[0]->tl; 
                
                    if(!empty($all_data_tl)){ foreach ($all_data_tl as $index){?>
                    
                        <option value="<?php echo $index->user_id;?>"<?php  if(!empty($temp)){if($temp==$index->user_id){echo"selected";}} ?>>
                            <?php echo $index->user_name; ?>
                            </option>
                    <?php } }?>
                      
                          
                            
                        </select>
             
            <?php } else{ ?>
             
              <select class="selectpicker" name="desgniation" data-live-search="true">
                 <?php  foreach ($all_data_tl as $index){?>
                    
                        <option value="<?php echo $index->user_id;?>">
                            <?php echo $index->user_name; ?>
                            </option>
                    <?php } ?>
                  </select>
             
             
         <?php    } ?>
             
      
        </div>
        
          <div class="col-md-6 col-lg-6">
             <h5> Select CSR </h5>
             
              <?php   if(count($manager_name) > 0){ ?>
     <select class="js-example-basic-multiple selectpicker selected-csr" name="csr[]" multiple="multiple" data-live-search="true">
   
                    <?php $temp=json_decode($manager_name[0]->csr); 
    
                    if(!empty($all_data_csr)){ foreach ($all_data_csr as $index){?>
                    
                        <option value="<?php echo $index->user_id;  ?>" 
                        
                        <?php  if(!empty($temp)){foreach ($temp as $key => $keyvalue) {
                            
                            if($keyvalue==$index->user_id){echo"selected";}
                            
                        }} ?>><?php echo $index->user_name; ?></option>
                    <?php } }?>
</select>

   <?php } else{ ?>
             
              <select class="js-example-basic-multiple selectpicker selected-csr" name="csr[]" multiple="multiple" data-live-search="true">
                  <?php foreach ($all_data_csr as $index){?>
                    
                        <option value="<?php echo $index->user_id; ?>" 
                        ><?php echo $index->user_name; ?></option>
                    <?php } ?>
                  </select>
             
             
         <?php    } ?>
        </div>
        
    </div>
    
    <br><br><br><br><br>
      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                   <div class="form-example-int">
                                        <button type="submit" style="width:170px;" class="btn btn-success notika-btn-success px-sm-4">Submit</button>
                                    </div>
                                </div>
                      
                  </div>
    </form>
    
   
</div>
 
 
@include('footer')
  
 
<script>
    
$('.js-example-basic-multiple').select2({
  placeholder: 'Select an option'
});
$(document).on("change", ".select-team-leader", function(){
  var team_leader_id = $(".select-team-leader").children("option:selected").val();
  var csrf_token = $('meta[name="csrf-token"]').attr('content');
  
  $.ajax({
    url: "{{ url('get-tl-csr')}}",
    method: "get",
    data: {
      "team_leader_id":team_leader_id, 
      "_token": "{{ csrf_token() }}",
    },
    success: function(success){
      $(".selected-csr").html(success);
      $.ajax({
        url: "{{ url('get-tl-csr-boxes')}}",
        method: "get",
        data: {
          "team_leader_id":team_leader_id, 
          "_token": "{{ csrf_token() }}",
        },
        success: function(success){
          $(".select2-selection__rendered").html(success);
          
        }
      });
    }
  });
});
$( document ).ajaxStart(function() {
  $('#ajaxspinner').show();
});
$( document ).ajaxComplete(function() {
  $('#ajaxspinner').hide();
});
</script>