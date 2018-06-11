<!DOCTYPE html>
<html lang="en">


<head>
    <title><?php bloginfo('name') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/bodybuilding.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/eat.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/fintess.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/powerlifting.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/training.css" type="text/css" />
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
                    <!--<li class="nav-item active">
                        <a class="nav-link disabled" href="<?php bloginfo('template_url') ?>/bodybuilding.php">Бодибилдинг <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="<?php bloginfo('template_url') ?>/powerlifting.php">Пауэрлтфтинг</a>
                    </li>
                    
         
                    <li class="nav-item">
                        <a class="nav-link disabled" href="<?php bloginfo('template_url') ?>/fitness.php">Фитнес</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link disabled" href="<?php bloginfo('template_url') ?>/#">Новости</a>
                    </li>-->
                    <li class="nav-item nav-link disabled">
                        <?php
                            $massiv_vhodnih_parametrov = array(
                                'container'=> false,
                                'echo' => false,
                                'items wrap' => '%3$s',
                                'depth' => 0,
                            );
                            print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov ), '<a>');
                        ?>
                    </li>
                    <?php global $user_ID; ?>
                        <?php if ( $user_ID ) : ?>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="https://diploma-loshadka666.c9users.io/calc/">Калькулятор</a>
                        </li>
                        <?php endif; ?>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
            </div>
        </nav>