<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $title.' - '.SITETITLE;?></title>

    <meta name="msapplication-TileColor" content="#00a8ff"> 
    <meta name="theme-color" content="#ffffff">

    <?php
    echo $meta;//place to pass data / plugable hook zone
    Assets::css([
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', 
        Url::templatePath().'css/normalize.css',
        Url::templatePath().'css/owl.css',
        Url::templatePath().'css/animate.css',
        Url::templatePath().'css/bootstrap.css',
        Url::templatePath().'css/cardio.css',
        Url::templatePath().'fonts/eleganticons/et-icons.css',
        Url::templatePath().'fonts/font-awesome-4.1.0/css/font-awesome.min.css',
    ]);
    echo $css; //place to pass data / plugable hook zone
    ?>
</head>
<body>
    <div class="preloader">
        <img src="<?=Url::templatePath()?>images/img/loader.gif" alt="Preloader image">
    </div>
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?=Url::templatePath()?>images/img/logo.png" data-active-url="<?=Url::templatePath()?>images/img/logo-active.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header id="intro">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="light white">Take care of your body.</h3>
                            <h1 class="white typed">It's the only place you have to live.</h1>
                            <span class="typed-cursor">|</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

