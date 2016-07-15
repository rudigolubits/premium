<!DOCTYPE html>
<html lang="de">
    <head>

        <title>Homepage</title>

        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">



        <link rel="stylesheet" type="text/css" href="src/css/styles.css">
        <link href="src/css/font-awesome.css" rel="stylesheet">

        <script type="text/javascript"></script>

        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">

                <header>
                    <nav id="main-nav-bar" class="navbar navbar-default">
                        <div class="container">

                            <div class="navbar-header">
                                <a class="navbar-brand hidden-xs hidden-sm" href="index.php"><img alt="" src="images/premium_logo"></a>
                                <a class="navbar-brand hidden-lg hidden-md" href="index.php"><img alt="" src="images/logo-mobile-1x.png" srcset="images/logo-mobile-1x.png 1x, images/logo-mobile-2x.png 2x"></a>
                                <button class="toggle-side-menu navbar-toggle" type="button"><span class="fa fa-ellipsis-v"></span></button>
                                <button class="navbar-toggle collapsed" data-target="#navigation" data-toggle="collapse" type="button"><span class="fa fa-navicon"></span></button>
                                <button class="navbar-toggle" type="button"><span class="fa fa-shopping-cart"></span></button>
                            </div>
                            <!-- navbar-header -->

                            <div class="collapse navbar-collapse navbar-right" id="navigation">

                                <ul id="main-nav" class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.php?site=products">Produkte<span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Alle Weine</a></li>
                                            <li><a href="products.html#filter=.red-wines">Rotweine</a></li>
                                            <li><a href="products.html#filter=.white-wines">Weißweine</a></li>
                                            <li><a href="products.html#filter=.rose-wines">Roséweine</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Über Uns</a></li>
                                    <li><a href="index.php?site=contact">Kontakt</a></li>
                                    <li><a href="index.php?site=login">Login</a></li>
                                </ul>

                                <ul id="tool-nav" class="nav navbar-nav hidden-xs hidden-sm">
                                    <li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>
                                </ul>

                            </div>
                            <!-- /.navbar-collapse -->


                            <!-- /.container -->

                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </header>
