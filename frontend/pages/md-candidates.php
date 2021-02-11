<!DOCTYPE html>
<html lang="en">

<?php

include "./config.php";

$query = 'SELECT * FROM candidate';
$stmt = $con->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll();
$rowcount = $stmt->rowCount();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- ANCHOR CSS Links -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/md-candidates.css" rel="stylesheet">

    <!-- ANCHOR Font Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand pb-0 pt-1 my-0">
        <a class="navbar-brand pb-2" href="#">Registered Candidates - <?php echo $rowcount ?></a>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav ml-auto my-0">
                <li class="nav-item ">
                    <a class="nav-link syllabus-link pb-3" href="./md-syllabus.php">Syllabus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link candidate-link pb-3 active" href="#">Candidates</a>
                </li>
            </ul>
            <div class="form-inline my-0 user-profile pb-2">
                <h5 class="profile-name text-right pb-1">Dr. Viraj Pinto Jayawardena<br> <span class="role-name">Manager </span> </h5>
                <img class="profile-picture-nav mt-1" src="../profile-pics/manager/222222.jpg" alt="User Profile">
                <!-- <input class="form-control" type="submit" placeholder="Search"> -->
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- ANCHOR Heading -->
        <div class="row custom-row justify-content-start">
            <h2 class="head-text">Candidates Details</h2>
        </div>

        <div class="row custom-row justify-content-start">
            <!-- ANCHOR Card starts here -->
            <table class="table bordered custom-table">
                <thead>
                    <tr>
                        <th scope="col" class="table-head text-center"></th>
                        <th scope="col" class="table-head">Candidate Name</th>
                        <th scope="col" class="table-head text-center">Exams done</th>
                        <th scope="col" class="table-head text-center">Last login</th>
                        <th scope="col" class="table-head"></th>
                        <th scope="col" class="table-head"></th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    foreach($row as $student){
                ?>
                    <!-- ^^^^^^^^^^^^^^^^^^ Chapter 01 ^^^^^^^^^^^^^^^^^^ -->
                    <tr>
                        <td scope="row" class="text-center">
                            <img class="profile-picture" src="../profile-pics/candidate/1.jpg" alt="User Profile">
                        </td>
                        <td><?php echo $student['cfname'].'&nbsp'.$student['clname']; ?></td>
                        <td class="text-center"><?php echo $student['exams'] ?></td>
                        <td class="text-center">09/11/2019 - 06:12</td>
                        <td class="text-center">
                            <a href="#" class="btn custom-btn pic2">
                                <img class="viewall" src="../icons/view-all.png" alt="User Profile">
                                View&nbsp;Results
                            </a>
                        </td>
                    </tr>
<?php
                    }
?>
       


                
                </tbody>
            </table>
        </div>

        <div class="row custom-row justify-content-center mb-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination ">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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