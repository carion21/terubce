<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php include('components/navbar-2.php'); ?>

    <style>
        .services-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        /* Style pour le slider */
        .services-slider {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 50px;
        }

        .service-card {
            position: relative;
            height: 300px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-card-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .service-presentation {
            background: white;
            padding: 30px;
            margin: 40px 0;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .service-presentation h2 {
            color: #1a237e;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .service-presentation p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .appointment-btn {
            background-color: #789E35;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .services-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #1a237e;
            margin: 50px 0 30px;
        }

        /* Nouvelle organisation de la grille */
        .services-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .services-left {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .service-category {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .category-title {
            font-size: 24px;
            color: #1a237e;
            margin-bottom: 20px;
        }

        .service-list {
            list-style: none;
            padding: 0;
        }

        .service-list li {
            padding: 8px 0;
            color: #666;
            font-size: 16px;
        }

        .service-list li:nth-child(odd) {
            background-color: #f5f8ff;
            padding-left: 10px;
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ddd;
        }

        .dot.active {
            background-color: #789E35;
        }
    </style>

    <style>
        .services-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        @media (max-width: 768px) {
            .services-container {
                grid-template-columns: 1fr;
            }
        }

        .category-title.active::after {
            content: '-';
        }

        .service-list {
            list-style: none;
            padding: 0;
            display: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out, opacity 0.3s ease;
            opacity: 0;
            /* Masqué par défaut */
        }

        .service-list.open {
            display: block;
            opacity: 1;
            /* Rendre visible avec l'animation */
        }


        .service-list.active {
            display: block;
            margin-top: 10px;
        }

        .service-list li {
            padding: 8px 0;
            color: #666;
            font-size: 16px;
        }

        .service-list li:nth-child(odd) {
            background-color: #f5f8ff;
            padding-left: 10px;
        }

        .service-list.open {
            max-height: 1000px;
            /* Assurez-vous que cette valeur est suffisamment grande pour contenir le contenu */
            padding: 8px 0;
            display: block;
            /* Cela permet de forcer l'affichage des éléments dans la liste */
        }


        .category-title {
            cursor: pointer;
            position: relative;
        }

        .category-title::after {
            content: '▼';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease-in-out;
        }

        .category-title.open::after {
            transform: translateY(-50%) rotate(180deg);
        }
    </style>

    <!-- Hero Section avec titre -->
    <header class="page-header-2">
        <div class="header-overlay"></div>
        <h1 class="page-title">NOS SERVICES</h1>
    </header>

    <!-- Section Présentation -->


    <section class="services-section">
        <!-- Slider des services -->
        <div class="services-slider">
            <div class="service-card">
                <img src="assets/images/service2.jpg" alt="Travaux topographiques">
                <div class="service-card-title">Travaux topographiques</div>
            </div>
            <div class="service-card">
                <img src="assets/images/service1.jpg" alt="Bureau d'études">
                <div class="service-card-title">Bureau d'études</div>
            </div>
            <div class="service-card">
                <img src="assets/images/home1.jpg" alt="Assistance technique">
                <div class="service-card-title">Assistance technique</div>
            </div>
        </div>

        <!-- Présentation du service -->
        <div class="service-presentation">
            <h2>BUREAU D'ÉTUDES</h2>
            <p>Créé en 2011, TERUB CE accompagne les entreprises et particuliers dans leurs projets de génie civil. Grâce à la compétence de nos collaborateurs nous sommes devenus des partenaires de référence pour de grands groupes.</p>
            <div class="slider-dots">
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <button class="appointment-btn">Prendre rendez-vous</button>
        </div>

        <!-- Liste des services réorganisée -->
        <h2 class="services-title">NOS SERVICES</h2>
        <div class="services-container">
            <!-- Colonne de gauche avec Assistance technique et Travaux topographiques -->
            <div class="services-left">
                <div class="service-category">
                    <h3 class="category-title">Assistance technique</h3>
                    <ul class="service-list">
                        <li>Direction et pilotage de chantiers : préparation de travaux, supervision de travaux, pré-réception, réception et mise en route, animation HSE</li>
                        <li>Management de projet : planning, audit – diagnostic, économie de la construction.</li>
                    </ul>
                </div>
                <div class="service-category">
                    <h3 class="category-title">Travaux topographiques</h3>
                    <ul class="service-list">
                        <li>Levers topographiques</li>
                        <li>Implantation d'ouvrages</li>
                        <li>Auscultation d'ouvrage d'art</li>
                        <li>Etude et tracé de réseau électrique</li>
                        <li>Etude et tracé de réseau hydraulique</li>
                        <li>Lever Bathymétrique</li>
                        <li>Lever souterrain et détermination des cubatures de minerai</li>
                        <li>Géomatique</li>
                    </ul>
                </div>
            </div>

            <!-- Colonne de droite avec Bureau d'études -->
            <div class="service-category">
                <h3 class="category-title">Bureau d'études</h3>
                <ul class="service-list">
                    <li>Etude Béton : structure</li>
                    <li>Constructions neuves</li>
                    <li>Réhabilitations</li>
                    <li>Aménagement Bureaux</li>
                    <li>Etude Charpente</li>
                    <li>Structures métalliques</li>
                    <li>Structures bois</li>
                    <li>Equipements</li>
                    <li>Electricité courant fort/courant faible</li>
                    <li>Téléphone et informatique</li>
                    <li>Sécurité incendie</li>
                    <li>Domotique</li>
                    <li>Voirie et Réseaux Divers (VRD)</li>
                    <li>Terrassement généraux</li>
                    <li>Aménagement voirie</li>
                    <li>Aménagement espace vert</li>
                    <li>Hydraulique</li>
                    <li>Adduction en Eau potable</li>
                    <li>Hydraulique agricole</li>
                    <li>Drainage eaux pluviales</li>
                    <li>Assainissement individuel et collectif (EV & EU)</li>
                    <li>Ponts et Chaussées</li>
                    <li>Ponts</li>
                    <li>Dalots et autres ouvrages de franchissement</li>
                    <li>Ouverture et réhabilitation de piste</li>
                    <li>Projet routier</li>
                    <li>Economie de la construction</li>
                    <li>Métrés et pièces écrites</li>
                    <li>Audit – Diagnostic</li>
                    <li>Gestion des corps d'états secondaires</li>
                    <li>Revêtements souples et durs, Peintures, Faux plafond, Menuiserie, Aluminium</li>
                    <li>Environnement</li>
                    <li>Etude Environnementale</li>
                    <li>Audit Environnemental</li>
                    <li>Suivi Environnemental</li>
                </ul>
            </div>
        </div>
    </section>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const categoryTitles = document.querySelectorAll('.category-title');

        categoryTitles.forEach(title => {
            title.addEventListener('click', () => {
                const serviceList = title.nextElementSibling;

                // Toggle the "open" class for the list
                serviceList.classList.toggle('open');
                title.classList.toggle('open');
            });
        });
    });
</script>


</html>