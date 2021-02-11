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
    <title>View full question</title>

    <link rel="icon" href="../images/icon.png">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/md-viewfull-question.css">
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

        <nav class="navbar navbar-expand pb-0 pt-1 my-0">
            <a class="navbar-brand pb-2 " href="#">Business Analysis Portal</a>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav ml-auto my-0">
                    <li class="nav-item ">
                        <a class="nav-link syllabus-link pb-3 active " href="#">Syllabus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link candidate-link pb-3" href="#">Candidates</a>
                    </li>
                </ul>
                <div class="form-inline my-0 user-profile pb-2">
                    <h5 class="profile-name text-right pb-1">Dr. Viraj Pinto Jayawardena<br> <span class="role-name">Manager </span> </h5>
                    <img class="profile-picture mt-1" src="../profile-pics/manager/222222.jpg" alt="User Profile">
                    <!-- <input class="form-control" type="submit" placeholder="Search"> -->
                </div>
            </div>
        </nav>

        <div class="container">

            <!-- <div class=" mt-5">
                <a class="btn btn-outline-light">Back to All Questions</a>
            </div> -->

            <div class="row custom-row d-flex align-items-center">
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

            <div class="row justify-content-center">

                <div class="card main-container ">
                    <div class="card-body">

                        <p class="small-heading">
                            Question 
                        </p>

                        <p class="card-text mb-4">
                             <?php echo $question['question']; ?>
                        </p>

                        <p class="small-heading">
                            Answers
                        </p>

                        <?php
                            $answerletter = 'A';
                            foreach($answer as $answers){                               
                        ?>

                        <div class="row">
                            <div class="col-auto">
                                <div class="alert alert1 alert-success">
                                    <?php echo $answerletter ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert2 alert-success">
                                    <?php echo $answers['answer'];
                                    $answerletter++;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                    ?>
                    

                

                        <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer-1" id="exampleRadios1" value="option1">
                            <label class="form-check-label btn" for="exampleRadios1">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia, non!
                            </label>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>

    </form>

    <!-- Script for Validation -->
    <script type="text/javascript">
        // $(document).ready(function() {
        //     $(".form-input-check").onclick({
                
        //     });


        // });

        // $(document).ready(function() {
        //     //set initial state.
        //     $('.form-check-input').val(this.checked);

        //     $('.form-check-input').change(function() {
        //         if(this.checked) {
        //             var returnVal = confirm("Are you sure?");
        //             $(this).prop("checked", returnVal);
        //         }
        //     $('.form-check-input').val(this.checked);        
        //     });
        // });

    </script>




</body>

</html>