
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
    <link href="/css/main2.css" rel="stylesheet">
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
            <a class="navbar-brand" href="home"><b>Fashion Blueprint</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Already a fashionista?</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<br/><br/>

<div class="container">
    <div class="row centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1>After All of Your<br/>Work Here's the Result!</h1>
            <h3>Congratulations on your first step towards a brighter future for coming generations! If you continue on this path,
            your life will fa-shine brightly on you!</h3>
        </div>
    </div><!-- /row -->
</div>

<div class="container" style="position:relative">
    <div class="row">
        <div class="col-lg-6">
                <img id="base" src="../assets/img/clothes/<?php echo $gender;?>" alt="FashionBlueprint">
                <img id="hat" src="../assets/img/clothes/<?php echo $hat;?>" alt="FashionBlueprint">
                <img id="shirt" src="../assets/img/clothes/<?php echo $shirt;?>" alt="FashionBlueprint">
                <img id="pants" src="../assets/img/clothes/<?php echo $pants;?>" alt="FashionBlueprint">
        </div>
        <div class="col-lg-12">
            <div class="row centered">
                <h4> <?php echo $name;?>'s Unique Final Outfit!</h4>
                <p>This is how you will be looking in a matter of minutes! Take your first steps towards this future...</p>
            </div>
        </div>
        </div>
    </div>
</div>

<br/><br/><br/><br/><br/><br/>
<div class="container">
    <div class="row mt centered">
        <div class="col-lg-4 col-lg-offset-6">
           <a href=/#form><button type="button" class="btn btn-danger" style="width:500px; height:100px"><b><font size=5>Let's Try Again!</font></b></button></a>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    <script src="../assets/js/bootstrap-theme.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>