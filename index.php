<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php //include('components/navbar.php'); ?>
    <?php include('components/navbar-2.php'); ?>

    <?php include('components/header.php'); ?>

    <div class="main-container">
        <?php include('components/quisommesnous.php'); ?>

        <?php include('components/nosservices.php'); ?>
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
            top: calc(50% - 200px);
            /* Ajustez la valeur selon vos besoins */
            z-index: -1;
        }
    </style>

    <?php include('components/realisations.php'); ?>

    <?php include('components/references.php'); ?>

    <?php include('components/contacts.php'); ?>

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

</html>