<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/sanvalentino.css" />
    <link rel="canonical" href="www.sanvalentino.com.au/<?php echo $page_canonical?>"/>
    <title>San Valentino | <?php echo $page_title?></title>
</head>
<body>

    <!-- Header -->
    <nav class="navbar">
        <div class="container container-spaced">
            <div class="navbar-header">
                <a class="navbar-brand logo" href="home">
                    <img src="img/logo.png" alt="San Valentino">
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="philosophy">Philosophy</a></li>
                <li><a href="cake">Cake</a></li>
                <li><a href="bread">Bread</a></li>
                <li><a href="dishes">Dishes</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Billboard -->
    <div class="container">
        <div id="billboard" class="center-block">
            <?php if (isset($billboard_image) && $billboard_image != '') {
                echo '<img class="img-responsive" src="'.$billboard_image.'" alt="San Valentino" />';
            }?>
        </div>
    </div>
