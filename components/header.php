<header class="hero" id="accueil">
    <div class="hero-content">
        <br>
        <br>
        <span class="hc1">
            ARCHITECTURE
        </span>
        <br>
        <span class="hc2">
            CONTEMPORAINE
        </span>
    </div>
    <div class="slider-dots">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</header>

<script>
    // JavaScript pour gérer le carrousel avec une transition fluide

    const hero = document.querySelector('.hero');
    const dots = document.querySelectorAll('.dot');
    const images = [
        'assets/images/home1.jpg',
        'assets/images/home2.jpg',
        'assets/images/home3.jpg'
    ];
    let currentIndex = 0;

    function changeBackground() {
        // Créez une nouvelle image de fond temporaire pour éviter un clignotement
        const newImage = images[currentIndex];

        // Ajoutez une classe temporaire qui applique un flou pendant la transition
        hero.classList.add('fade');

        // Mettre à jour l'arrière-plan après un délai pour laisser le temps à la transition de s'effectuer
        setTimeout(() => {
            hero.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('${newImage}')`;

            // Retirer la classe fade après la transition
            hero.classList.remove('fade');
        }, 500); // La durée du délai doit correspondre à la durée de la transition

        // Mettre à jour l'état actif des points de navigation
        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentIndex].classList.add('active');
    }

    // Fonction pour passer à l'image suivante
    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        changeBackground();
    }

    // Initialisation
    changeBackground();

    // Changer l'image toutes les 5 secondes
    setInterval(nextSlide, 5000);

    // Gestion du clic sur les points de navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            changeBackground();
        });
    });
</script>