<!DOCTYPE html>
<html>

<head>
    
    <html lang="eng">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- SEO Meta description -->
    <meta name="description" content="<?php echo $row_seo['site_description'] ?>">
    <!-- keywords -->
    <meta name="keywords" content="<?php echo $row_seo['site_keyword'] ?>">
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="<?php echo $row_seo['site_name'] ?>" /> <!-- website name -->
    <meta property="og:site" content="<?php echo $row_seo['site_link'] ?>" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <!--title-->
    <title><?php echo $row_seo['site_name']." - ". $row_seo['site_tagline'] ?></title>
    <!--favicon icon-->
    <link rel="icon" href="site_images/<?php echo $row_details['image']; ?>" type="image/png" sizes="16x16">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/simple-lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
</head>

<body id="">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
        <a class="navbar-brand text-white" href="index">My Store</a>
        <!--  -->
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <small class="navbar-text text-white">
            <i class="fa fa-phone-square" aria-hidden="true"></i> Need Help?<br>
            Please fill the Contact Us form
        </small>
    </nav>
    <div class="container" style="padding: 20px;">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="card" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);">
                    <div class="card-body">
                        <div class="container p-4">
                            <form method="POST" id="billing">
                                <h5 class="text-dark">Pay Online and Get a Copy Instantly. Stay Safe, go cashless</h5>
                                <div class="p-4">
                                    <img src="img/20.jpg" width="70"><img src="img/18.jpg" width="70"><img src="img/19.jpg" width="80">
                                </div>
                                <p class="text-dark">Your payment is safe. if anything goes wrong, we've got your back</p>
                                <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->
                                <button class="btn btn-primary" name="submit"> Pay Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="">
                    <div class="card " style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);">
                        <div class="card-body">
                            <h5 class="text-dark">Pay on delivery</h5>
                                <p class="text-dark">Please note: We will never ask you for your password PIN,CVV or full card details over the phone or via email</p>
                                <ul class="text-dark">
                                    <li>Kindly note that you would have to make payment before opening your package.</li>
                                    <li>Once the seal is broken, the item can only be returned if it is damaged, defective or has missing parts.</li>
                                </ul><br>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Proceed </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="assets/sweetalert/sweetalert2.all.min.js"></script>
<script src="js/custom.js"></script>

</html>