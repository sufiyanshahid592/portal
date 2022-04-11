<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Price Quote</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .web_bg {
                background-color: #3092c0;
            }
            .price_title {
                font-weight: 600;
                color: black;
                font-size: 25px;
            }
            .table-2 thead tr th {
                border-bottom: 0px;
                font-weight: 500;
                border-top: 1px solid  #3092c0 !important;
                text-align: center;
                padding: 2px;
                font-size: 13px;
                color: white;
            }
            .table-2 tbody tr td {
                text-align: center;
                padding: 2px;
                font-size: 13px;
            }
            .table-1 tbody tr td,
            .table-2 tbody tr td,
            .table-2 thead tr th {
                border: 1px solid  #3092c0;
                padding: 2px;
                font-size: 13px;
            }
            .unique-footer h6 {
               font-size: 16px;
            }
            .unique-footer p {
               font-size: 12px;
               font-weight: 500;
            }

            .max-footer-wid  p{
                font-size: 13px;
               font-weight: 700;
            }

            .footer-p a{
                color: #000;
            }
            .footer-p i{
                font-size: 18px;
            }
            .footer-p a{
                font-size: 13px;
                font-weight: 600;
            }

            .footer-pay{
                font-size: 18px;
                font-weight: 600;
                color: #3092c0;
            }
            div.uniqpad{
                padding-left: 3px;
            }

        </style>
    </head>
    <body>
        <div class="container my-5">
            <div class="div" style="border: 1px solid  #3092c0;">
                <div class="web_bg text-center py-2">
                    <img style="background: white; border: 2px solid white;" src="{{url('images/'.$data[0]->image)}}" alt="" />
                </div>
                <div class="price_title">
                    <h2 class="text-center text-uppercase font-weight-bold mb-0">Price Quote</h2>
                </div>
                <div class="my-4"></div>
                <div class="" style="padding-left:2px; width: 100%; margin-top: 50px;">
                    <table class="table  table-1 mb-2">
                        <tbody>
                            <tr>
                                <td style="border: 0px;" class="font-weight-bold">
                                    <div class="">
                                        <p>Address:</p>
                                        <span class="d-block pl-sm-2" style="font-size: 10px; margin-bottom:10px; font-weight:300;">
                                           <?php echo $data[0]->address;?>
                                        </span>
                                        
                                         <p >Dear <?php echo $data[0]->c_name;?>,<br>
                                         <span style="font-size: 10px; margin-bottom:10px; font-weight:300;">Please Review your requested quote below</span> 
                                          </p>
                                    
                                    </div>
                                </td>

                                <td style="border: 0px;" class="font-weight-bold">
                                    <table class="table table-bordered table-1">
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">Quote No#</td>
                                                <td><?php echo $data[0]->id;?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Date:</td>
                                                <td><?php echo  date("d-m-Y"); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>

                            </tr>
                             </tbody>
                    </table>
                   
                    
                </div>
            </div>
            
            
            <div class="" >
                <table class="table table-bordered table-2 mb-0 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                        <tr>
                            <th scope="col">Sales Person</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $data[0]->csr_sudo_name;?></td>
                            <td>DHL/FEDEX</td>
                            <td>UPFRONT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <table class="table table-bordered table-2 mb-0 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                        <tr>
                            <th scope="col">Item#</th>
                            <th scope="col">Size</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Box Style</th>
                            <th scope="col">Printing</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Addons</th>
                            <th scope="col">Price</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $modal_row = 1; for ($i=0; $i < count(json_decode($data[0]->product)); $i++) { $product_row = json_decode($data[0]->product_numbers)[$i]; $qty_row = json_decode($data[0]->qty)->$product_row; $price_row = json_decode($data[0]->price)->$product_row; for($ui = 1; $ui <= count((array)$qty_row); $ui++){ ?>
                        <tr>
                            <td><?php echo $modal_row; ?></td>
                            <td class="open-size"><?php echo json_decode($data[0]->open_size_1)[$i]; ?></td>
                            <td class="stock"><?php echo json_decode($data[0]->stock)[$i]; ?></td>
                            <td class="product"><?php echo json_decode($data[0]->product)[$i]; ?></td>
                            <td class="printing"><?php echo json_decode($data[0]->printing)[$i]; ?></td>
                            <td class="addons"><?php echo json_decode($data[0]->addons)[$i]; ?></td>
                            <td class="qty"><?php echo $qty_row->$ui; ?></td>
                            <td class="price"><?php echo number_format($price_row->$ui/$qty_row->$ui, 2); ?></td>
                            <td class="price"><?php echo $price_row->$ui; ?></td>
                        </tr>
                        <?php $modal_row++;} } ?>
                    </tbody>
                </table>
            </div>
            <div class="">
                <table class="table table-bordered table-2 border-bottom-0" align="center">
                    <thead bgColor="" class="web_bg">
                        <tr height="20px">
                            <th scope="col" height="25px"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="uniqpad" style="border: 1px solid  #3092c0;">
                   <div class="mb-5 unique-footer ">
                         <h6 class="mb-5 pb-5 pt-4 font-weight-bold"> Additional  Commments</h6>
                   </div>
                     
                    <div class="mb-1 unique-footer">
                            <h6 class=" font-weight-bold"> 1. Artwork Requirement: </h6>
                            <p>  File Format Supported- EPS, PDF, AI, PSD, CDR  <br class="d-dm-block" /> Resolution- Min 300dpi</p>
                    </div>

                    <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold"> 2. Lead Time </h6>
                        <p>  Standard (10 to 12 Business Days) <br class="d-dm-block" />
                            Rush (6 to 8 Business Days) <br class="d-dm-block" />
                        </p>
                   </div>

                   <div class="mb-1 unique-footer">
                        <h6 class=" font-weight-bold">  3.No Hidden Or Setup Charges. </h6>
                        <p> </p>
                   </div>
                   <div class="max-footer-wid text-center">
                         <h3 class=" font-weight-bold"> Thank You </h3>
                         <p class="">
                             If You Have Any Questions Or Require Further Assistance, Please Contact Our Customer Service Team <br class="d-dm-block" />
                            Between 8.00am-7.00pm CST, Monday-Friday
                        </p>
                   </div>
                   <div class=" text-center" style="display: block;">
                      

                        <table class="table  table-1">
                            <tbody>
                                <tr style="text-align: center; width:100%">
                                    <td style="border: 0px; text-align: center; width:100%" class="font-weight-bold"><p class="text-black footer-p"><i class="fas fa-globe-americas"></i> Phone: <?php echo $data[0]->number;?> </p></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table  table-1">
                            <tbody>
                                <tr>
                                    <td    style="border: 0px; padding-left: 5px;"> <a style="color:#000;text-decoration: none;" class="text-black" href=""><?php echo $data[0]->email?></a></p></td>
                                    <td    style="border: 0px;"><p class="text-black footer-p"><i class="fa fa-phone"></i> <a class="text-black" href=""><?php echo $data[0]->website?></a>; </p></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table  table-1">
                            <tbody>
                                <tr>
                                    <td style="border: 0px;font-size: 12px;" class="font-weight-bold" >Pament Options:</td>
                                    <td style="border: 0px;text-align: center;"> <img height="" width="200px" src="https://www.thepremiumboxes.com/dist/images_box/payment_ft.png" alt="" /></td>
                                    <td style="border: 0px;text-align: center"> <img  width="150px" src="https://printcustompackaging.com/web/images/blue-seal-250-52-blacktxt-bbb-88655540.png" alt="" /></td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>


    </body>
</html>