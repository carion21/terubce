<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php include('components/navbar-2.php'); ?>

    <style>
        .references-section {
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .reference-category {
            margin-bottom: 50px;
        }

        .category-title {
            background-color: #4784ca;
            color: white;
            padding: 10px 30px;
            font-size: 24px;
            text-align: center;
            display: inline-block;
            margin: 20px auto 40px;
            letter-spacing: 1px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .logo-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 0 auto;
        }

        .logo-item {
            width: 200px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .logo-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        } 
    </style>

    <!-- Hero Section avec titre -->
    <header class="page-header-5">
        <div class="header-overlay"></div>
        <h1 class="page-title">PARTENAIRES</h1>
    </header>

    <section class="references-section">
        <!-- Bureau d'études -->
        <div class="reference-category">
            <h2 class="category-title">BUREAU D'ÉTUDES</h2>
            <div class="logo-grid">
                <div class="logo-item">
                    <img src="assets/images/logos/ESP-CA.png" alt="ESP-CA">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/CECOTID.png" alt="CECOTID">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/VERITAS.png" alt="Bureau Veritas">
                </div>
            </div>
        </div>

        <!-- Entreprises -->
        <div class="reference-category">
            <h2 class="category-title">ENTREPRISES</h2>
            <div class="logo-grid">
                <div class="logo-item">
                    <img src="assets/images/logos/CMEP.png" alt="CMEP">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/TONGON.png" alt="Tongon">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/ITI.png" alt="ITI">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/ORANGE.png" alt="Orange">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/ABIDJAN-TERMINAL.png" alt="Abidjan Terminal">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/SACO.png" alt="SACO">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/MUTASIR.png" alt="Mutasor">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/BENEOUA.png" alt="Beneoua">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/SAMA-TRADING.png" alt="Sama Group">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/SAPH.png" alt="SAPH">
                </div>
            </div>
        </div>

        <!-- Organismes -->
        <div class="reference-category">
            <h2 class="category-title">ORGANISMES</h2>
            <div class="logo-grid">
                <div class="logo-item">
                    <img src="assets/images/logos/PNUD.png" alt="PNUD">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/MAIRIE-YOPOUGON.png" alt="Mairie de Yopougon">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/BACI.png" alt="Banque Atlantique">
                </div>
                <div class="logo-item">
                    <img src="assets/images/logos/ONEP.png" alt="ONEP">
                </div>
            </div>
        </div>
    </section>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

</html>