<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to BCS BA Portal</title>

    <!-- <link rel="icon" href="../images/icon.png"> -->
    <link rel="stylesheet" href="./frontend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./frontend/css/signin2.css">
    <link rel="stylesheet" href="./frontend/css/floating-labels2.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <!-- <script type="text/javascript" src="./frontend/assets/lib/jquery-1.11.1.js"></script> -->
    <script type="text/javascript" src="./frontend/assets/dist/jquery.validate.js"></script>

    
    <!-- ANCHOR SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</head>


<body>


<div class="container">
    <div class="row justify-content-start d-flex">
            <img src="./frontend/images/bcs-logo.svg" alt="BCS logo" class="bcs-logo">
    </div>
    <div class="row justify-content-end d-flex">
            <img src="./frontend/images/final-logo.png" alt="Matrix Logo" class="matrix-logo">
    </div>

    <!-- Sign in text -->
    <div class="row justify-content-start input-block">
        <h3>
            Welcome to The <br>
            Business Anlaysis Portal
        </h3>
        <p class="signin-text">
            Sign in
        </p>

        <form id="validateForm" action="" method="POST">

            <div class="form-label-group mt-0 mb-1 form-label-group-row">
                <input type="text" id="mEmail" name="mEmail" class="form-control custom-input" placeholder="Password" autofocus required />
                <label for="mEmail">Email address</label>
            </div>
            <div class="form-label-group mt-0 mb-1 pt-0 pb-0 form-label-group-row">
                <input type="password" id="mPassword" name="mPassword" class="form-control custom-input" placeholder="Password" autofocus required />
                <label for="mPassword">Password</label>
            </div>

            <div class="form-row mt-4">
                <div class="col mt-3 d-flex align-items-center justify-content-start">
                    <button type="submit" name="login" id="continueBtn" class="btn custom-btn">Continue</button>
                </div>
                
                <div class="col d-flex align-items-center justify-content-start">
                    <div class="link-text mt-3 text-right">
                        Don't have an account? 
                        <a href="./frontend/pages/cd-create-account.php" class="link-text-link"> create&nbsp;an&nbsp;account </a>
                    </div>
                </div>
            </div>

        </form>

    </div>
    
    <!-- Sign in text -->
    <!-- <div class="row justify-content-start d-flex">
            <img src="../images/bg3.png" alt="Background image" class="bg3">
    </div> -->

    <!-- bg -->
    <div class="row justify-content-center d-flex">
            <img src="./frontend/images/bg2.png" alt="Background image" class="bg1">
    </div>


    

</div>


    




</body>

    <!-- Script for Validation -->
    <script type="text/javascript">
        $(document).ready(function() {

            $.validator.addMethod("pwcheck", function(value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    &&
                    /[a-z]/.test(value) // has a lowercase letter
                    &&
                    /\d/.test(value) // has a digit
            });
            $("#validateForm").validate({
                onkeyup: false,
                // onfocusout: false,
                rules: {
                    mEmail: {
                        required: true,
                        email: true
                        // remote: {
                        //     url: "../php/checkpassword.php",
                        //     type: "post",
                        //     data: {
                        //         userpassword: function() {
                        //             return $("#inputPassword").val();
                        //         }
                        //     }
                        // }
                    },
                    nicNo: {
                        required: true,
                        minlength: 9,
                        maxlength: 12
                    },
                    mFirstname: {
                        required: true
                    },
                    mLastname: {
                        required: true
                    },
                    mPhone: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 12
                    },
                    mPassword: {
                        required: true,
                        minlength: 8,
                        pwcheck: true
                    },
                    mConfirm: {
                        required: true,
                        // minlength: 8,
                        equalTo: "#newpassword"
                    },
                    mdp: "required"


                },
                messages: {
                    mEmail: {
                        required: "Please enter a Email address",
                        email: "Please enter a valid Email address"
                        // remote: {
                        //     url: "../php/checkpassword.php",
                        //     type: "post",
                        //     data: {
                        //         userpassword: function() {
                        //             return $("#inputPassword").val();
                        //         }
                        //     }
                        // }
                    },
                    nicNo: {
                        required: "Please enter your NIC number",
                        minlength: "Please enter valid NIC number",
                        maxlength: "Please enter valid NIC number"
                    },
                    mFirstname: {
                        required: "Please enter your first name"
                    },
                    mLastname: {
                        required: "Please enter your last name"
                    },
                    mPhone: {
                        required: "Please enter your Contact number",
                        number: "Please enter a valid Contact number",
                        minlength: "Please enter a valid Contact number",
                        maxlength: "Please enter a valid Contact number"
                    },
                    mPassword: {
                        required: "Please provide a Password",
                        minlength: "Use 8 or more characters with a mix of letters, numbers & symbols",
                        pwcheck: "Please choose a strong password. Try a mix of letters, numbers and symbols"
                    },
                    mConfirm: {
                        required: "Please confirm your Password",
                        // minlength: "Use 8 charactors or more for your password",
                        equalTo: "Those passwords didn't match. Try again"
                    },
                    mdp: "Please upload a Profile Picture"
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
                submitHandler: function(form) {
                    
                    var email = $("#mEmail").val();
                    var password = $("#mPassword").val();

                    $.ajax({
                        method: "POST",
                        url: "backend/php/index.php",
                        data: {
                            email       :   email,
                            password    :   password
                        },

                        success: function(data){
                            if($.trim(data)=="1"){
                                alert("CANIDATE - you are signed in");
                            }else if($.trim(data)=="2"){
                                alert("password is wrong");
                            }else if($.trim(data)=="3"){
                                Swal.fire({
                                            icon: 'success',
                                            title: 'Signing In',
                                            showConfirmButton: false,
                                              })
                                              setTimeout(function(){
                                                  window.location.href = "./frontend/pages/md-syllabus.php";
                                              },2000)
                            }else if($.trim(data)=="4"){
                                alert("password is wrong");
                            }
                        },

                        error: function(data){
                            alert("error has been occured");
                        }
                    })
                }
            });


        });
    </script>

</html>