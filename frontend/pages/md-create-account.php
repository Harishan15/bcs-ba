<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manager - Create new account</title>

    <!-- <link rel="icon" href="../images/icon.png"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/md-create-account.css">
    <link rel="stylesheet" href="../css/floating-labels.css">
    <!-- <link rel="stylesheet" href="../css/croppie.css" /> -->

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/lib/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="../assets/dist/jquery.validate.js"></script>

    <!-- ANCHOR SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</head>


<body>

    <!-- <form action="../php/signinpass.php" id="validateForm" method="POST"> -->

    <form action="" id="validateForm" method="POST">

        <div class="container">
            <div class="row custom-row justify-content-start">
                <h2 class="head-text">Create new account as a Manager</h2>
            </div>
            <div class="row justify-content-center">

                <div class="card main-container ">
                    <div class="card-body">

                        <div class="form-row mt-2   ">
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-12">
                                <input type="text" id="nicNo" name="nicNo" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="nicNo">NIC No.</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-6">
                                <input type="text" id="mFirstname" name="mFirstname" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mFirstname">First name</label>
                            </div>
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-6">
                                <input type="text" id="mLastname" name="mLastname" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mLastname">Last name</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-6">
                                <input type="text" id="mEmail" name="mEmail" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mEmail">Email address</label>
                            </div>
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-6">
                                <input type="text" id="mPhone" name="mPhone" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mPhone">Contact No.</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-label-group mt-0 mb-1 pt-0 pb-0 form-label-group-row col-6">
                                <input type="password" id="mPassword" name="mPassword" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mPassword">Password</label>
                            </div>
                            <div class="form-label-group mt-0 mb-1 form-label-group-row col-6">
                                <input type="password" id="mConfirm" name="mConfirm" class="form-control custom-input" placeholder="Password" autofocus required />
                                <label for="mConfirm">Confirm Password</label>
                            </div>
                        </div>

                        <!-- 
                        <div class="form-row">
                            <div class="col-6 mt-3 form-label-group justify-content-start">
                                <div class="justify-content-start">
                                    <div class="text-left">
                                        <label class="btn button-label">
                                            Choose Profile Picture
                                            <input class="inputfile-hide" type="file" name="mdp" id="mdp" accept='image/*' />
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 mt-3 form-label-group justify-content-start">
                                <div id="uploaded_image-1" class="uploaded-image"></div>
                            </div>
                        </div> -->

                        <div class="form-row mt-4">
                            <div class="col align-self-center">
                                <div class="link-text mt-3">
                                    Already have an account? <br>
                                    <a href="../pages/index.php" class="link-text-link"> Sign in </a>
                                </div>
                            </div>
                            <div class="col align-self-center text-right">
                                <button type="submit" name="login" id="continueBtn" class="btn custom-btn">Continue</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </form>


    <!--/*************************  The Real Script **************************/-->

    <!-- Modal Student (1) -->
    <!-- <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Upload your Profile picture</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 cropped-img">
                            <div id="image_demo" style="width:300px;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center" style="width:300px; padding-top:10px;">
                            <button class="btn btn-success crop_image" style="width:200px;">Crop & Upload Image </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

    <!-- Script for Image Crop -->
    <!-- <script>
        $(document).ready(function() {

            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'square' //circle
                },
                boundary: {
                    width: 300,
                    height: 300
                }
            });


            // $('#upload_image').on('change', function() {
            $('#sdp').on('change', function() {
                // var person = $("sdp");
                var reader = new FileReader();
                reader.onload = function(event) {
                    $image_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function() {
                        console.log('jQuery bind complete');
                    });
                }
                reader.readAsDataURL(this.files[0]);
                $('#uploadimageModal').modal('show');
            });

            // $('#upload_image').on('change', function() {
            $('#mdp').on('change', function() {
                // var person = $("sdp");
                var reader = new FileReader();
                reader.onload = function(event) {
                    $image_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function() {
                        console.log('jQuery bind complete');
                    });
                }
                reader.readAsDataURL(this.files[0]);
                $('#uploadimageModal').modal('show');
            });


            $('.crop_image').click(function(event) {
                $image_crop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    $.ajax({
                        url: "../php/upload.php",
                        type: "POST",
                        data: {
                            "image": response
                        },
                        success: function(data) {
                            $('#uploadimageModal').modal('hide');
                            $('#uploaded_image').html(data);
                            $('#uploaded_image-1').html(data);
                        }
                    });
                })
            });

        });
    </script> -->



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
                        equalTo: "#mPassword"
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
                       $(function(){
                            
                            
                                var nic             = $("#nicNo").val();
                                var mFirstName      = $("#mFirstname").val();
                                var mLastName       = $("#mLastname").val();
                                var mEmail          = $("#mEmail").val();
                                var mPhone          = $("#mPhone").val();
                                var mConfirm        = $("#mConfirm").val();
                            
                                event.preventDefault();
                            
                                $.ajax({
                                    method                  : "POST",
                                    url                     : "../../backend/php/md-create-account.php",
                                    data: {
                                        managerNic          : nic,
                                        managerFirstName    : mFirstName,
                                        managerLastName     : mLastName,
                                        managerEmail        : mEmail,
                                        managerPhone        : mPhone,
                                        managerConfirmPass  : mConfirm
                                    },
                                
                                    success: function(data){
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Account Created',
                                            showConfirmButton: false,
                                              })
                                              setTimeout(function(){
                                                  window.location.href = "../../index.php";
                                              },2000)
                                    },
                                
                                    error: function(data){
                                        alert("error");
                                    }
                                })
                          
                        });
                }
            });


        });
    </script>




</body>

</html>