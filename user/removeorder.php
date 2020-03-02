<?php
include('../login/login.php'); // Includes Login Script
// include('orders.php');
if(isset($_SESSION['login_user'])){
    if($_SESSION['user_type']=='admin'){
      header("location: ../login");     
    } 
}
else {
  header("location: ../login");
}

require_once('../databaseFunction/DatabaseFunctions.php');
require '../configrationfile.php'; 
$db = new Database("localhost",$DBUserName,$DBPassword, "cafedb");
if(isset($_GET['order_id'])){

    $removeOrder = $db->deleteOrder($_GET['order_id']);
    if($removeOrder){
      echo json_encode(['code'=>200, 'message'=> 'order has been deleted']);

  }
  else{
    echo json_encode(['code'=>500, 'message'=> 'internal server error']);
  }
}