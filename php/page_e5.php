<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epreuve E5</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
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
                                <a href="../documents/jdb_stage_1A.pdf" download="jdb_stage_1A.pdf">Stage Première année</a>
                                <a href="../documents/jdb_stage_2A.pdf" download="jdb_stage_2A.pdf">Stage Deuxième année</a>
                            </div>
                    </li>
                    <li><a class="lien" href="page_e5.php">E5</a></li>
                </ul>
            </nav>
        </header>
    </div>



    <h2 class="title-E5">Tableaux de compétences</h2>

    <!-- Affichage du fichier PDF -->
    <table class="tableau-compétences">
        <tr>
            <td>
                <embed src="../documents/portfeuille_de_competences.pdf" width="900" height="500">
            </td>
        </tr>
    </table>

    <br><br>
    
    <h2 class="section-title-E5">Comptes Rendus de TP</h2>

    <p class="section-description-E5">Découvrez mes comptes rendus de TP, projet et autres documents sous forme de documents PDF. 

        <br>

    Cliquez sur les vignettes pour les voir en détail.
    </p>

    <br><br>

    <!-- Tableaux pour chaque TP -->
    <table class="tableau-tp">
        <tr>
            <th colspan="3">Réalisations en cours de formation</th>
        </tr>
        <tr>
            <td>
                <a href="../documents/Gestion des incidents_Cours.pdf" target="_blank">
                    <p>Cours: Gestion des incidents</p>
                </a>
            </td>
            <td>
                <a href="parcours_certif.php" target="_blank">
                    <p>Parcours de certification</p>
                </a>
            </td>
            <td>
                <a href="compte_rendu_t3.pdf" target="_blank">
                    <p>Réalisation du portfolio</p>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../documents/2SIO_B1_Backup_TP_corrige.pdf" target="_blank">
                    <p>TP: Sauvegardes et backup</p>
                </a>
            </td>
            <td>
                <a href="../documents/CompteRenduGitLab.pdf" target="_blank">
                    <p>TP: Versionning</p>
                </a>
            </td>
            <td>
                <a href="veille_techno.php" target="_blank">
                    <p>Veille technologique</p>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../documents/dossier_conception_quentin_vicky.pdf" target="_blank">
                    <p>Projet: Développement site de e-commerce</p>
                </a>
            </td>
            <td>
                <a href="../documents/documentation_archi3tiers_quentin_djessim_faiz.pdf" target="_blank">
                    <p>TP Architecture 3-tiers</p>
                </a>
            </td>
            <td>
                <a href="../documents/TP_UML_quentinVICKY.pdf" target="_blank">
                    <p>TP Modelisation UML</p>
                </a>
            </td>
        </tr>
    </table>

    <br><br>
        
    <!-- Tableaux pour les réalisations en première année -->
    <table class="tableau-TP-pro">
        <tr>
            <th colspan="3">Réalisations en milieu professionnel en cours de première année</th>
        </tr>

        <tr>
            <td>
                <a href="../documents/journal_stage_site.pdf" target="_blank">
                    <p>SEGUR du numérique</p>
                </a>
            </td>
            <td>
                <a href="../documents/tecan.jpg" target="_blank">
                    <p>Connexion d'un automate au SI (TECAN / SQL)</p>
                </a>
            </td>
            <td>
                <a href="../documents/commande_windows.pdf" target="_blank">
                    <p>Culture générale informatique</p>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../documents/support_client.pdf" target="_blank">
                    <p>Maintenance/support informatique</p>
                </a>
            </td>
            <td>
                <a href="../documents/affiche_sensibilisation1.pdf" target="_blank">
                    <p>Sensibilisation du personnel</p>
                </a>
            </td>
            <td></td>
        </tr>
    </table>

    <br><br>
    
    
    <!-- Tableaux pour les réalisations en seconde année -->
    <table class="tableau-TP-pro">
        <tr>
            <th colspan="3">Réalisations en milieu professionnel en cours de première année</th>
        </tr>
        
        <tr>
            <td>
                <a href="../documents/kanban.html" target="_blank">
                    <p>Suivi des tâches</p>
                </a>
            </td>
            <td>
                <a href="../documents/cahier_des_charges.pdf" target="_blank">
                    <p>Cahier des charges</p>
                </a>
            </td>
            <td>
                <a href="compte_rendu_t3.pdf" target="_blank">
                    <p>Mettre en œuvre des mesures de sécurité adaptées pour un site web</p>
                </a>
            </td>
        </tr>
    </table>

    <br><br>

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