<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="../images/icon.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/md-profilepic-upload.css">
    <link rel="stylesheet" href="../css/croppie.css" />

    <title>Upload your Profile Picture</title>

    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/croppie.js"></script>    

</head>


<body>



    <!-- <form action="../php/signinpass.php" id="validateForm" method="POST"> -->

    <form action="" method="POST">

        <div class="container main-container-full">

            <div class="row custom-row justify-content-start">
                <h2 class="head-text">One more step ahead</h2>
            </div>
            
            

            <div class="row justify-content-center ">
                <div class="card main-container ">
                    <div class="card-body">

                            <div class="card-text d-flex justify-content-center mt-2">
                                Upload your Profile Picture here 👇🏻
                            </div>

                            <div class="row d-flex justify-content-center mt-4">
                                <div id="upload_your_image" class="">
                                    <img src="../images/profile-pic.svg" alt="" class="profile-picture-upload">
                                </div>

                                <div class="form-label-group justify-content-center">
                                    <div id="uploaded_image-1" class="uploaded-image"></div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center mt-4">
                                <div class="form-label-group">
                                    <label class="btn button-label">
                                        Choose file
                                        <input class="inputfile-hide" type="file" name="mdp" id="mdp" accept='image/*' />
                                    </label>
                                </div>
                            </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-end btn-div">
                <!-- The Button -->
                <button type="submit" name="login" id="continueBtn" class="btn custom-btn btn-submit">Continue</button>
            </div>


        </div>

    </form>

    
    <!-- Modal for Image Upload -->
    <div id="uploadimageModal" class="modal" role="dialog">
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
                            <button class="btn crop_image" style="width:200px;">Crop & Upload Image </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Script for Image Crop -->
    <script>
        $(document).ready(function() {

            $image_crop = $('#image_demo').croppie({
                enableExif: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'square' //circle or square
                },
                boundary: {
                    width: 300,
                    height: 300
                }
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
                            // $('#upload_your_image').hide();
                            // $("#upload_div").css("display", "none");
                            $("#upload_your_image").css("display", "none");
                            $('#uploaded_image').html(data);
                            $('#uploaded_image-1').html(data);
                        }
                    });
                })
            });

        });
    </script>

</body>

</html>