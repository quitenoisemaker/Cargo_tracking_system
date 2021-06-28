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