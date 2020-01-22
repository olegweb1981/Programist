<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap" rel="stylesheet">
    
<?php wp_head(); ?>

</head>
<body <?php body_class();?>>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <!--<div class="logo-img">
                    <a href="#"><?php the_custom_logo(); ?></a>
                </div>-->
                
                <div class="menu">

                    <?php shailan_dropdown_menu(); ?>
                    
                </div>
                <div class="logo">
                    <h1>STRONGLY TYPED</h1>
                </div>
                <h4>A RESPONSIVE HTML5 SITE TEMPLATE. MANUFACTURED BY HTML5 UP.</h4>
            </div>
        </div>