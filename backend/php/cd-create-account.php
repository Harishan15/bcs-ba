<?php
include "./config.php";

$candidateNic = $_POST['candidateNic'];
$candidateFirstName = $_POST['candidateFirstName'];
$candidateLastName = $_POST['candidateLastName'];
$candidateEmail = $_POST['candidateEmail'];
$candidatePhone = $_POST['candidatePhone'];
$candidatePassword = $_POST['candidatePassword'];
$matrixNo = $_POST['matrixNo'];

$query1 = 'INSERT INTO candidate(cnic,cmreg,cfname,clname,cemail,cphone,cstatus,cpassword) VALUES (:cnic,:cmreg,:cfname,:clname,:cemail,:cphone,:cstatus,:cpassword)';
$stmt1 = $con->prepare($query1);

$query2 = 'INSERT INTO role(email,role) VALUES (:email,:role)';
$stmt2 = $con->prepare($query2);


$stmt1->execute(['cnic'=>$candidateNic,'cmreg'=>$matrixNo,'cfname'=>$candidateFirstName,'clname'=>$candidateLastName,'cemail'=>$candidateEmail,'cphone'=>$candidatePhone,'cstatus'=>"1",'cpassword'=>$candidatePassword]);
$stmt2->execute(['email'=>$candidateEmail, 'role'=>'candidate']); 



?>