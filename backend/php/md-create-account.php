<?php
include "./config.php";

$managerNic = $_POST['managerNic'];
$managerFirstName = $_POST['managerFirstName'];
$managerLastName = $_POST['managerLastName'];
$managerEmail = $_POST['managerEmail'];
$managerPhone = $_POST['managerPhone'];
$managerConfirmPass = $_POST['managerConfirmPass'];

$query1 = 'INSERT INTO manager(mnic,mfname,mlname,memail,mphone,mstatus,mpassword) VALUES (:mnic,:mfname,:mlname,:memail,:mphone,:mstatus,:mpassword)';
$stmt1 = $con->prepare($query1);

$query2 = 'INSERT INTO role(email,role) VALUES (:email,:role)';
$stmt2 = $con->prepare($query2);


$stmt1->execute(['mnic'=>$managerNic,'mfname'=>$managerFirstName,'mlname'=>$managerLastName,'memail'=>$managerEmail,'mphone'=>$managerPhone,'mstatus'=>"1",'mpassword'=>$managerConfirmPass]);
$stmt2->execute(['email'=>$managerEmail, 'role'=>'manager']); 



?>