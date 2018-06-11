<!DOCTYPE html>
<html lang="en">


<head>
    <title>Питание</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/eat.css" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light row_header">
            <a class="navbar-brand" href="index.html">ШколаСпорта</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="bodybuilding.php">Bodybuilding <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="powerlifting.php">Powerlifting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="fitness.php">Fitness</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="fitness.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
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
        <p class="zagolovok">Who are you?</p>
        <div class="row row_bodytype">
            <div class="block-team">
                <input type="checkbox" class="flipers" id="flip">
                <label class="backfaces" for="flip">
                    <div class="front"> <img src="assets/img/bodytype/endo.jpg" alt="Эндоморф" title="Эндоморф"></img> </div>
                    <div class="back"> 
                        <p class="p_title">Эндоморф</p>
                        <p class="p_text">
                            Эндоморф - тип телосложения или конституции человека, выделенный американским психологом Шелдоном, наряду с мезоморфом и эктоморфом.
                            Чистый эндоморф характеризуется шарообразными формами, насколько это возможно для человека. У такого человека, как правило, круглая голова, большой живот, широкая грудная клетка и туловище, низкий рост, с большим количеством жира на плечах и бедрах, но тонкие запястья и лодыжки. Этой конституции тела в большой степени сопутствует избыточное жироотложение, избежать это может позволить правильно составленная тренировка для эндоморфа и питание.
                            Положительное качество этого типа телосложения - широкий костяк.
                        </p>
                    </div>
                </label>

            </div>

            <div class="block-team">
                <input type="checkbox" class="flipers" id="flip2">
                <label class="backfaces" for="flip2">
                    <div class="front"> <img src="assets/img/bodytype/meso.jpg" alt="Мезоморф" title="Мезоморф"></img> </div>
                    <div class="back"> 
                        <p class="p_title">Мезоморф</p>
                        <p class="p_text">
                            Мезоморф - тип телосложения или конституции человека, выделенный американским профессором Гарвардского университета Уильямом Шелдоном, наряду с эндоморфом и эктоморфом.
                            Чистый мезоморф - это классический Геркулес с преобладанием костей и мышц. Как правило у таких людей массивная кубическая голова, широкие плечи и грудная клетка, мускулистые руки и ноги. Количество подкожного жира минимально. Люди этого типа довольно легко набирают сухую мышечную массу и в большинстве имеют уровень подкожного жира ниже среднего. Этот тип самый подходящий для бодибилдинга. Силовые показатели мезоморфа увеличиваются очень быстро.
                        </p>
                    </div>
                </label>

            </div>

            <div class="block-team">
                <input type="checkbox" class="flipers" id="flip3">
                <label class="backfaces" for="flip3">
                    <div class="front"> <img src="assets/img/bodytype/ecto.jpg" alt="Эктоморф" title="Эктоморф"></img> </div>
                    <div class="back"> 
                        <p class="p_title">Эктоморф</p>
                        <p class="p_text">
                            Эндоморф - тип телосложения или конституции человека, выделенный американским психологом Шелдоном, наряду с мезоморфом и эктоморфом.
                            Чистый эндоморф характеризуется шарообразными формами, насколько это возможно для человека. У такого человека, как правило, круглая голова, большой живот, широкая грудная клетка и туловище, низкий рост, с большим количеством жира на плечах и бедрах, но тонкие запястья и лодыжки. Этой конституции тела в большой степени сопутствует избыточное жироотложение, избежать это может позволить правильно составленная тренировка для эндоморфа и питание.
                            Положительное качество этого типа телосложения - широкий костяк.
                        </p>
                    </div>
                </label>

            </div>
        </div>
        <br>
        <div class='style_list'>
            <div>
                <a href="#" class="spoiler-trigger"><span>Эндоморф</span></a>
                <div class="spoiler-block">
                    <table border=1>
                        <tr>
                            <th>Приём пиши №</th>
                            <th>Описание</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Каша овсяная с порезанными фруктами (если не наелись, то ещё творог с маложирной сметаной)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Гречка с рыбой и свежими овощами</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Рис с куриным филе и салатом из овощей</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Любая каша или макароны из твердых сортов и нежирным мясом или куриным филе.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Творог – обезжиренный или 2%, и нежирная сметана 5-10%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <a href="#" class="spoiler-trigger"><span>Мезоморф</span></a>
                <div class="spoiler-block">
                    <table border=1>
                        <tr>
                            <th>Приём пиши №</th>
                            <th>Описание</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Каша овсяная с порезанными фруктами (если не наелись, то ещё творог с маложирной сметаной)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Гречка с рыбой и свежими овощами</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Рис с куриным филе и салатом из овощей</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Любая каша или макароны из твердых сортов и нежирным мясом или куриным филе.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Творог – обезжиренный или 2%, и нежирная сметана 5-10%</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                <a href="#" class="spoiler-trigger"><span>Эктоморф</span></a>
                <div class="spoiler-block">

                    <table border=1>
                        <tr>
                            <th>Приём пиши №</th>
                            <th>Описание</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Каша овсяная с порезанными фруктами (если не наелись, то ещё творог с маложирной сметаной)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Гречка с рыбой и свежими овощами</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Рис с куриным филе и салатом из овощей</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Любая каша или макароны из твердых сортов и нежирным мясом или куриным филе.</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Творог – обезжиренный или 2%, и нежирная сметана 5-10%</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row row__footer">
            <p>Copyright © 2018 MorozovAl - чемпионами не рождаются, чемпионами становяться.</p>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!--my js-->
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
