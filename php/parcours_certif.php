<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Parcours de certification</title>
</head>


<body>

    <div id="banniere">
        <header>
            <nav>
                <!-- Conteneur pour le bouton de déconnexion et le menu hamburger -->
                <div class="top-bar">
                    <!-- Icône hamburger -->
                    <div class="menu-icon" id="menu-icon" onclick="toggleMenu()">&#9776;</div>
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

    <h2 class="title-E5">Parcours de certification : RGPD</h2>

    <div class="certifications">
        <h3 class="section-title-E5">Mes certifications</h3>
            <img class="img-certif" src="../documents/certif_module1.png" alt="Certification Module 1">
            <img class="img-certif" src="../documents/certif_module2.png" alt="Certification Module 2">
            <img class="img-certif" src="../documents/certif_module3.png" alt="Certification Module 3">
            <img class="img-certif" src="../documents/certif_module4.png" alt="Certification Module 4">
            <img class="img-certif" src="../documents/certif_module5.png" alt="Certification Module 5">
    </div>

    <div id="footer">
        <li id="infos-footer">Copyright © 2024 Portfolio Quentin</li>
        <div id="foot">
            <li><img class="img-footer" src="../img/proton.png" alt=""> : quentin.vky@proton.me</li>
            <li><img class="img-footer" src="../img/github.png" alt=""> : <a class="lien" href="https://github.com/quent1vky">https://github.com/quent1vky</a></li>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
