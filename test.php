<?php 
include('function/function.php');

                     // $id=$_GET['id'];
                    $get_code=mysqli_query($conn, "SELECT * FROM `shipping` WHERE tracking_num='TRC227242916'");
                    $row_code=mysqli_fetch_array($get_code);

                    ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
</head>
    
    <?php 

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
                                    <h5 style="margin-bottom: 24px; color: #526484; font-size: 15px; font-weight: 400; line-height: 28px;">Dear '.$row_code['r_name'].'<br>We are pleased to inform you that your shipment has now cleared customs and is now ' .$row_code['status'].'</h5>
                                    <h2 style="margin-bottom: 15px; color: #526484;">Tracking Information</h2>
                                    <p style="margin-bottom: 15px;">Tracking Number: '. $row_code['tracking_num'] .'</p>
                                    <p style="margin-bottom: 15px;">Location: '. $row_code['current_location'] .'</p>
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

echo "$message";

    ?>
   
</html>