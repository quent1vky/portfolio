<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Portfolio</title>
</head>
<body id="fond">


</head>


<body>
    <div id="banniere">
        <header>
            <nav>
                <!-- Conteneur pour le bouton de déconnexion et le menu hamburger -->
                <div class="top-bar">
                    <!-- Icône hamburger -->
                    <div class="menu-icon" id="menu-icon" onclick="toggleMenu()">&#9776;</div>
                    
                    <!-- Bouton de déconnexion aligné à droite -->
                </div>

                <!-- Menu principal -->
                <ul class="menu" id="menu">
                    <li><a class="lien" href="index.php">Accueil</a></li>
                    <li><a class="lien" href="php/projet.php">Projets</a></li>
                    <li><a class="lien" href="php/parcours_certif.php">Certification</a></li>
                    <li><a class="lien" href="php/veille_techno.php">Veille technologique</a></li>
                    <li><a class="lien" href="documents/cv_2025.pdf" download="cv_2025.pdf">CV</a></li>

                    <!-- Menu déroulant pour Journal de stage -->
                    <li class="dropdown">
                        <a class="lien" href="javascript:void(0);" class="dropbtn">Journal de bord</a>
                            <div class="dropdown-content">
                                <a href="documents/jdb_stage_1A.pdf" download="jdb_stage_1A.pdf">Stage Première année</a>
                                <a href="documents/jdb_stage_2A.pdf" download="jdb_stage_2A.pdf">Stage Deuxième année</a>
                            </div>
                        </li>
                    <li><a class="lien" href="php/page_e5.php">E5</a></li>
                </ul>
            </nav>
        </header>
    </div>


    <div id="accueil">
        <p>QUENTIN VICKY <br/>BTS SIO 1 - option SLAM</p>
    </div>
    
    <div class="conteneur">
    <div class="bloc1">

        <h2>Qui suis-je ?</h2>

        <p>
            Je m'appelle Quentin et je suis en 2e année de BTS SIO, option SLAM (Solutions logicielles et applications métiers).<br>
            Vous pouvez cliquer sur le bouton ci-dessous pour accéder à mon CV et en découvrir davantage sur mon expérience professionnelle.
        </p>

        <a href="../documents/cv_2025.pdf"download="cv_2025.pdf"><button class="bouttonCV"><img class="img-footer"src="../img/dwld.png" alt="" srcset="">Mon CV</button></a>

    </div>
    </div>


    <div class="conteneur2">
        <div class="bloc1">

        <button class="bouttonxp"><a href="projet.php">Mes projets</a></button>


            <p>
                Explorez mon parcours professionnel et scolaire afin d'en connaître davantage sur moi<br/>
                et mieux comprendre qui je suis.
            </p>

        </div>

        <img class="img-acc" src="../img/img.png" alt="" srcset="">



    </div>



    <div class="conteneur">
        <div class="bloc1">

        <button class="bouttonxp"><a href="php/parcours_certif.php">Parcours de certification</a></button>


            <p>
                Les certifications que j'ai obtenues au cours de cette année ont enrichi mes connaissances<br>
                et contribué à mon développement professionnel.
            </p>

        </div>

        <img class="img-acc" src="../img/img2.png" alt="" srcset="">



    </div>


    <div class="conteneur2">
    <div class="bloc1">

        <button class="bouttonxp"><a href="php/veille_techno.php">Veille technologique</a></button>

        <p>
            Dans cette rubrique, je vous présente ma veille technologique ainsi que les outils que j'utilise <br>
            pour l'enrichir.
        </p>
    
    </div>


            
        <img class="img-acc" src="../img/img3.png" alt="" srcset="">

    </div>



    <div class="conteneur">
        <div class="bloc1">

            <button class="bouttonxp"><a href="documents/cv_2025.pdf" download="cv_2025.pdf">Mes expériences</a></button>

            <p>
                Explorez mon parcours professionnel et scolaire afin d'en connaitre d'avantage sur moi<br/>
                et mieux comprendre qui je suis.
            </p>
        
        </div>


                
            <img class="img-acc" src="../img/img.png" alt="" srcset="">

    </div>



    <div id="footer">

        <li id="infos-footer">Copyright © 2024 Portfolio Quentin</li>

        <div id="foot">
            <li><img class="img-footer" src="../img/proton.png" alt="" srcset=""> : quentin.vky@proton.me</li>
            <li><img class="img-footer" src="../img/github.png" alt="" srcset=""> : <a class="lien" href="https://github.com/quent1vky">https://github.com/quent1vky</a></li>
        </div>
    </div>



    <script src="../js/script.js"></script>


</body>
</html>