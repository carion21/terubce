<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <style>
        .partners {
            background: #eef7ff;
            padding: 4rem 0;
            overflow: hidden;
        }

        .partners-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            color: #0a1f2e;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 3rem;
        }

        .gallery-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 2rem 0;
        }

        .gallery-track {
            display: flex;
            align-items: center;
            gap: 4rem;
            animation: scroll 20s linear infinite;
            white-space: nowrap;
        }

        .partner-logo {
            height: 60px;
            object-fit: contain;
            /* Effet de survol optionnel */
            transition: transform 0.3s ease;
        }

        .partner-logo:hover {
            transform: scale(1.1);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Effet de fondu sur les bords */
        .gallery-container::before,
        .gallery-container::after {
            content: "";
            position: absolute;
            top: 0;
            width: 100px;
            height: 100%;
            z-index: 2;
        }

        .gallery-container::before {
            left: 0;
            background: linear-gradient(to right, #eef7ff, transparent);
        }

        .gallery-container::after {
            right: 0;
            background: linear-gradient(to left, #eef7ff, transparent);
        }
    </style>

    <?php include('components/navbar-2.php'); ?>

    <!-- Hero Section avec titre -->
    <header class="page-header-4">
        <div class="header-overlay"></div>
        <h1 class="page-title">ETUDES RÉALISÉES</h1>
    </header>

    <!-- Section Présentation -->

    <div class="project-main-content">
        <div class="project-details">
            <div class="project-image">
                <img src="assets/images/real6.jpg" alt="Chantier de construction">
            </div>
            <div class="project-info">
                <!-- <div class="info-item">
                    <strong>Date : </strong>24 Juin 2013 - 30 Décembre 2013
                </div> -->
                <!-- <div class="info-item">
                    <strong>Client : </strong>MMC / COLAS
                </div> -->
                <div class="info-item">
                    <strong>Description : </strong> ETUDES BATIMENTS R+3 & R+2 NOTRE DAME DE TREICHVILLE RUE 38 - ARCHICONCEPT
                </div>
                <div class="info-item">
                    <strong>Lieu : </strong>ABIDJAN
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-track">
                <div class="gallery-item">
                    <img src="assets/images/real3.jpg" alt="Image chantier 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/about3.jpg" alt="Image chantier 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/about1.jpg" alt="Image chantier 3">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real4.jpg" alt="Image chantier 4">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real5.jpg" alt="Image chantier 5">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real6.jpg" alt="Image chantier 6">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real7.jpg" alt="Image chantier 6">
                </div>

                <div class="gallery-item">
                    <img src="assets/images/real3.jpg" alt="Image chantier 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/about3.jpg" alt="Image chantier 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/about1.jpg" alt="Image chantier 3">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real4.jpg" alt="Image chantier 4">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real5.jpg" alt="Image chantier 5">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real6.jpg" alt="Image chantier 6">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/real7.jpg" alt="Image chantier 6">
                </div>
            </div>

        </div>
    </div>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

</html>