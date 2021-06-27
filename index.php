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
    <title>
        <?php echo $row_seo['site_name']." - ". $row_seo['site_tagline'] ?>
    </title>
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
                <h4 class="text-center p-3">6374eurii54</h4>
                <div class="card" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);">
                    <div class="p-2">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">85% in process</div>
                            <div class="p-2 bd-highlight">Completed</div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-6">
                            <h6>Shipper Information</h6>
                            <hr>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="col-lg-6">
                            <h6>Receiver Information</h6>
                            <hr>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="p-3 bg-dark text-white text-center">SHIPMENT STATUS: ON HOLD</div>
                    <div class="p-3">
                        <h6>Shipment Information</h6>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                            <div class="col-lg-4">
                                <p style="font-size: 13px"><b>Shipper Information</b></p>
                                <p style="margin-top: -20px; font-size: 16px">Lorem ipsum dolor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card " style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);">
                        <div class="card-body">
                            <h6>Shipment History</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" style="font-size: 13px">Order Updated</th>
                                        <th scope="col" style="font-size: 13px">Time</th>
                                        <th scope="col" style="font-size: 13px">Location</th>
                                        <th scope="col" style="font-size: 13px">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 14px">Larry</td>
                                        <td style="font-size: 14px">Mark</td>
                                        <td style="font-size: 14px">Otto</td>
                                        <td style="font-size: 14px">@mdo</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 14px">Larry</td>
                                        <td style="font-size: 14px">Mark</td>
                                        <td style="font-size: 14px">Otto</td>
                                        <td style="font-size: 14px">@mdo</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
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