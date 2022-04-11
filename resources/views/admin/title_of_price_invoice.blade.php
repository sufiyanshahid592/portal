
<!DOCTYPE html>
<html>
    <head>
        <title>Email Template</title>
    </head>
    <body  style="font-family: sans-serif;">
        <table width="100%">
            <td style="border: 1px solid #1f82c2; border-collapse: 0; border-collapse: collapse; padding: 0;">
                <table width="100%" cellspacing="0"  style="margin: 0 auto; border-collapse: 0; border-collapse: collapse; padding: 0;">
            <tbody>
                <tr style="background-color: #1f82c2;">
                    <td style="text-align: center; background-color: #1f82c2; padding: 20px; border-collapse: collapse;">
                        <img src="{{url('images/'.$data[0]->image)}}" alt="" />
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding: 10px; border: 1px solid #1f82c2; border-collapse: collapse; font-size: 18px; font-weight: bold;">
                        Pricing Quote
                    </td>
                </tr>
            </tbody>
        </table>

        <table width="100%" style=" margin: 0 auto; padding: 0;" style="border-collapse: 0; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td style="border: 0px;" class="font-weight-bold">
                        
                            <h6 style="font-size: 14px;">Address:</h6>
                            <span style="font-size: 14px;display: inline-block;font-weight: 500;">
                                <?php echo $data[0]->address;?>
                            </span>

                            <p >Dear <?php echo $data[0]->c_name;?>,<br>
                            <span style="font-size: 10px; margin-bottom:10px; font-weight:300;">Please Review your requested quote below</span> 
                            </p>
                        
                    </td>

                    <td style="border: 0px;" class="font-weight-bold">
                        <table class="table table-bordered table-1" cellspacing="0" style="width: 100%; margin: 0 auto; padding: 0" style="border-collapse: 0; border-collapse: collapse;border-spacing:0; ">
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold"  style=" padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold; ">Quote No#</td>
                                    <td  style="padding: 5px; border: 1px solid #1f82c2; border-collapse: collapse;border-spacing:0;border-bottom: 0px;font-weight: bold; "><?php echo $data[0]->id;?></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold"  style="padding: 5px; border: 1px solid #1f82c2; border-collapse: collapse;border-right: 0px; font-weight: bold;">Date:</td>
                                    <td  style="  font-weight: bold;padding: 5px; border: 1px solid #1f82c2; border-collapse: collapse;border-spacing:0; "><?php echo  date("d-m-Y"); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <table align="center" cellspacing="0" width="100%" style="margin: 0 auto; padding: 0; border: 1px solid #1f82c2;border-collapse: 0; border-collapse: collapse;">
                    <thead bgcolor=""   style="background-color: #1f82c2;">
                        <tr>
                            <th scope="col"    style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Sales Person</th>
                            <th scope="col"    style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold; font-size: 13px;">Shipping Method</th>
                            <th scope="col"    style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td    style="padding: 5px; border: 1px solid #1f82c2;border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;"><?php echo $data[0]->csr_sudo_name;?></td>
                            <td    style="padding: 5px; border: 1px solid #1f82c2; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">DHL/FEDEX</td>
                            <td    style="padding: 5px; border: 1px solid #1f82c2; border-collapse: collapse;border-spacing:0; font-weight: bold;  font-size: 13px;">UPFRONT</td>
                        </tr>
                    </tbody>
                </table>


                  <table align="center" cellspacing="0" width="100%" style="margin: 0 auto; padding: 0; border: 1px solid #1f82c2;" style="border-collapse: 0; border-collapse: collapse;">
                    <thead bgcolor="" style="background-color: #1f82c2;" >
                        <tr>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Item#</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Size</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Stock</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Box Style</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Printing</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Addons</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Qty</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Unit Price</th>
                            <th scope="col" style="color:#fff;padding: 5px; border: 1px solid #1f82c2;border-bottom: 0px; border-collapse: collapse;border-spacing:0; border-right: 0px;font-weight: bold;  font-size: 13px;">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $modal_row = 1; for ($i=0; $i < count(json_decode($data[0]->product)); $i++) { $product_row = json_decode($data[0]->product_numbers)[$i]; $qty_row = json_decode($data[0]->qty)->$product_row; $price_row = json_decode($data[0]->price)->$product_row; for($ui = 1; $ui <= count((array)$qty_row); $ui++){ ?>
                        <tr>
                            <td style="border: 1px solid #1f82c2; text-align: center;"><?php echo $modal_row; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="open-size"><?php echo json_decode($data[0]->open_size_1)[$i]; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="stock"><?php echo json_decode($data[0]->stock)[$i]; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="product"><?php echo json_decode($data[0]->product)[$i]; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="printing"><?php echo json_decode($data[0]->printing)[$i]; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="addons"><?php echo json_decode($data[0]->addons)[$i]; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="qty"><?php echo $qty_row->$ui; ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="price"><?php echo number_format($price_row->$ui/$qty_row->$ui, 2); ?></td>
                            <td style="border: 1px solid #1f82c2; text-align: center;" class="price"><?php echo $price_row->$ui; ?></td>
                        </tr>
                        <?php $modal_row++;} } ?>
                    </tbody>
                </table>
                <table width="100%" style="background-color: #1f82c2; margin: 0 auto; padding: 0" style="border-collapse: 0; border-collapse: collapse;" >
                    <thead>
                        <tr height="20px">
                            <th scope="col" height="25px"></th>
                        </tr>
                    </thead>
                </table>

                 <table width="100%" style="border: 1px solid #1f82c2;border-bottom:0px; margin: 0 auto; padding: 0" style="border-collapse: 0; border-collapse: collapse;" >
                    <thead>
                        <tr>
                            <td scope="col" style="font-size: 16px;font-weight: 700;">

                              <h6 style="font-size: 18px;font-weight: bold;padding-bottom: 0px;margin-bottom: 0px;    margin-top: 25px;">    Additional  Commments </h6>
                                    <!-- <span style="font-size: 14px;display: inline-block;font-weight: 500;">
                                        File Format Supported- EPS, PDF, AI, PSD,</td> CDR Resolution- Min 300dpi
                                    </span> -->
                                    
                            </td>
                        </tr>

                         <tr>
                            <td scope="col" style="font-size: 16px;font-weight: 700;" > 
                                    <h6 style="font-size: 18px;font-weight: bold;padding-bottom: 0px;margin-bottom: 0px;    margin-top: 25px;">   1. Artwork Requirement: </h6>
                                  <p>  File Format Supported- EPS, PDF, AI, PSD, CDR  <br> Resolution- Min 300dpi</p>
                           </td>
                        </tr>

                         <tr>
                            <td scope="col" style="font-size: 16px;font-weight: 700;" > 
                                    <h6 style="font-size: 18px;font-weight: bold;padding-bottom: 0px;margin-bottom: 0px;    margin-top: 25px;">   2. Lead Time </h6>
                                 <p>  Standard (10 to 12 Business Days) <br class="d-dm-block">
                                    Rush (6 to 8 Business Days) <br class="d-dm-block">
                                 </p>
                           </td>
                        </tr>

                        <tr>
                            <td scope="col" style="font-size: 16px;font-weight: 700;" > 
                                    <h6 style="font-size: 18px;font-weight: bold;padding-bottom: 0px;margin-bottom: 0px;    margin-top: 25px;">   3.No Hidden Or Setup Charges.</h6>
                             
                           </td>
                        </tr>

                         <tr>
                            <td scope="col"   colspan="2" style="font-size: 16px;font-weight: 700;" align="center"> 
                                    <h3 class=" font-weight-bold" style="color: #1f82c2;"> Thank You </h3>
                           </td>
                        </tr>


                         <tr>
                            <td scope="col" colspan="3" style="font-size: 16px;font-weight: 700;" align="center"> 
                                   <p class="" style="font-size: 13px;font-weight: 700;">
                                         If You Have Any Questions Or Require Further Assistance, Please Contact Our Customer Service Team <br class="d-dm-block">
                                        Between 8.00am-7.00pm CST, Monday-Friday
                                    </p>
                           </td>
                        </tr>

                     
                        
                    </thead>
                </table>

                  <table width="100%" style="border: 1px solid #1f82c2;border-top:0px; border-bottom:0px; margin: 0 auto; padding: 0" style="border-collapse: 0; border-collapse: collapse;" >
                                   <tr>
                                            <td align="center" style="border: 0px; "> <a style="color:#000;text-decoration: none;" class="text-black" href=""><?php echo $data[0]->number;?></a><p></p></td>

                                            <td align="center" style="border: 0px; "> <a style="color:#000;text-decoration: none;" class="text-black" href=""><?php echo $data[0]->email?></a><p></p></td>
                                            <td align="center" style="border: 0px;"><p class="text-black footer-p"><i class="fa fa-phone"></i> <a class="text-black" href=""><?php echo $data[0]->website?></a> </p></td>
                                        </tr>
                   </table>


                   <table width="100%" style="border: 1px solid #1f82c2;border-top:0px;margin: 0 auto; padding: 0" style="border-collapse: 0; border-collapse: collapse;">
                            <tbody>
                                <tr>
                                    <td align="center" style="border: 0px;font-size: 12px; white-space: nowrap;" class="font-weight-bold">Pament Options:</td>
                                    <td  align="center" style="border: 0px;text-align: center;"> <img height="" width="200px" src="https://www.thepremiumboxes.com/dist/images_box/payment_ft.png" alt=""></td>
                                    <td  align="center" style="border: 0px;text-align: center"> <img width="150px" src="https://printcustompackaging.com/web/images/blue-seal-250-52-blacktxt-bbb-88655540.png" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
            </td>
        </table>
        
    </body>
</html>