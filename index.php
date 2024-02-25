<?php
    include 'core/init.php';
    if($getFromU->loggedIn() === true){
        header('Location: home.php');
    }
?>
<html>

<head>
    <title>Twitter</title>
    <meta charset="UTF-8" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/bird.svg">

    <link rel="stylesheet" href="assets/css/style-complete.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/js/popper.min.js" />
    <link rel="stylesheet" href="assets/js/bootstrap.min.js" />
    <script src="assets/js/jquery-3.1.1.min.js"></script>

    <style>
        .right {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="preloader" id="preloader">
        <div id="loader"></div>
    </div>

    <div class="container-fluid">
        <div class="main-box">
            <div class="main-box-wrapper">
                <div class="row">
                    <div class="right col-md-6 offset-md-3 col-12">
                        <?php include 'includes/login.php';?>
                        <div class="middle">
                            <i class="fa fa-twitter" style="font-size:50px;"></i>
                            <h1>Discover what interests you<br />right now</h1>
                            <span>Join our community today.</span>
                        </div>
                        <?php include 'includes/signup-form.php';?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('preloader')[0];
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 3000);
        };
    </script>

</body>

</html>
