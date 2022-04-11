@include('header')
 
 
                  
                    
<div class="form-element-area">
<form id="basic-form" method="post" action="{{url('update_shipping_data')}}" enctype="multipart/form-data"
>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
  <input type="hidden" name="id" value="{{$data[0]->id}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list mg-t-30">
                    <div class="cmp-tb-hd">
                        <h2 style="text-align:center;">View  Shipping  Info</h2>
                    </div>
 
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="job_number" value="{{$data[0]->job_number}}" readonly />
                                    <label class="nk-label">Job Number *</label>
                                </div>
                            </div>
                        </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" name="date" value="{{$data[0]->date}}" readonly >
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="item" value="{{$data[0]->item}}" readonly  />
                                    <label class="nk-label">Item *</label>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                       
                    </div>
                    
                     <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="quantity"  value="{{$data[0]->quantity}}"   readonly/>
                                    <label class="nk-label">Quantity *</label>
                                </div>
                            </div>
                        </div>

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="weight" value="{{$data[0]->weight}}" readonly />
                                    <label class="nk-label">Weight *</label>
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="rate"  value="{{$data[0]->rate}}" readonly  />
                                    <label class="nk-label">Rate *</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="tracking_id"  value="{{$data[0]->tracking_id}}" readonly />
                                    <label class="nk-label">Tracking Id *</label>
                                </div>
                            </div>
                        </div>
                        
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="address"  value="{{$data[0]->address}}"  readonly />
                                    <label class="nk-label">Client Address *</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                       <div class="row" style="margin-bottom:30px;margin-top:30px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="number" class="form-control" name="amount"  value="{{$data[0]->amount}}"  readonly  />
                                    <label class="nk-label">Amount *</label>
                                </div>
                            </div>
                        </div>

                     
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="tax"  value="{{$data[0]->tax}}" readonly />
                                    <label class="nk-label">Sales Tax *</label>
                                </div>
                            </div>
                            
                        </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group ic-cmp-int float-lb floating-lb">
                                <div class="form-ic-cmp">
                                  
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control" name="miscellaneous"  value="{{$data[0]->miscellaneous}}"  readonly  />
                                    <label class="nk-label">Miscellaneous *</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           
                             
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Currency</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="currency" data-live-search="true">
                                     <option <?php if($data[0]->currency=='pkr'){echo "selected";} ?> value="pkr" >Pakistan Rupees</option>
                                    <option <?php if($data[0]->currency=='dollars'){echo "selected";} ?> value="dollars" >USA Dollar</option>
                                   
                                     
                                    </select>
                            </div>
                    
                           
                        </div>
                        
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Shipping Process</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="process" data-live-search="true">
                                    <option <?php if($data[0]->process=='fedex'){echo "selected";} ?> value="fedex">FedEx</option>
                                    <option <?php if($data[0]->process=='dhl'){echo "selected";} ?> value="dhl">DHL</option>
                                    <option <?php if($data[0]->process=='tcs'){echo "selected";} ?>  value="tcs">TCS</option>
                                    <option <?php if($data[0]->process=='leopards'){echo "selected";} ?> value="leopards">Leopards</option>
                                    </select>
                            </div>
                        </div>
                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10" style="padding: 23px;">
                                <h2>Zone</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="padding: 23px;">
                                <select class="selectpicker" name="zone" data-live-search="true">
                                    <option  <?php if($data[0]->zone=='usa'){echo "selected";} ?> value="usa">USA</option>
                                    <option <?php if($data[0]->zone=='uk'){echo "selected";} ?> value="uk">UK</option>
                                    <option <?php if($data[0]->zone=='aus'){echo "selected";} ?> value="aus">AUS</option>
                                    <option  <?php if($data[0]->zone=='pk'){echo "selected";} ?> value="pk">PK</option>
                                    </select>
                            </div>
                        </div>
                           
                    </div>
              
                  
                </div>
            </div>
        </div>

 
        
        
        

            
        </div>
    </div>

</form>
   @include('footer')
</div>
