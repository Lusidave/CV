<!doctype html>
<html lang="en">


<head>
    <title>CV David</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/script.js"></script>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="60">

<?php
include('./src/header.php');
?>

<section id="about" class="container-fluid">
    <div class="col-xs-8 cold-md-4 profile-picture">
        <img src="images/me.jpg" alt="David" class="img-circle">
    </div>
    <div class="heading">
        <h1>Hello, moi c'est David !</h1>
        <h3>Développeur Web Junior</h3>
        <a href="docs/CV_DAVID.pdf" class="button1">Télécharger CV</a>

    </div>
</section>

<?php
include"competence.php";
?>

<section id="experience">

    <div class="container">
        <div class="white-divider"></div>
        <div class="heading">
            <h2>Expérience Professionelle</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>SONEO</h3>
                            <h4>Chargé de clientèle</h4>
                            <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2018-2020</p>
                        </div>
                        <div class="timeline-body">
                            <p>Traiter les réclamations. Assurer le suivi de clientèle, les demandes d'informations</p>
                            <p>Accompagner la demande des clients. Analyser les besoins</p>
                            <p>Identifier et proposer une solution adaptée à leurs attentes.</p>
                            <p>Concrétiser la vente d'un produit ou d'un service le cas échéant.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                <div class="timeline-panel-container-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>CASION DU LAC</h3>
                            <h4>Croupier</h4>
                            <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2012-2016</p>
                        </div>
                        <div class="timeline-body">
                            <p>Participation au bon fonctionnement des jeux et de l'animpation des tables</p>
                            <p>Concept Social - Analyser les joueurs si problème de jeu</p>
                            <p>Surveiller les joueurs afin qu'aucune tricherie ou infraction aux règles ne soit commise</p>
                            <p>Superviseur - Contrôle du travail du croupier, Régler les conflits</p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                <div class="timeline-panel-container">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h3>CASINO GENTING</h3>
                            <h4>Croupier</h4>
                            <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2007-2010</p>
                        </div>
                        <div class="timeline-body">
                            <p></p>
                            <p>Participation au bon fonctionnement des jeux et de l'animation des tables de jeux</p>
                            <p>Croupier particulier pour les VIP</p>
                            <p>Superviseur</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section id="education">
    <div class="container">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Education</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="education-block">
                    <h5>2020</h5>
                    <span class="glyphicon glyphicon-education"></span>
                    <h3>Formation WILD CODE SCHOOL</h3>
                    <h4>Diplôme développeur web/mobile</h4>
                    <div class="red-divider"></div>
                    <p>Langages et outils de programmation</p>
                    <p>HTML, CSS, PHP, MYSQL</p>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="education-block">
                    <h5>2009</h5>
                    <span class="glyphicon glyphicon-education"></span>
                    <h3>Formation CERUS CASINO ACADEMY</h3>
                    <h4>Formation Croupier</h4>
                    <div class="red-divider"></div>
                    <p>Apprentissage métier et style anglais</p>
                    <p>Apprentissage des jeux : Roulette Anglaise - BlackJack - Poker - Punto-Banco</p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="white-divider"></div>
        <div class="heading">
            <h2>Portfolio</h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                    <img src="images/facebook_share.png" alt="facebook share"></a>
            </div>
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.google.com" target="_blank">
                    <img src="images/google_translate.png" alt="google translate"></a>
            </div>
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                    <img src="images/twitter_video.png" alt="twitter video"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.google.com" target="_blank">
                    <img src="images/youtube.png" alt="youtube"></a>
            </div>
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                    <img src="images/twitter_retweet.png" alt="twitter retweet"></a>
            </div>
            <div class="col-sm-4">
                <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                    <img src="images/facebook_video.png" alt="facebook video"></a>
            </div>
        </div>
    </div>
</section>

<section id="recommandations">
    <div class="container">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Recommandations</h2>
        </div>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h3>A venir ...</h3>
                </div>
                <div class="item">
                    <h3>A venir ...</h3>
                </div>
                <div class="item">
                    <h3>A venir ...</h3>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                <span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                <span class="glyphicon glyphicon-chevron-right"></span></a>

        </div>
    </div>
</section>

</body>


<?php
include('./src/form.php');
?>

<?php
include('./src/footer.php');
?>
</body>
</html>


