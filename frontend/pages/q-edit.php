<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit the Question</title>

    <!-- ANCHOR CSS Links -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/q-edit.css" rel="stylesheet">

    <!-- ANCHOR Font Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

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

    <div class="container mt-5">
        <!-- ANCHOR Heading -->
        <div class="row custom-row justify-content-start">
            <h2 class="head-text">Edit a Question</h2>
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
                                    <option>Chapter 01 - What is Business Analysis</option>
                                    <option>Chapter 02 - The Competencies of a Business Analyst</option>
                                    <option>Chapter 03 - Strategy Analysis</option>
                                    <option>Chapter 04 - The Business Analysis Process Model</option>
                                    <option>Chapter 05 - Investigation techniques</option>
                                    <option>Chapter 06 - Stakeholder Analysis and Management </option>
                                    <option>Chapter 07 - Modelling Business Processes</option>
                                    <option>Chapter 08 - Defining the solution</option>
                                    <option>Chapter 09 - Making a Business and Financial Case</option>
                                    <option>Chapter 10 - Establishing the Requirements</option>
                                    <option>Chapter 11 - Documenting and Managing Requirements</option>
                                    <option>Chapter 12 - Modelling Requirements</option>
                                    <option>Chapter 13 - Delivering the Requirements</option>
                                    <option>Chapter 14 - Delivering the Business Solution</option>
                                </select>
                            </div>
                        </div>

                        <!-- ANCHOR 2nd Row - Question -->
                        <div class="form-group mb-4">
                            <label for="question">Question</label>
                            <textarea class="form-control" id="question" rows="5" placeholder="Type your question here..">An organization is developing its strategy based on the experience and views of internal Managers. How will strategy develop using this approach?</textarea>
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
                                <textarea class="form-control" rows="4" placeholder="Type your answer for option A here..">In a formal, planned way</textarea>
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
                                <textarea class="form-control" rows="4" placeholder="Type your answer for option B here..">In an iterative, emergent way</textarea>
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
                                <textarea class="form-control" rows="4" placeholder="Type your answer for option C here..">In an entrepreneurial way</textarea>
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
                                <textarea class="form-control" rows="4" placeholder="Type your answer for option D here..">In an incremental, regulated way</textarea>
                            </div>
                        </div>

                        <!-- ANCHOR Submit Button -->

                        <label class="mt-1" for="">Correct Answer</label>
                        <div class="form-row align-items-center justify-content-between">
                            <div class="col-auto my-1">
                                <select class="form-control custom-answer-select" id="chapter-title">
                                    <option>&nbsp;A&nbsp;</option>
                                    <option>&nbsp;B&nbsp;</option>
                                    <option>&nbsp;C&nbsp;</option>
                                    <option>&nbsp;D&nbsp;</option>
                                </select>
                            </div>
                            <div class="col-auto my-1">
                                <button type="submit" class="btn btn-primary custom-btn">Submit</button>
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

</html>