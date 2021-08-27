<?php ob_start(); 
$conn =new mysqli('localhost', 'username', 'password' , 'db_name');
        // $conn =new mysqli('localhost', 'servdqvt_serviceswise', 'dequiet1' , 'servdqvt_skilled_db');
        if ($conn->connect_error) {
            echo "<b>Error:</b> Connection failed - $conn->connect_error";
        }


     
     session_start();
     ob_start();
     date_default_timezone_set("Africa/Lagos");   
     
    $date = date('Y-m-d H:i:s');

    
    
    require 'vendor/autoload.php';
use \Mailjet\Resources;
    function sendMails2($from_mail, $from_name, $receiver_mail, $txt, $subject){
  
  
  $mj = new \Mailjet\Client('$key','$key',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "$from_mail",
          'Name' => "$from_name"
        ],
        'To' => [
          [
            'Email' => "$receiver_mail"
            
          ]
        ],
        'Subject' => "$subject",
        // 'TextPart' => "My first Mailjet email",
        'HTMLPart' => "$txt",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());

}


    function encode_txt( $q ) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }
    
    function format_date($date){
        return date('D, M jS Y', strtotime($date));
    }
    
    function format_date2($date){
        return date('H:i A', strtotime($date));
    }



?>
