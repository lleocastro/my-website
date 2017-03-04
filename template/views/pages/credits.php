<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="description" content="Creditos para os icones e imagens do site"/>
    <meta name="author" content="Léo B. Castro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300, 700"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <style>
        html {
            font-family: "Roboto", sans-serif;
        }
        .navbar-btn {
            color: #ffffff !important;
            float: right;
            margin-right: 10px;
            margin-top: 9px;
        }
        .margin-top {
            margin-top: 70px;
        }
        .final-footer {
            height: 65px;
            color: #777;
            font-size: .8em;
            font-weight: 300;
            background-color: #f5f5f5;
        }
        .ptitle {
            font-size: 1.2em;
        }
        .no-paragraph {
            font-size: 1em;
        }
    </style>

    <title><?php echo getenv('APP_NAME') ?> - Creditos para Autores</title>
</head>
<body>
    <?php require_once (dirname(__DIR__) . '/layouts/includes/google-analytics.php') ?>
    <main class="container-full" role="main">
        <!-- NAVBAR -->
        <div class="navbar navbar-fixed navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                        <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do website"/>
                    </a>
                </div>
                <a title="Voltar para o site" href="<?php echo route('/#footer') ?>" class="btn btn-dark navbar-btn" role="button">
                    <i class="material-icons" style="vertical-align: -29%">replay</i>
                    Voltar
                </a>
            </div>
        </div><!-- END NAVBAR -->
        <!-- CREDITS -->
        <div class="container container-space margin-top">
            <div class="line line-space">
                <div class="collist">
                    <h4 class="no-margin">Creditos para Autores</h4>
                    <div class="heading-line"></div>
                    <p class="tagline">Agradecimentos aos autores dos icones e imagens que estou usando no site. Excelente qualidade!</p>
                </div>
            </div>
            <div class="line line-space">
                <div class="s6col">
                    <p class="ptitle"><strong>Icones</strong></p>
                    <p class="no-paragraph"><a href="http://www.freepik.com" rel="nofollow" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/dave-gandy" rel="nofollow" title="Dave Gandy">Dave Gandy</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/vectors-market" rel="nofollow" title="Vectors Market">Vectors Market</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/anatoly" rel="nofollow" title="Anatoly">Anatoly</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/linh-pham" rel="nofollow" title="Linh Pham">Linh Pham</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/alessio-atzeni" rel="nofollow" title="Alessio Atzeni">Alessio Atzeni</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/zurb" rel="nofollow" title="Zurb">Zurb</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/vectors-market" rel="nofollow" title="Vectors Market">Vectors Market</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                    <p class="no-paragraph"><a href="http://www.flaticon.com/authors/pixel-perfect" rel="nofollow" title="Pixel perfect">Pixel perfect</a> from <a href="http://www.flaticon.com" rel="nofollow" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" rel="nofollow" title="Creative Commons BY 3.0">CC 3.0 BY</a></p>
                </div>
                <div class="s6col">
                    <p class="ptitle"><strong>Imagens</strong></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/adaptative-web-development-vector_757643.htm' rel="nofollow">adaptative-web-development-vector (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/application-development-infographic_807747.htm' rel="nofollow">application-development-infographic (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/web-page_1040640.htm' rel="nofollow">web-page-site-intro (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/web-programming-background_1027144.htm' rel="nofollow">web-programming-background (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/boy-building-a-website-in-flat-style_847066.htm' rel="nofollow">boy-building-a-website-in-flat-style (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/great-isometric-user-experience_851898.htm' rel="nofollow">great-isometric-user-experience (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/website-under-construction_765805.htm' rel="nofollow">website-under-construction (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/user-experience-with-a-laptop_847126.htm' rel="nofollow">user-experience-with-a-laptop (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/web-background-design_1033612.htm' rel="nofollow">web-background-design (Freepik)</a></p>
                    <p class="no-paragraph"><a href="https://www.youtube.com/watch?v=cFT_3bEyl_g" rel="nofollow">flappy-bird-logo (HBruna)</a></p>
                    <p class="no-paragraph"><a href="http://www.freepik.com/free-vector/web-design-background_1015293.htm" rel="nofollow">css-stylle-logo (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/weekly-planner-with-colores-post-it_848978.htm' rel="nofollow">weekly-planner-with-colores-post-it_848978 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/adaptative-web-development-vector_757643.htm' rel="nofollow">adaptative-web-development-vector_757643 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-psd/blank-page-mock-up-design_1053171.htm' rel="nofollow">blank-page-mock-up-design_1053171 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/architecture-infographic-template_1003600.htm' rel="nofollow">architecture-infographic-template_1003600 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/programming-language-at-workplace_902701.htm' rel="nofollow">programming-language-at-workplace_902701 (Freepik)</a></p>
                    <p class="no-paragraph"><a href="http://www.blognerdegeek.com/wp-content/uploads/flappy-bird-thumb.jpg" rel="nofollow">flappy-bird-thumb (Blognerdegeek)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-psd/business-stationery-mock-up-design_1014359.htm' rel="nofollow">business-stationery-mock-up-design_1014359 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/realistic-notepad-and-pen_812842.htm' rel="nofollow">realistic-notepad-and-pen_812842 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/laptop-on-wooden-desk-with-social-media-diagram_902720.htm' rel="nofollow">laptop-on-wooden-desk-with-social-media-diagram_902720 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/applications-to-be-connected_902853.htm' rel="nofollow">applications-to-be-connected_902853 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/billie-dollar-with-business-chart_1025792.htm' rel="nofollow">billie-dollar-with-business-chart_1025792 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-vector/silvery-badge-best-quality_1036661.htm' rel="nofollow">silvery-badge-best-quality_1036661 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/laptop-and-coffee-cup_926723.htm' rel="nofollow">laptop-and-coffee-cup_926723 (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/planning-and-writing-about-social-media_902867.htm' rel="nofollow">planning-and-writing-about-social-media (Freepik)</a></p>
                    <p class="no-paragraph"><a href='http://www.freepik.com/free-photo/laptop-with-colorful-business-documents_978932.htm' rel="nofollow">laptop-with-colorful-business-documents_978932 (Freepik)</a></p>
                </div>
            </div>
        </div><!-- END CREDITS -->
    </main>
    <?php require_once (dirname(__DIR__) . '/layouts/includes/final-footer.php') ?>
</body>
</html>
