<?php include('base.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<?php include('components/head.php'); ?>

<body>
    <?php include('components/navbar-2.php'); ?>

    <!-- Hero Section avec titre -->
    <header class="page-header-4">
        <div class="header-overlay"></div>
        <h1 class="page-title">SUIVIS</h1>
    </header>

    <!-- Section Présentation -->

    <div class="project-main-content">
        <div class="project-details">
            <div class="project-image">
                <img src="assets/images/real6.jpg" alt="Chantier de construction">
            </div>
            <div class="project-info">
                <div class="info-item">
                    <strong>Maître d'ouvrage : </strong> ARCHICONCEPT
                </div>
                <div class="info-item">
                    <strong>Description : </strong> ETUDES BATIMENTS R+3 & R+2 NOTRE DAME DE TREICHVILLE RUE 38 - ARCHICONCEPT
                </div>
                <div class="info-item">
                    <strong>Lieu : </strong>ABIDJAN
                </div>
            </div>
        </div>

        <div class="gallery">
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

    <?php include('components/footer.php'); ?>

    <?php include('components/scripts.php'); ?>
</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const galleryItems = document.querySelectorAll('.gallery-item');
        const projectImage = document.querySelector('.project-image img');
        const projectInfo = document.querySelector('.project-info');

        // Tableau des détails de projet correspondant à chaque image
        const projectDetails = [{
                description: "ETUDES BATIMENTS R+3 & R+2 NOTRE DAME DE TREICHVILLE RUE 38 - ARCHICONCEPT",
                lieu: "ABIDJAN",
            },
            {
                description: "Détails du projet pour l'image 2",
                lieu: "Lieu du projet 2"
            },
            {
                description: "Détails du projet pour l'image 3",
                lieu: "Lieu du projet 3"
            },
            {
                description: "Détails du projet pour l'image 4",
                lieu: "Lieu du projet 4"
            }
        ];

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                // Retirer la classe loaded pour la transition
                projectImage.classList.remove('loaded');

                // Attendre un court instant avant de changer l'image
                setTimeout(() => {
                    // Récupérer l'image cliquée
                    const clickedImage = item.querySelector('img');

                    // Mettre à jour l'image principale
                    projectImage.src = clickedImage.src;
                    projectImage.alt = clickedImage.alt;

                    // Ajouter un écouteur pour la transition une fois l'image chargée
                    projectImage.onload = () => {
                        projectImage.classList.add('loaded');
                    };

                    // Mettre à jour les informations du projet
                    const details = projectDetails[index];

                    // Réinitialiser le contenu des informations
                    projectInfo.innerHTML = '';

                    // Ajouter la description
                    if (details.description) {
                        const descriptionElement = document.createElement('div');
                        descriptionElement.classList.add('info-item');
                        descriptionElement.innerHTML = `<strong>Description : </strong>${details.description}`;
                        projectInfo.appendChild(descriptionElement);
                    }

                    // Ajouter le lieu
                    if (details.lieu) {
                        const lieuElement = document.createElement('div');
                        lieuElement.classList.add('info-item');
                        lieuElement.innerHTML = `<strong>Lieu : </strong>${details.lieu}`;
                        projectInfo.appendChild(lieuElement);
                    }

                    // Mettre en surbrillance l'élément sélectionné
                    galleryItems.forEach(galleryItem => {
                        galleryItem.classList.remove('selected');
                    });
                    item.classList.add('selected');
                }, 250); // Délai pour permettre la transition
            });
        });

        // Sélectionner le premier élément par défaut
        if (galleryItems.length > 0) {
            galleryItems[0].click();
        }
    });
</script>

</html>