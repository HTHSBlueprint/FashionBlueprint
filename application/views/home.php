
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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

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

<!-- Analytics Tracking -->
<?php include_once("analyticstracking.php") ?>


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
                <li><a href="#form">Already a fashionista?</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-middle">
                <a href="<?php echo site_url('help')?>"><button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-question-sign"></span>
                </button></a>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<!-- Search Bar -->
<div id="headerwrap">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <img class="img-responsive" src="assets/img/logo1.png" alt="FashionBlueprint" height="75%" width="75%">
            </div>
            <div class="col-md8">
                <h1><br/><br/><br/>Fashion Your Seatbelts...<br/>
                    It's Time to Ready Up.</h1>

            </div><!-- /col-lg-6 -->
        </div>
    </div><!-- /container -->
</div><!-- /headerwrap -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>How Will Your<br/>Outfit End Up?</h1>
            <h3>This one-of-a-kind web application provides a solid blueprint for your daily fashion decisions. Look through some of our samples and see which one of them may be you in a matter of minutes!
            Remember, wearing clothes doesn't end at home...</h3>
        </div>
    </div><!-- /row -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-4 col-lg-offset-4">
            <div id = "myCarousel" class = "carousel slide carousel-fade" data-ride="carousel">
                <ol class = "carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <div class = "carousel-inner">
                    <div class = "item active">
                        <img src = "assets/img/samp1.png" alt = "Black" class = "img-responsive">
                        <div class="carousel-caption">
                            <p>Feeling cold? Be a little bold!</p>
                        </div>
                    </div>

                    <div class = "item">
                        <img src = "assets/img/samp2.png" alt = "Black" class = "img-responsive">
                        <div class="carousel-caption">
                            <p>Too hot? Time to wear a top!</p>
                        </div>
                    </div>

                    <div class = "item">
                        <img src = "assets/img/samp3.png" alt = "Black" class = "img-responsive">
                        <div class="carousel-caption">
                            <p>Did it start raining? No need to start complaining!</p>
                        </div>
                    </div>

                    <div class = "item">
                        <img src = "assets/img/samp4.png" alt = "Black" class = "img-responsive">
                        <div class="carousel-caption">
                            <p>Going out but want to be comfortable? Look here!</p>
                        </div>
                    </div>

                    <div class = "item">
                        <img src = "assets/img/samp5.png" alt = "Black" class = "img-responsive">
                        <div class="carousel-caption">
                            <p> Cold but want the freedom of your legs? Here's your thing!</p>
                        </div>
                    </div>
                </div>

                <a class = "carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>

                <a class = "carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>

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

<a name="form"></a>
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
            <form class="form-inline" role="form" action="<?php echo site_url('form_handler')?>" method="POST">

                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" name="location" placeholder="Location(City, State/Country)">
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
                <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:550px; height:50px">Prepare my Outfit!</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>Disclaimer</h1>
            <h3>By clicking the above submission button, you enter a non-refundable legal obligation to dress in the exact manner
                demonstrated by the following webpage. Proceed with caution</h3>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
<script src="assets/js/bootstrap-theme.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
