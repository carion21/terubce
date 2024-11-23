<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php include('components/navbar-2.php'); ?>

    <!-- Hero Section avec titre -->
    <header class="page-header-1">
        <div class="header-overlay"></div>
        <h1 class="page-title">QUI SOMMES NOUS</h1>
    </header>

    <!-- Section Présentation -->

    <div class="main-container">
        <section class="presentation-section">
            <div class="container">
                <div class="presentation-card">
                    <div class="presentation-image">
                        <img src="./assets/images/about.jpg" alt="Professionnel au travail">
                    </div>
                    <div class="presentation-content">
                        <h2 class="section-title" style="text-align: left;">QUI SOMMES NOUS</h2>
                        <div class="text-content2">
                            <p>Créé en 2011, BURET CE accompagne les entreprises et particuliers dans leurs projets de génie civil. Grâce à la compétence de nos collaborateurs nous sommes devenus des partenaires de référence pour de grands groupes.</p>
                            <p>Nos équipes pluridisciplinaires interviennent sur tout projet de Génie Civil dans les domaines du Bâtiment: Ponts et Chaussées, Construction Métallique et Bois, Hydraulique, Voirie et Réseaux Divers, Infrastructures de télécommunication et électrique, Topographie, Environnement...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* Conteneur principal avec position relative pour le pseudo-élément */
        .main-container {
            position: relative;
            overflow: hidden;
        }

        /* Pseudo-élément pour le fond vert */
        .main-container::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            height: 50%;
            background-color: #75b944;
            /* On positionne le début du fond vert au milieu de 'qui sommes nous' */
            top: calc(50%);
            /* Ajustez la valeur selon vos besoins */
            z-index: -1;
        }
    </style>

    <!-- Section Entreprise -->
    <section class="enterprise-section">
        <div class="header-enterprise">
            <div class="header-overlay"></div>
            <h2>L'ENTREPRISE</h2>
        </div>

        <div class="container">
            <div class="enterprise-card">
                <div class="enterprise-content">
                    <div class="enterprise-block">
                        <h3>LA STRUCTURE DE L'ENTREPRISE</h3>
                        <p>Créée en 2011, TERUB CE accompagne les entreprises et particuliers dans leurs projets de génie civil. Grâce à la compétence de nos collaborateurs nous sommes devenus des partenaires de référence pour de grands groupes.</p>
                    </div>

                    <div class="enterprise-block">
                        <h3>ARCHITECTURE DE L'ENTREPRISE</h3>
                        <p>Créée en 2011, TERUB CE accompagne les entreprises et particuliers dans leurs projets de génie civil. Grâce à la compétence de nos collaborateurs nous sommes devenus des partenaires de référence pour de grands groupes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

</html>