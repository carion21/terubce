<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <style>
        /* Conteneur global */
        .container {
            /* min-height: 50vh; */
            /* Assure que le conteneur prend toute la hauteur de la page */
            display: flex;
            flex-direction: column;
        }

        /* Section Références */
        .references-section {
            /* flex-grow: 1; */
            /* Cette section prend tout l'espace disponible */
            padding: 20px;
            background-color: #f9f9f9;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        .references-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            padding: 20px;
        }

        .reference-item {
            padding: 10px 20px;
            background-color: #0073e6;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .reference-item:hover {
            background-color: #005bb5;
        }

        .references-section {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .references-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #009ee2;
            margin: 50px 0 30px;
        }

        .references-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .reference-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
        }

        .reference-block.reverse-layout {
            flex-direction: row-reverse;
        }

        .reference-content,
        .reference-image {
            flex: 1;
            max-width: 50%;
        }

        .reference-content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Assure que le contenu commence en haut */
            padding: 20px;
        }

        .reference-title {
            margin-top: 0;
            /* Supprime tout espacement supplémentaire en haut */
            margin-bottom: 15px;
            /* Ajoute un espace après le titre */
            font-size: 1.8rem;
            color: #333;
        }

        .reference-description {
            margin-top: auto;
            /* Pousse la description un peu vers le bas */
            font-size: 1.1rem;
            color: #666;
            line-height: 1.5;
        }


        .reference-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reference-image img {
            max-width: 90%;
            max-height: 100%;
            border-radius: 8px;
            object-fit: cover;
        }
    </style>

    <?php include('components/navbar-2.php'); ?>

    <!-- Hero Section avec titre -->
    <header class="page-header-4">
        <div class="header-overlay"></div>
        <h1 class="page-title">REFERENCES</h1>
    </header>

    <!-- Section Présentation -->

    <div class="container">
        <?php include('components/references-section.php'); ?>
    </div>

    <section class="references-section">

        <h2 class="references-title">
            VRD
        </h2>

        <div class="references-container">
            <!-- Bloc Bureau d'études -->
            <div class="reference-block">
                <div class="reference-content">
                    <h3 class="reference-title">
                        Voirie 1
                    </h3>
                    <p class="reference-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="reference-image">
                    <img src="https://place-hold.it/500x300" alt="Bureau d'études">
                </div>
            </div>

            <div class="reference-block">
                <div class="reference-content">
                    <h3 class="reference-title">
                        Voirie 2
                    </h3>
                    <p class="reference-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="reference-image">
                    <img src="https://place-hold.it/500x300" alt="Bureau d'études">
                </div>
            </div>

            <div class="reference-block">
                <div class="reference-content">
                    <h3 class="reference-title">
                        Voirie 3
                    </h3>
                    <p class="reference-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="reference-image">
                    <img src="https://place-hold.it/500x300" alt="Bureau d'études">
                </div>
            </div>
        </div>
    </section>


    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

</html>