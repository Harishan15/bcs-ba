<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question Upload</title>

    <!-- ANCHOR CSS Links -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/q-upload.css" rel="stylesheet">

    <!-- ANCHOR Font Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- ANCHOR JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- ANCHOR SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>

    <nav class="navbar navbar-expand pb-0 pt-1 my-0">
        <a class="navbar-brand pb-2" href="#">Business Analysis Portal</a>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav ml-auto my-0">
                <li class="nav-item ">
                    <a class="nav-link syllabus-link pb-3 active" href="#">Syllabus</a>
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

    <div class="container mt-5">
        <!-- ANCHOR Heading -->
        <div class="row custom-row justify-content-start">
            <h2 class="head-text">Add new Question</h2>
        </div>

        <div class="row custom-row justify-content-center">
            <!-- ANCHOR Card starts here -->
            <div class="card card-custom">
                <div class="card-body">
                    <form action="" method="POST">
                        <!-- ANCHOR 1st Row - Chapter -->
                        <div class="form-row mb-4">
                            <!-- <div class="form-group col-md-3">
                                <label for="chapter-no">Chapter No.</label>
                                <select class="form-control custom-select" id="chapter-no">
                                    <option class="opt">01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                </select>
                            </div> -->
                            <div class="form-group col-md-12 ">
                                <label for="chapter-title">Chapter</label>
                                <select class="form-control custom-select" id="chapter-title">
                                    <option>What is Business Analysis</option>
                                    <option>The Competencies of a Business Analyst</option>
                                    <option>Strategy Analysis</option>
                                    <option>The Business Analysis Process Model</option>
                                    <option>Investigation techniques</option>
                                    <option>Stakeholder Analysis and Management </option>
                                    <option>Modelling Business Processes</option>
                                    <option>Defining the solution</option>
                                    <option>Making a Business and Financial Case</option>
                                    <option>Establishing the Requirements</option>
                                    <option>Documenting and Managing Requirements</option>
                                    <option>Modelling Requirements</option>
                                    <option>Delivering the Requirements</option>
                                    <option>Delivering the Business Solution</option>
                                </select>
                            </div>
                        </div>

                        <!-- ANCHOR 2nd Row - Question -->
                        <div class="form-group mb-4">
                            <label for="question">Question</label>
                            <textarea class="form-control" id="question" rows="5" placeholder="Type your question here.."></textarea>
                        </div>

                        <!-- ********************************************************************************************** -->
                        <label class="mb-3" for="">Multiple answers for the Question</label>

                        <!-- ANCHOR (1st) new row - Answer option -->
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <div class="alert alert-success alert-text pl-0 pr-0 text-center" role="alert">
                                    <span class="">
                                        A
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-11  custom-textbox">
                                <textarea class="form-control" id="answera" rows="5" placeholder="Type your answer for option A here.."></textarea>
                            </div>
                        </div>

                        <!-- ANCHOR (2nd) new row - Answer option -->
                        <div class="form-row">
                            <div class="form-group col-md-1 ">
                                <div class="alert alert-success alert-text pl-0 pr-0 text-center" role="alert">
                                    <span class="">
                                        B
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-11 custom-textbox">
                                <textarea class="form-control" id="answerb" rows="5" placeholder="Type your answer for option B here.."></textarea>
                            </div>
                        </div>

                        <!-- ANCHOR (3rd) new row - Answer option -->
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <div class="alert alert-success alert-text pl-0 pr-0 text-center" role="alert">
                                    <span class="">
                                        C
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-11 custom-textbox">
                                <textarea class="form-control" id="answerc" rows="5" placeholder="Type your answer for option C here.."></textarea>
                            </div>
                        </div>

                        <!-- ANCHOR (4st) new row - Answer option -->
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <div class="alert alert-success alert-text pl-0 pr-0 text-center" role="alert">
                                    <span class="">
                                        D
                                    </span>
                                </div>
                            </div>
                            <div class="form-group col-md-11 custom-textbox">
                                <textarea class="form-control" id="answerd" rows="5" placeholder="Type your answer for option D here.."></textarea>
                            </div>
                        </div>

                        <!-- ANCHOR Submit Button -->

                        <label class="mt-1" for="">Correct Answer</label>
                        <div class="form-row align-items-center justify-content-between">
                            <div class="col-auto my-1">
                                <!-- <label class="mr-sm-2 sr-only" for=""></label> -->
                                <!-- <label for="chapter-title" class="mt-5">Correct Answer</label> -->
                                <select id="correctAnswer" class="form-control custom-answer-select" id="chapter-title">
                                    <option value="A">&nbsp;A&nbsp;</option>
                                    <option value="B">&nbsp;B&nbsp;</option>
                                    <option value="C">&nbsp;C&nbsp;</option>
                                    <option value="D">&nbsp;D&nbsp;</option>
                                </select>
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" id="submit" class="btn btn-primary custom-btn" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="row custom-row-hidden justify-content-center">
            <h4>Mobile view is not available</h4>
            <h6>Please use a computer for this website</h6>
        </div> -->

    </div>

</body>

<script>
$(function(){
    $("#submit").click(function(event){
        var chaptertitle = $("#chapter-title").val();
        var question = $("#question").val();
        var answera = $("#answera").val();
        var answerb = $("#answerb").val();
        var answerc = $("#answerc").val();
        var answerd = $("#answerd").val();
        var correctAnswer = $("#correctAnswer").val();

        event.preventDefault();

        $.ajax({
            method: "POST",
            url: "../../backend/php/q-upload-query.php",
            data: {
                question        : question,
                answera         : answera,
                answerb         : answerb,
                answerc         : answerc,
                answerd         : answerd,
                correctAnswer   : correctAnswer,
                chaptertitle    : chaptertitle
            },

            success: function(data){
                Swal.fire({
                    icon: 'success',
                    title: 'Question Added',
                    showConfirmButton: false,
                      })
                      setTimeout(function(){
                          window.location.href = "./q-upload.php";
                      },2000)
            },

            error: function(data){
                alert("error has occurred");
            }
        });
    });
});
</script>

</html>