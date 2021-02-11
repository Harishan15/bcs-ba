<?php
include "./config.php";
session_start();
$mid = $_SESSION['mid'];

$query = 'SELECT mfname,mlname FROM manager WHERE mid = :mid';
$stmt = $con->prepare($query);
$stmt->execute(['mid'=>$mid]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$mfname = $row['mfname'];
$mlname = $row['mlname'];

$chapters = array();

for ($x=1; $x<=14; $x++){
    $query1 = 'SELECT * FROM question WHERE chid = :chid';
    $stmt1 = $con->prepare($query1);
    $stmt1->execute(['chid'=>$x]);
    $row1 = $stmt1->fetchAll();
    $chapterrc = $stmt1->rowcount();
    array_push($chapters,$chapterrc);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- ANCHOR CSS Links -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/md-syllabus.css" rel="stylesheet">

    <!-- ANCHOR Font Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                    <a class="nav-link candidate-link pb-3" href="./md-candidates.php">Candidates</a>
                </li>
            </ul>
            <div class="form-inline my-0 user-profile pb-2">
                <h5 class="profile-name text-right pb-1"><?php echo $mfname.'&nbsp'.$mlname ?><br> <span class="role-name">Manager </span> </h5>
                <img class="profile-picture mt-1" src="../profile-pics/manager/222222.jpg" alt="User Profile">
                <!-- <input class="form-control" type="submit" placeholder="Search"> -->
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- ANCHOR Heading -->
        <div class="row custom-row justify-content-start">
            <h2 class="head-text">Chapter Details</h2>
        </div>

        <div class="row custom-row justify-content-center">
            <!-- ANCHOR Card starts here -->
            <!-- <div class="card custom-card-table"> -->
            <table class="table bordered custom-table">
                <thead>
                    <tr>
                        <th scope="col" class="table-head text-center">Chapter No.</th>
                        <th scope="col" class="table-head">Chapter Title</th>
                        <th scope="col" class="table-head text-center">Weightage</th>
                        <th scope="col" class="table-head text-center">No of Questions</th>
                        <th scope="col" class="table-head"></th>
                        <th scope="col" class="table-head"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 01 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">01</td>
                        <td>What is Business Analysis</td>
                        <td class="text-center">2.5%</td>
                        <td class="text-center"><?php echo $chapters[0]; ?>
                            <!-- <span class="badge badge-dark">10</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 02 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">02</td>
                        <td>The Competencies of a Business Analyst</td>
                        <td class="text-center">2.5%</td>
                        <td class="text-center"><?php echo $chapters[1]; ?>
                            <!-- <span class="badge badge-dark">00</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 03 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">03</td>
                        <td>Strategy Analysis</td>
                        <td class="text-center">7.5%</td>
                        <td class="text-center"><?php echo $chapters[2]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 04 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">04</td>
                        <td>The Business Analysis Process Model</td>
                        <td class="text-center">5%</td>
                        <td class="text-center"><?php echo $chapters[3]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 05 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">05</td>
                        <td> Investigation techniques</td>
                        <td class="text-center">15%</td>
                        <td class="text-center"><?php echo $chapters[4]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 06 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">06</td>
                        <td>Stakeholder Analysis and Management</td>
                        <td class="text-center">10%</td>
                        <td class="text-center"><?php echo $chapters[5]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 07 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">07</td>
                        <td>Modelling Business Processes</td>
                        <td class="text-center">10%</td>
                        <td class="text-center"><?php echo $chapters[6]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 08 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">08</td>
                        <td>Defining the solution</td>
                        <td class="text-center">5%</td>
                        <td class="text-center"><?php echo $chapters[7]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 09 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">09</td>
                        <td>Making a Business and Financial Case</td>
                        <td class="text-center">5%</td>
                        <td class="text-center"><?php echo $chapters[8]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 10 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">10</td>
                        <td>Establishing the Requirements</td>
                        <td class="text-center">7.5%</td>
                        <td class="text-center"><?php echo $chapters[9]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 11 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">11</td>
                        <td>Documenting and Managing Requirements</td>
                        <td class="text-center">7.5%</td>
                        <td class="text-center"><?php echo $chapters[10]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 12 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">12</td>
                        <td>Modelling Requirements </td>
                        <td class="text-center">7.5%</td>
                        <td class="text-center"><?php echo $chapters[11]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 13 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">13</td>
                        <td>Delivering the Requirements</td>
                        <td class="text-center">5%</td>
                        <td class="text-center"><?php echo $chapters[12]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 14 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">14</td>
                        <td>Delivering the Business Solution</td>
                        <td class="text-center">5%</td>
                        <td class="text-center"><?php echo $chapters[13]; ?>
                            <!-- <span class="badge badge-dark">08</span> -->
                        </td>
                        <td class="text-center">
                            <a href="./q-upload.php" class="btn custom-btn pic1">
                                <img class="addmore" src="../icons/add-more.png" alt="User Profile">
                                add&nbsp;more
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;all&nbsp;Questions
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
            <!-- </div> -->



        </div>
    </div>

</body>

</html>

<script>
    $(document).ready(function() {
        $(".pic1").mouseenter(function() {
            $(this).children(".addmore").attr('src', '../icons/add-more2.png');
            $(this).css("color", "#65AF03");
            $(this).css("background-color", "#ffffff");

        });
        $(".pic1").mouseleave(function() {
            $(this).children(".addmore").attr('src', '../icons/add-more.png');
            $(this).css("color", "#ffffff");
            $(this).css("background-color", "#65AF03");

        });
        $(".pic2").mouseenter(function() {
            $(this).css("color", "#ffffff");
            $(this).css("background-color", "#65AF03");
            $(this).children(".viewall").attr('src', '../icons/view-all1.png');

        });
        $(".pic2").mouseleave(function() {
            $(this).css("color", "#65AF03");
            $(this).css("background-color", "#ffffff");
            $(this).children(".viewall").attr('src', '../icons/view-all.png');
        });
    });
</script>