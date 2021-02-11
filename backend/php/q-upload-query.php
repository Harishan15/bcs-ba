<?php

include "./config.php";

// ANCHOR Inputs from the Form
$question       = $_POST['question'];
$answera        = $_POST['answera'];
$answerb        = $_POST['answerb'];
$answerc        = $_POST['answerc'];
$answerd        = $_POST['answerd'];
$correctAnswer  = $_POST['correctAnswer'];

$chaptertitle   =   $_POST['chaptertitle'];
$query1         = "SELECT chid FROM chapter WHERE chapter = ?";
$stmt1          = $con->prepare($query1);
$stmt1->bindParam(1, $chaptertitle);
$stmt1->execute();
$row1           = $stmt1->fetch(PDO::FETCH_ASSOC);
$chapterno      = $row1['chid'];


// ANCHOR Update the Question Table
$query2 = 'INSERT INTO question(question,chid) VALUES (:question,:chid)';
$stmt2 = $con->prepare($query2);
$stmt2->execute(['question'=>$question,'chid'=>$chapterno]);

// ANCHOR Get the last QID
$queryx = "SELECT * FROM question WHERE qid=(SELECT MAX(qid) FROM question)";
$stmtx = $con->prepare($queryx);
$stmtx->execute();
$rowx = $stmtx->fetch(PDO::FETCH_ASSOC);
$qid = $rowx['qid'];

// ANCHOR Update the Answer Table
$query3 = 'INSERT INTO answer(answer,qid) VALUES (:answer,:qid)';
$stmt3 = $con->prepare($query3);
$stmt3->execute(['answer'=>$answera,'qid'=>$qid]);

$query4 = 'INSERT INTO answer(answer,qid) VALUES (:answer,:qid)';
$stmt4 = $con->prepare($query4);
$stmt4->execute(['answer'=>$answerb,'qid'=>$qid]);

$query5 = 'INSERT INTO answer(answer,qid) VALUES (:answer,:qid)';
$stmt5 = $con->prepare($query5);
$stmt5->execute(['answer'=>$answerc,'qid'=>$qid]);

$query6 = 'INSERT INTO answer(answer,qid) VALUES (:answer,:qid)';
$stmt6 = $con->prepare($query6);
$stmt6->execute(['answer'=>$answerd,'qid'=>$qid]);

// ANCHOR Update the Question Table with the Relevant Answer ID (AID)
if($correctAnswer=="A"){
    $query7 = 'SELECT aid FROM answer where answer = :answer';
    $stmt7 = $con->prepare($query7);
    $stmt7->execute(['answer'=>$answera]);
    $row7 = $stmt7->fetch(PDO::FETCH_ASSOC);
    $aid = $row7['aid'];


    $query77 = 'UPDATE question SET aid = :aid WHERE qid = :qid';
    $stmt77 = $con->prepare($query77);
    $stmt77->execute(['qid'=>$qid,'aid'=>$aid]);
}else if($correctAnswer=="B"){
    $query8 = 'SELECT aid FROM answer where answer = :answer';
    $stmt8 = $con->prepare($query8);
    $stmt8->execute(['answer'=>$answerb]);
    $row8 = $stmt8->fetch(PDO::FETCH_ASSOC);
    $aid = $row8['aid'];


    $query88 = 'UPDATE question SET aid = :aid WHERE qid = :qid';
    $stmt88 = $con->prepare($query88);
    $stmt88->execute(['qid'=>$qid,'aid'=>$aid]);
}else if($correctAnswer=="C"){
    $query9 = 'SELECT aid FROM answer where answer = :answer';
    $stmt9 = $con->prepare($query9);
    $stmt9->execute(['answer'=>$answerc]);
    $row9 = $stmt9->fetch(PDO::FETCH_ASSOC);
    $aid = $row9['aid'];


    $query99 = 'UPDATE question SET aid = :aid WHERE qid = :qid';
    $stmt99 = $con->prepare($query99);
    $stmt99->execute(['qid'=>$qid,'aid'=>$aid]);
}else if($correctAnswer=="D"){
    $query10 = 'SELECT aid FROM answer where answer = :answer';
    $stmt10 = $con->prepare($query10);
    $stmt10->execute(['answer'=>$answera]);
    $row10 = $stmt10->fetch(PDO::FETCH_ASSOC);
    $aid = $row10['aid'];


    $query11 = 'UPDATE question SET aid = :aid WHERE qid = :qid';
    $stmt11 = $con->prepare($query11);
    $stmt11->execute(['qid'=>$qid,'aid'=>$aid]);
}

?>