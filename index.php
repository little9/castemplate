<?php
include_once("CAS.php");
phpCAS::client(CAS_VERSION_2_0,'cas.example.com',443,'/cas/');
phpCAS::setCasServerCACert("cacert.pem");
if (phpCAS::isAuthenticated())
  {
    echo "User:" . phpCAS::getUser();
    echo "<a href='./logout.php'>Logout</a>";
  }else{
  echo "<a href='./login.php'>Login</a>";
}
?>


