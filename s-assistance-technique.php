<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php include('components/navbar-2.php'); ?>

    <style>
        
        p{
            margin-bottom: 10px;
        }

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
            height: 500x300px;
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
            color: #009ee2;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .service-presentation p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .appointment-btn {
            background-color: #54ace9;
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
            color: #009ee2;
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
            color: #009ee2;
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

        .services-section {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .services-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .service-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
        }

        .service-block.reverse-layout {
            flex-direction: row-reverse;
        }

        .service-content {
            /* Assure que le contenu commence en haut */
            padding: 20px;
        }

        .service-title {
            margin-top: 0;
            /* Supprime tout espacement supplémentaire en haut */
            margin-bottom: 15px;
            /* Ajoute un espace après le titre */
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .service-description {
            margin-top: auto;
            /* Pousse la description un peu vers le bas */
            font-size: 1.1rem;
            color: #666;
            line-height: 1.5;
        }


        .service-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .service-image img {
            max-width: 90%;
            max-height: 100%;
            border-radius: 8px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .services-container {
                grid-template-columns: 1fr;
            }

            .services-slider {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .services-slider {
                grid-template-columns: 1fr;
            }

            .service-block {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .service-content, 
            .service-image {
              max-width: 100%;
              padding: unset;
              margin-bottom: 20px;
            }

            .service-image img {
                max-width: 100%;
            }
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
        <?php include('components/services-slider.php'); ?>

        <h2 class="services-title" style="display: none;">NOS SERVICES</h2>

        <div class="services-container">
            <!-- Bloc Travaux topographiques -->
            <div class="service-block">
               <!--  <div class="service-image">
                    <img src="https://place-hold.it/500x300" alt="Travaux topographiques">
                </div> -->
                <div class="service-content">
                    <h3 class="service-title">Assistance technique</h3>
                    <div class="service-description">
                        <p>Nous sommes une équipe spécialisée en assistance technique, dédiée à garantir le bon fonctionnement de vos systèmes, équipements et infrastructures. Notre mission est d’apporter des solutions rapides, efficaces et sur mesure, afin de répondre à vos besoins spécifiques.</p>

                       <p> Grâce à notre expertise technique et à une solide expérience sur le terrain, nous intervenons dans de nombreux domaines, notamment :</p>

                        <p>La maintenance préventive et corrective de vos équipements.
                                                L’installation et la configuration de systèmes techniques complexes.
                                                La formation des utilisateurs pour qu’ils exploitent pleinement leurs outils.
                                                Un accompagnement personnalisé pour résoudre tout problème technique et optimiser vos infrastructures.
                                                Nous mettons un point d’honneur à anticiper vos besoins et à prévenir les dysfonctionnements grâce à une approche proactive. En tant que partenaires techniques, nous sommes à l’écoute de vos préoccupations pour garantir des résultats durables et adaptés à vos attentes.</p>

                        <p>Si vous recherchez une équipe réactive, fiable et passionnée par le service technique, nous serons ravis de collaborer avec vous pour relever vos défis et assurer le succès de vos projets.</p>

                        <p>Merci pour votre attention et à bientôt pour échanger davantage sur vos besoins.</p>
                    </div>
                </div>
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