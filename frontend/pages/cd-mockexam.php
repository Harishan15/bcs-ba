<!DOCTYPE html>
<html lang="en">

<?php

include "./config.php";

$query = 'SELECT question FROM question LIMIT 2';
$stmt = $con->prepare($query);
$stmt->execute();
$question = $stmt->fetch(PDO::FETCH_ASSOC);

$query1 = 'SELECT qid FROM question WHERE question = :question ';
$stmt1 = $con->prepare($query1);
$stmt1->execute(['question'=>$question['question']]);
$qid = $stmt1->fetch(PDO::FETCH_ASSOC);

$query2 = 'SELECT * FROM answer WHERE qid = :qid';
$stmt2 = $con->prepare($query2);
$stmt2->execute(['qid'=>$qid['qid']]);
$answer = $stmt2->fetchAll();


?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mock Exam</title>

    <link rel="icon" href="../images/icon.png">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cd-mockexam.css">
    <link rel="stylesheet" href="../css/floating-labels.css">
    <!-- <link rel="stylesheet" href="../css/croppie.css" /> -->


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/lib/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="../assets/dist/jquery.validate.js"></script> -->
<!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</head>


<body>

    <form action="" id="validateForm" method="POST">

        <div class="container">

            <!-- <div class="row d-flex align-items-center">
                <h2 class="head-text">Question No. 10</h2>
            </div> -->

            <div class="row justify-content-center">
                <div class="card card-1">
                                                                                                                                                                                                                                                                                                                                        <div class="card-body">

                        <p class="small-heading">
                            Question No. 19
                        </p>

                        <p class="card-text mb-4">
                            <?php echo $question['question']; ?>
                        </p>

                        <p class="small-heading">
                            Answers
                        </p>

                        
                        <?php
                            $answerletter = 'A';
                            $answernumber = '1';
                            foreach($answer as $answers){                               
                        ?>

                        <div class="row mb-3">
                            <div class="col-auto">
                                <div class="alert alert1 alert-success">
                                <?php echo $answerletter ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer-1" id="answer-<?php echo $answernumber ?>" value="option<?php echo $answernumber ?>">
                                    <label class="form-check-label btn text-left" for="answer-<?php echo $answernumber ?>">
                                    <?php echo $answers['answer'];
                                    $answerletter++;
                                    $answernumber++;
                                    ?>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        ?>

                       

                    


                    </div>
                </div>
                <div class="card card-2">
                    <div class="card-body">

                        <p class="custom-card-text">
                            Remaining Time
                        </p>

                        <div class="alert alert-success custom-alert" id=timerClock></div>

                        <p class="custom-card-text">
                            Questions Answered : 09 /20
                        </p>

                        <div class="row pl-3 pr-3">

                            <button type="button" class="m-1 py-2 button3">01</button>
                            <button type="button" class="m-1 py-2 button3">02</button>
                            <button type="button" class="m-1 py-2 button3">03</button>
                            <button type="button" class="m-1 py-2 button3">04</button>
                            <button type="button" class="m-1 py-2 button3">05</button>
                            <button type="button" class="m-1 py-2 button3">06</button>
                            <button type="button" class="m-1 py-2 button3">07</button>
                            <button type="button" class="m-1 py-2 button3">08</button>
                            <button type="button" class="m-1 py-2 button3">09</button>
                            <button type="button" class="m-1 py-2 button3">10</button>
                            <button type="button" class="m-1 py-2 button3">11</button>
                            <button type="button" class="m-1 py-2 button3">12</button>
                            <button type="button" class="m-1 py-2 button3">13</button>
                            <button type="button" class="m-1 py-2 button3">14</button>
                            <button type="button" class="m-1 py-2 button3">15</button>
                            <button type="button" class="m-1 py-2 button3">16</button>
                            <button type="button" class="m-1 py-2 button3">17</button>
                            <button type="button" class="m-1 py-2 button3">18</button>
                            <button type="button" class="m-1 py-2 button3">19</button>
                            <button type="button" class="m-1 py-2 button3">20</button>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row custom-row main-container2 d-flex align-items-center">
                <h2 class="head-text">Question No. 10</h2>
                <h2 class="head-text ml-auto">
                    <div class="btn1">
                        Next Question
                    </div>
                </h2>
                <h2 class="head-text ml-1">
                    <div class="btn2">
                        Edit
                    </div>
                </h2>
            </div>
        </div>

    </form>

</body>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 2, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timerClock").innerHTML = minutes + ": " + seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timerClock").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


</html>