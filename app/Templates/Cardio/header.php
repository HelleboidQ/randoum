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
<?php echo $afterBody; //place to pass data / plugable hook zone?>

<div class="container">

<p><img src='<?=Url::templatePath();?>images/nova.png' alt='<?=SITETITLE;?>'></p>
