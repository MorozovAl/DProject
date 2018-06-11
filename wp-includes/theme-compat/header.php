<!DOCTYPE html>
<html lang="en">


<head>
    <title><?php bloginfo('name') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/bodybuilding.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/eat.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/fitness.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/powerlifting.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/training.css" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid container_flex">
        <nav class="navbar navbar-expand-lg navbar-light row_header">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php bloginfo('template_url') ?>/bodybuilding.php">Bodybuilding <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="powerlifting.html">Powerlifting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="fitness.html">Fitness</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="fitness.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">choice1</a>
                            <a class="dropdown-item" href="#">choice2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">choice3</a>
                        </div>
                    </li>

                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
            </div>
        </nav>