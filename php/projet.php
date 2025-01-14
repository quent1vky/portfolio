<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Projet</title>
</head>
<body id="fond">

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
                    <li><a class="lien" href="../index.php">Accueil</a></li>
                    <li><a class="lien" href="projet.php">Projets</a></li>
                    <li><a class="lien" href="parcours_certif.php">Certification</a></li>
                    <li><a class="lien" href="veille_techno.php">Veille technologique</a></li>
                    <li><a class="lien" href="../documents/cv_2025.pdf" download="cv_2025.pdf">CV</a></li>
                    <!-- Menu déroulant pour Journal de stage -->
                    <li class="dropdown">
                        <a class="lien" href="javascript:void(0);" class="dropbtn">Journal de bord</a>
                            <div class="dropdown-content">
                                <a href="documents/jdb_stage_1A.pdf" download="jdb_stage_1A.pdf">Stage Première année</a>
                                <a href="documents/jdb_stage_2A.pdf" download="jdb_stage_2A.pdf">Stage Deuxième année</a>
                            </div>
                    </li>
                    <li><a class="lien" href="page_e5.php">E5</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <!--
    <div>
        <p><a href="https://github.com/quent1vky"><button class="boutton">Mes projets <img class="img-footer" src="../img/github.png" alt="" srcset=""></button></a></p>
    </div>
    -->


    <h2 class="title-E5">Projets</h2>

    <br><br><br><br><br><br>

<div class="conteneur2">
        <div class="bloc1">

        <button class="bouttonxp"><a href="https://github.com/quent1vky/snake">Snake</a></button>


            <p>
             Durant notre première année de BTS, nous devions coder un jeu snake en C++ tout en <br>
             suivant les règles de bases du jeu.
            </p>

        </div>

        <img class="img-acc" src="../img/img2.png" alt="" srcset="">



    </div>


    <div class="conteneur">
    <div class="bloc1">

        <button class="bouttonxp"><a href="https://github.com/quent1vky/netflux">Site streaming</a></button>

        <p>
            Pendant notre première année de BTS SIO nous avions un deuxième projet mais en php.<br>
             Nous avons coder un site de streaming en PHP natif tout en utilisant une base de données<br>
            et des requêtes SQL.
        </p>
    
    </div>


            
        <img class="img-acc" src="../img/img3.png" alt="" srcset="">

    </div>


    <div class="conteneur2">
        <div class="bloc1">

        <button class="bouttonxp"><a href="https://github.com/quent1vky/projetPuzzle">Site e-commerce</a></button>


            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa modi aperiam quas delectus<br/>
                veritatis consequuntur perferendis sunt odit nesciunt placeat.
            </p>

        </div>

        <img class="img-acc" src="../img/img2.png" alt="" srcset="">



    </div>


    <div class="conteneur">
    <div class="bloc1">

        <button class="bouttonxp"><a href="#">Application mobile</a></button>

        <p>
            En cours de développement, cette application complète le site e-commerce ci-dessus                                                   
        </p>
    
    </div>


            
        <img class="img-acc" src="../img/img3.png" alt="" srcset="">

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