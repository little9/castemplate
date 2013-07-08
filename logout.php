<?php
include_once('CAS.php');
phpCAS::client(CAS_VERSION_2_0,'cas.example.com',443,'/cas/');

phpCAS::setCasServerCACert('cacert.pem');

if (phpCAS::isAuthenticated())
  {
    phpCAS::logout();
  }else{
  header('location: ./index.php');
}
?>