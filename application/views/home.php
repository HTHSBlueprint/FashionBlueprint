
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Fashionism - Change Your View of the World</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>Fashion Blueprint</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Already a fashionista?</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- Search Bar -->
<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-responsive" src="assets/img/logo.png" alt="FashionBlueprint">
            </div>
            <div class="col-md8">
                <h1><br/><br/>Fashion Your Seatbelts...<br/>
                    It's Time to Ready Up.</h1>

            </div><!-- /col-lg-6 -->
        </div>
    </div><!-- /container -->
</div><!-- /headerwrap -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>Your Outfit Will<br/>Look Wonderful Now</h1>
            <h3>What are you going to be wearing today? How are you going to dress? Continue below to find out...</h3>
        </div>
    </div><!-- /row -->

    <div class="row mt centered">
        <div class="col-lg-4">
            <img src="assets/img/clouds.png" width="180" alt="">
            <h4>1 - Weather Compatible Capabilities</h4>
            <p>Figure out the ideal choices for the weather and temperature! Would you want to be a penguin in Hawaii? Or a tiger in the Arctic?</p>
        </div><!--/col-lg-4 -->

        <div class="col-lg-4">
            <img src="assets/img/grades.png" width="180" alt="">
            <h4>2 - Grade Integration</h4>
            <p>Acing math? Failing Spanish? Want to show your teachers how you feel about school? Dress accordingly!</p>

        </div><!--/col-lg-4 -->

        <div class="col-lg-4">
            <img src="assets/img/location.png" width="180" alt="">
            <h4>3 - Location Choice</h4>
            <p>What clothes are you going to need? Would you want to wear a suit to a pool party? Shorts to a wedding (maybe)? Look out world...</p>

        </div><!--/col-lg-4 -->
    </div><!-- /row -->
</div><!-- /container -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>Our Awesome Algorithm.<br/>Fashion Lovers.</h1>
            <h3>It is a long established fact that people who use this algorithm are the best dressed at parties.</h3>
        </div>
    </div><!-- /row -->

    <!-- Form -->
    <div class="container">
        <div class="row mt centered">
            <form class="form-inline" role="form" action="<?php echo base_url('form_handler')?>" method="post">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="location" placeholder="Enter location (Example: New York, NY)">
                </div>
                </br></br>
                <div class="radio">
                    <label>
                        <b> What is your gender? </b>
                        <input type="radio" name="gender" id="optionsRadios1" value="male" checked>
                        Male
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios2" value="female">
                        Female
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios2" value="unisex">
                        Unisex
                    </label>
                </div>
                <p><b>What was your last math test grade (not average)?</b></p>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Grade</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="mathTest" placeholder="Enter Math Grade">
                </div>
                <br/><br/>
                <div class="col-lg-6 col-lg-offset-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Prepare my Outfit!</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div><!-- /container -->

<div class="container">
    <p class="centered">Created by Blueprint Team</p>
</div><!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap-theme.min.js"></script>
</body>
</html>