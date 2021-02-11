<?php
include "./config.php";

if(isset($_POST['chaptertitle'])){
    $chaptertitle   =   $_POST['chaptertitle'];
    $query1         = "SELECT chid FROM chapter WHERE chapter = ?";
    $stmt1          = $con->prepare($query1);
    $stmt1->bindParam(1, $chaptertitle);
    $stmt1->execute();
    $row1           = $stmt1->fetch(PDO::FETCH_ASSOC);
    $chapterno      = $row1['chid'];
    echo $chapterno;
}
?>