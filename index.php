<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php //include('components/navbar.php'); 
    ?>
    <?php include('components/navbar-2.php'); ?>

    <?php include('components/header.php'); ?>

    <div class="main-container">
        <?php include('components/quisommesnous.php'); ?>

        <?php // include('components/nosservices.php'); ?>
    </div>

    <?php // include('components/realisations.php'); ?>

    <?php include('components/references.php'); ?>

    <?php // include('components/contacts.php'); 
    ?>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

<script>
    // Dimensions de la fenêtre visible (viewport)
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;

    console.log("Viewport (visible):");
    console.log(`Largeur : ${viewportWidth} px`);
    console.log(`Hauteur : ${viewportHeight} px`);

    // Dimensions totales de l'écran
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;

    console.log("Écran total :");
    console.log(`Largeur : ${screenWidth} px`);
    console.log(`Hauteur : ${screenHeight} px`);
</script>

</html>