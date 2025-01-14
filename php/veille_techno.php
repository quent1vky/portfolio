<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Veille technologique</title>

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

    <h1 class="title-E5">Veille Technologique</h1>


    <div class="content-section">
    <h2 class="section-title">1- Framework</h2>
    <p class="section-description">
        Le mot « framework » provient de l’anglais « frame » qui veut dire « cadre » en français, et « work » qui signifie « travail ». 
        C’est donc un « cadre de travail ». Concrètement, un framework est un ensemble de composants servant à créer les 
        fondations, l’architecture et les grandes lignes d’un logiciel.
    </p>
    <p class="section-description">
        Il existe des centaines de frameworks couvrant la plupart des langages de programmation. Ils sont destinés au développement de 
        sites web ou bien à la conception de logiciels. Un framework est une boîte à outils conçue par un ou plusieurs développeurs 
        à destination d’autres développeurs. Contrairement à certains scripts tels que WordPress, ou autres, un framework 
        n’est pas utilisable tel quel. Il n’est pas fait pour être utilisé par les utilisateurs finaux. Le développeur qui se sert 
        d’un framework a encore du travail à fournir !
    </p>

    <h2 class="section-title">2- Objectif d’un framework</h2>
    <p class="section-description">
        L'objectif principal d'un framework est d'accroître la productivité des développeurs qui l'adoptent. Structuré autour de divers composants, il offre au développeur la possibilité de sélectionner et d'utiliser ceux qui            répondent le mieux à ses besoins, simplifiant ainsi le processus de développement. Cette modularité permet de se focaliser sur les aspects clés et stratégiques du projet, tout en réduisant la complexité des tâches                répétitives ou techniques.
    </p>

    <h2 class="section-title">3. Svelte: Introduction</h2>
    <p class="section-description">
    Svelte est un framework JavaScript moderne et révolutionnaire conçu pour créer des interfaces utilisateur performantes et intuitives. Contrairement aux frameworks traditionnels comme React ou Vue, qui s’appuient sur un           Virtual DOM pour gérer les mises à jour du DOM, Svelte adopte une approche unique en compilant le code au moment de la construction. Cette compilation transforme vos composants en JavaScript pur et optimisé, éliminant ainsi      les abstractions du runtime et offrant des performances exceptionnelles en production. L’une des grandes forces de Svelte réside dans sa simplicité : il permet de mélanger HTML, CSS et JavaScript dans des fichiers .svelte        uniques, tout en introduisant une réactivité native qui ne nécessite pas de systèmes complexes comme les hooks ou les états immuables. Grâce à son architecture minimaliste et ses performances accrues, Svelte réduit la taille      des bundles, accélère les temps de chargement et améliore l’expérience utilisateur. Bien qu’il soit encore en pleine croissance avec un écosystème plus modeste comparé à des géants comme React, il gagne rapidement en              popularité auprès des    développeurs qui recherchent une syntaxe claire, une expérience de développement fluide et des applications légères et rapides. En résumé, Svelte propose une approche nouvelle et élégante pour            développer des interfaces modernes  tout en évitant les lourdeurs des frameworks traditionnels.
    </p> 
    

    <h2 class="section-title">4. Outils Mis en place</h2>
        <p class="section-description">
            <ol>
                <li>Google Alert</li>
                <li>Inoreader : création d'un feed personnalisé contenant des blogs sur Svelte.</li>
                <li>Fichier OPML (Outline Processor Markup Language): Importer des flux RSS, les rendre plus accessible</li>
                <li>Archive de Flux</li>
                <li>Réseaux Sociaux: Reddit, X ...</li>
            </ol>
        </p>

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