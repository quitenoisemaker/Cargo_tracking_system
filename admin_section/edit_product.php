<?php
include('../function/function.php');


if (!isset($_SESSION['username'])) {
  header('location: login');
}

function format_date($date){
        return date('D, M jS Y', strtotime($date));
    }

    $date = date('Y-m-d');
    $time = date('H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.ansonika.com/sparker/admin_section/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Dec 2018 07:14:58 GMT -->
<?php include ('include/header.php'); ?>
<div class="box_general">
    <div class="card">
        <div class="card-header alert alert-warning text-center">
            <b>Edit Product</b>
        </div>
<!--  -->
        
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-between align-items-center p-4">
                    <div class="col-lg-12">

                        <?php 
                     $id=$_GET['id'];
                    $get_code=mysqli_query($conn, "SELECT * FROM `shipping` WHERE id='$id'");
                    $row_code=mysqli_fetch_array($get_code);

                    ?>
                        <!-- Button -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tracking Number <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row_code['tracking_num'];?>" readonly required name="tracking" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputEmail1">SHIPPER DETAILS</label>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_name" value="<?php echo $row_code['s_name'];?>" placeholder="Shipper name">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_phone" value="<?php echo $row_code['s_phone'];?>" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_email" value="<?php echo $row_code['s_email'];?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_address" value="<?php echo $row_code['s_address'];?>" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputEmail1">RECIEVER DETAILS</label>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_name" value="<?php echo $row_code['r_name'];?>" placeholder="Reciever name">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_phone" value="<?php echo $row_code['r_phone'];?>" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_email" value="<?php echo $row_code['r_email'];?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_address" value="<?php echo $row_code['r_address'];?>" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">SHIPMENT DETAILS</label>
                        </div>
                    </div>
                   <div class="col-lg-6">
                      
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="package" value="<?php echo $row_code['packages2'];?>" placeholder="Package">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="weight" value="<?php echo $row_code['weight2'];?>" placeholder="Weight">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="destination" value="<?php echo $row_code['destination2'];?>" placeholder="Destination">
                        </div>
                        <label>Status</label>
                                <select required class="form-control" name="status">
                                    <option value="<?php echo $row_code['status'];?>" selected><?php echo $row_code['status'];?></option>
                                    <option value="Pending">Pending</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="On Hold">On Hold</option>
                                    <option value="Out for Delivery">Out for Delivery</option>
                                    <option value="Enroute">Enroute</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Returned">Returned</option>
                                </select>
                      
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row_code['qty'];?>" name="quantity" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="origin" value="<?php echo $row_code['origin2'];?>" placeholder="Origin">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Expected Delivery Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="d_date" value="<?php echo $row_code['pickup_date'];?>" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Percentage</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="percentage" value="<?php echo $row_code['percentage2'];?>" placeholder="">
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="current_location" value="<?php echo $row_code['current_location'];?>" placeholder="Enter current_location">
                        </div>
                        
                    </div>
                    <br>
                    <div class="col-lg-12 form-group">
                        <label for="exampleFormControlTextarea1">Comments</label>
                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="2"><?php echo $row_code['comment2'];?></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm text-white" name="submit">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- /container-fluid-->
</div>
<!-- /container-wrapper-->
<?php include('include/footer.php'); ?>
</body>
<?php
    $id=$_GET['id'];
    
    if (isset($_POST['submit'])) {            

            $update_product="UPDATE `shipping` SET `s_name`='$_POST[s_name]',`s_phone`='$_POST[s_phone]',`s_email`='$_POST[s_email]',`s_address`='$_POST[s_address]',`r_name`='$_POST[r_name]',`r_phone`='$_POST[r_phone]',`r_email`='$_POST[r_email]',`r_address`='$_POST[r_address]',`status`='$_POST[status]',`weight2`='$_POST[weight]',`packages2`='$_POST[package]',`qty`='$_POST[quantity]',`origin2`='$_POST[origin]',`destination2`='$_POST[destination]',`current_location`='$_POST[current_location]',`pickup_date`='$_POST[d_date]',`comment2`='$_POST[comment]',`percentage2`='$_POST[percentage]' WHERE id='$id'";

              $sql= mysqli_query($conn, $update_product);


              $insert_history = mysqli_query($conn, "INSERT INTO `histrory`(`id`, `tracking_num`, `location`, `status`, `date_updated`, `time_updated`, `remarks`) VALUES (NULL,'$_POST[tracking]','$_POST[current_location]','$_POST[status]','$date','$time','$_POST[comment]')");

              $reciever=$_POST['r_email'];

              $message=' <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: "Roboto", sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>


<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
               <td style="padding: 40px 0;">
                    
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="text-align:center;padding: 30px 30px 20px">
                                    <h5 style="margin-bottom: 24px; color: #526484; font-size: 15px; font-weight: 400; line-height: 28px;">Dear '.$_POST['r_name'].'<br>We are pleased to inform you that your shipment has now cleared customs and is now ' .$_POST['status'].'</h5>
                                    <h2 style="margin-bottom: 15px; color: #526484;">Tracking Information</h2>
                                    <p style="margin-bottom: 15px;">Tracking Number: '. $row_code['tracking_num'] .'</p>
                                    <p style="margin-bottom: 15px;">Location: '. $_POST['current_location'] .'</p>
                                    <p style="margin-bottom: 15px;">Tracking URL: http://localhost/tracking_system/result?tracking_num='. $row_code['tracking_num'] .'</p>
                                    <p style="margin-bottom: 15px;">Latest International Scan: Customs status updated</p>

                                    <p style="margin-bottom: 15px;">We hope this meets with your approval. Please do not hesitate to get in touch if we can be of any further assistance.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">Copyright © 2020 DashLite. All rights reserved.</p>
                                    
                                    <p style="padding-top: 15px; font-size: 12px;">This email was sent to you as a registered user. To update your emails preferences <a style="color: #6576ff; text-decoration:none;" href="#">click here</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>';

        
        sendMails2('samsonojugo@gmail.com', 'samson', $reciever, $message, 'Cargo Tracking');

        if($sql){
          echo "<script>alert('Edit successfully')</script>";
          echo "<script>window.open('all_product','_self')</script>";
        }else{
                echo "<script>alert('Error Updating')</script>";

        }
        }

  ?>
<!-- Mirrored from www.ansonika.com/sparker/admin_section/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Dec 2018 07:14:58 GMT -->

</html>