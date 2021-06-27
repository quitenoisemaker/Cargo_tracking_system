<?php
include('../function/function.php');



if (!isset($_SESSION['username'])) {
  header('location: login');
}

function format_date($date){
        return date('D, M jS Y', strtotime($date));
    }


    $date = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.ansonika.com/sparker/admin_section/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Dec 2018 07:14:58 GMT -->
<?php include ('include/header.php'); ?>
<div class="box_general">
    <div class="card">
        <div class="card-header alert alert-warning text-center">
            <b>Add Shipment</b>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-between align-items-center p-4">
                    <div class="col-lg-12">

                        <?php 
                    
                    $get_code=mysqli_query($conn, "SELECT * FROM `tracking_number`");
                    $row_code=mysqli_fetch_array($get_code);

                    $code=$row_code['tracking'];
                    $code++;
                    $update_code=mysqli_query($conn, "UPDATE `tracking_number` SET `tracking`='$code' WHERE id='1'");

                    ?>
                        <!-- Button -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tracking Number <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php 
                    
                    $get_code=mysqli_query($conn, "SELECT * FROM `tracking_number`");
                    $row_code=mysqli_fetch_array($get_code); 
                    echo "TRC".$row_code['tracking'] ?>" readonly required name="tracking" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputEmail1">SHIPPER DETAILS</label>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_name" placeholder="Shipper name">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="s_address" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="exampleInputEmail1">RECIEVER DETAILS</label>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_name" placeholder="Reciever name">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="r_address" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">SHIPMENT DETAILS</label>
                        </div>
                    </div>
                   <div class="col-lg-6">
                      
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="package" placeholder="Package">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="weight" placeholder="Weight">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="destination" placeholder="Destination">
                        </div>
                        <label>Status</label>
                                <select required class="form-control" name="status">
                                    <option value="" selected disabled>Select status</option>
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
                            
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantity" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="origin" placeholder="Origin">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Expected Delivery Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="d_date" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Percentage</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="percentage" placeholder="">
                        </div>
                        
                    </div>
                    <br>
                    <div class="col-lg-12 form-group">
                        <label for="exampleFormControlTextarea1">Comments</label>
                        <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm text-white" name="submit">
                            Add
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

    if (isset($_POST['submit'])) {
        

$insert_shipping = mysqli_query($conn, "INSERT INTO `shipping`(`id`, `s_name`, `s_phone`, `s_email`, `s_address`, `r_name`, `r_phone`, `r_email`, `r_address`, `tracking_num`, `status`, `weight2`, `packages2`, `qty`, `origin2`, `destination2`, `date_created2`, `pickup_date`, `pickup_time`, `comment2`, `percentage2`) VALUES (NULL, '$_POST[s_name]', '$_POST[s_phone]', '$_POST[s_email]', '$_POST[s_address]', '$_POST[r_name]', '$_POST[r_phone]', '$_POST[r_email]', '$_POST[r_address]', '$_POST[tracking]', '$_POST[status]', '$_POST[weight]', '$_POST[package]', '$_POST[quantity]', '$_POST[origin]', '$_POST[destination]', '$date', '$_POST[d_date]', '$_POST[d_date]', '$_POST[comment]', '$_POST[percentage]')");

        if($insert_shipping){
          echo "<script>alert('Subimitted successfully')</script>";
          // echo "<script>window.open('user_account.php','_self')</script>";
        }else{
          echo "<script>alert('Opp! Error')</script>";
        }
  

    }


  ?>
<!-- Mirrored from www.ansonika.com/sparker/admin_section/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Dec 2018 07:14:58 GMT -->

</html>