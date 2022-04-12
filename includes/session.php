<?php 
require_once("connector.php");

session_start(); 
if(!isset($_SESSION['ID'])) {
    header("location: index.php");
    exit();
}