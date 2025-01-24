<?php
// Check if the 'name' parameter is set in the URL
if (isset($_GET['name'])) {
    // Get the name from the URL parameter
    $name = htmlspecialchars($_GET['name']);
} else {
    $name = "Guest";  // Default value if no name is provided
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Title and Discription start -->
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Success! Your Request Has Been Received</title>

    <meta name="description"
        content="call Us : 📞 8657374916 | 7400247458 Thank you for choosing Clean Wheel. Your request has been successfully submitted, and our team will contact you shortly.">

    <meta name="Keywords" content="Success page, booking confirmation, car wash booking success, Clean Wheel thank you, auto care service request.">

    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="English">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Pragma" content="no-cache" />
    <!-- Title and Discription close -->
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- Uicons Regular Rounded css -->
    <link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="assets/css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


    <style>
        .success {
            text-align: center;
            margin: auto;
            background-color: gray;
            color: black;
        }

        .successful {
            text-align: center;
            margin: auto;
            padding: 40px 50px 20px 50px;
            font-size: 40px !important;
            line-height: 50px;
            color: black;
        }

        .imgg {
            max-width: 100%;
        }

        .img-size {
            width: 100px;
            height: 100px;
            margin: auto;
            margin-top: 25px;
            margin-bottom: -20px;
        }

        .text-black {
            padding-bottom: 10px !important;
        }

        .color-success {
            color: #6BC839;
        }

        .pp {
            text-align: center;
        }

        @media (max-width: 576px) {

            /* Extra small devices (phones) */
            .successful {
                font-size: 15px !important;
            }
        }
    </style>

</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <!-- <div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/fav.png" alt="Konstruk - Construction & Building Html Template "></div>
                </div>
            </div>              
        </div> -->
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!-- Header Pages -->
        <?php include 'header.php'; ?>
        <!-- Header Pages -->

        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img1">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        Submission Successful
                    </h1>
                    <span class="sub-text">Thank you for reaching out! Your submission has been received successfully, and <br>we’ll get back to you shortly.</span>
                    <ul class="breadcrumbs-area">
                        <li title="Go to konstruk">
                            <a class="active" href="index.php">Home</a>
                        </li>
                        <li>Daily Car Wash</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->


        <div class="container pt-20 pb-4">
            <div class="img-size">
                <img class="imgg" src="assets/images/home/success.png" />
            </div>
            <div class="successful text-black">
                Thank you, <span class="font-weight-bold"><?php echo $name; ?>,</span> for your inquiry!<br>
                Your Request Has Been <span class="bold-name color-success">Successfully</span> Submited
            </div>
            <div class="pp text-black">
                Our dedicated care coordinator will reach out to you as soon as possible to assist you further.
            </div>
        </div>



        <!-- Cta Start -->
        <div class="rs-cta cta-style1 cta-modify1 bg18">
            <div class="container">
                <div class="cta-content text-center pt-110 pb-125 md-pt-65 md-pb-65">
                    <div class="title-heading mb-40">
                        <span class="sub-text">Emargency Services</span>
                        <h2 class="title">Emergency services call us</h2>
                    </div>
                    <div class="address-wrap">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content-txt">
                            <a href="tel:+918657374916">+91-8657374916</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta End -->


        <!-- Footer Pages -->
        <?php include 'footer.php'; ?>
        <!-- Footer Pages -->