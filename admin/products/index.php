<?php 
session_start();
if(!isset($_SESSION["username"])){
  print '<script>window.location.assign("login.php");</script>';//redirect to login if session expired
}else{
    print '<script>window.location.assign("../index.php");</script>';//redirect to login if session expired
} ?>