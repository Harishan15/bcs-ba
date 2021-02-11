<?php
session_start();
include "./config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = 'SELECT role FROM role WHERE email = :email';
$stmt = $con->prepare($query);
$stmt->execute(['email'=>$email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$role = $row['role'];

if($role=="candidate"){
    $query1 = 'SELECT cpassword,cid FROM candidate WHERE cemail = :email';
    $stmt1 = $con->prepare($query1);
    $stmt1->execute(['email'=>$email]);
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $cdbpassword = $row1['cpassword'];
    $cid = $row1['cid'];
    $_SESSION['cid'] = $cid;

    if($cdbpassword==$password){
        echo "1";
    }else if($cdbpassword!=$password){
        echo "2";
    }
}else if($role=="manager"){
    $query2 = 'SELECT mpassword,mid FROM manager WHERE memail = :email';
    $stmt2 = $con->prepare($query2);
    $stmt2->execute(['email'=>$email]);
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $mdbpassword = $row2['mpassword'];
    $mid = $row2['mid'];
    $_SESSION['mid'] = $mid;

    if($mdbpassword==$password){
        echo "3";
    }else if($mdbpassword!=$password){
        echo "4";
    }
}









?>