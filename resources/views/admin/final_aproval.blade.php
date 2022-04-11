    @include('header')
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>


body {
    font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 300;
    background-color: #fff;
    font-size: 0.95em;
    color: #222;
}



.main-estimation .card {
    border: 1px solid transparent;
    margin-bottom: 15px;
    transition: border 0.1s, transform 0.3s;
}


.main-estimation .card .card-body h2 {
    color: #333;
    font-size: 14px;
    text-transform: capitalize;
}
.main-estimation .card .card-body h2  span{
    color: green;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
}
.main-estimation .card .card-body p.card-text {
    color: #333;
    font-size: 12px;
    text-transform: capitalize;
}
.main-estimation .card-p {
    color: #b3b3ff;
}
.main-estimation .card-p i {
    color: #262626;
    font-size: 13px;
    margin-right: 1px;
}
.main-estimation .card-p p a {
    color: #2b80db;
    text-decoration: none;
    font-size: 13px;
}


.main-estimation .card-p span.dark-span {
    color: #333;
}

.main-estimation  .radious-2{
  border-radius: 10px;
}

/* @media (min-width: 992px)
{
    .estimation {
    border-left: 1px solid #ada9a9;
    height: auto;
    width: 100%;
    padding: 0px 0px 0px 20px !important;
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 0 !important;
    }
} */

.estimation::before {
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    background-color: #b8292d;
    border-radius: 50%;
    left: -8px;
    top: 30px;
    Z-INDEX: 1;
}

.bor-rad{
    position: relative;
}
.bor-rad::after{
    content: '';
    position: absolute;
    width: 1px;
    height: 100%;
    background-color: #ddd;
    left: 0;
    top: 0px;
    Z-INDEX: 0;
}



  </style>
 
  @if(Session::has('approved'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('approved') }}</div>
                    </center>
                    
                    @endif
    <div class="container">
        <div class="p-5 main-estimation" style="background-color: #ddd;">
            <div class=" bg-white p-4 radious-2  shadow ">
                <div class="bg-white bor-rad">
                    
                    @foreach($data as $dd)
                    <div class="card estimation">
                        <div class="card-body py-0">
                             <h2 class="card-title">Inquiry No: <span class="color-span">{{$dd->id}}</span></h2>
                      
                             <p class="card-text mb-2">
                                 <td><?php echo date('Y, F j',strtotime($dd->date));?></td>
                     
</p>
                             <div class="card-p">
                                 <div class="">
                                    <p class="mb-2">
                                        <i class="fas fa-user"></i> <span style="color: black;"><a href="{{url('final-aproval-inq'.'/'.$dd->id)}}">{{$dd->c_name}}</a></span> <!-- <a href="{{url('final-aproval-inq'.'/'.$dd->id)}}">Send </a> --> <span class="dark-span">By</span> <a href="{{url('final-aproval-inq'.'/'.$dd->id)}}">{{$dd->csr_sudo_name}}</a>
                                    </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     @endforeach
                    
                </div>
            </div>
        </div>
    </div>
 


    @include('footer')