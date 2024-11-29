<!-- <section class="partners" id="references">
    <h2 class="section-title">PARTENAIRES ET CLIENTS</h2>
    <div class="partners-grid">
        <img src="./assets/images/logos/iti.jpg" alt="Centre" class="partner-logo">
        <img src="./assets/images/logos/bollore.png" alt="Bollore" class="partner-logo">
        <img src="./assets/images/logos/baci.jpg" alt="Banque" class="partner-logo">
        <img src="./assets/images/logos/soned.jpg" alt="SONED" class="partner-logo">
    </div>
</section> -->

<section class="partners" id="references">
    <div class="partners-container">
        <h2 class="section-title">PARTENAIRES & CLIENTS</h2>
        <div class="carousel-container">
            <div class="carousel-track">
                <!-- Les logos sont dupliqués pour créer un effet de défilement infini -->
                <img src="./assets/images/logos/ITI.png" alt="Centre" class="partner-logo">
                <img src="./assets/images/logos/bollore.png" alt="Bollore" class="partner-logo">
                <img src="./assets/images/logos/BACI.png" alt="Banque" class="partner-logo">
                <img src="./assets/images/logos/soned.jpg" alt="SONED" class="partner-logo">
                <!-- Duplication des logos pour l'effet continu -->
                <img src="./assets/images/logos/ITI.png" alt="Centre" class="partner-logo">
                <img src="./assets/images/logos/bollore.png" alt="Bollore" class="partner-logo">
                <img src="./assets/images/logos/BACI.png" alt="Banque" class="partner-logo">
                <img src="./assets/images/logos/soned.jpg" alt="SONED" class="partner-logo">
            </div>
        </div>
    </div>
</section>

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

    .carousel-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 2rem 0;
    }

    .carousel-track {
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
    .carousel-container::before,
    .carousel-container::after {
        content: "";
        position: absolute;
        top: 0;
        width: 100px;
        height: 100%;
        z-index: 2;
    }

    .carousel-container::before {
        left: 0;
        background: linear-gradient(to right, #eef7ff, transparent);
    }

    .carousel-container::after {
        right: 0;
        background: linear-gradient(to left, #eef7ff, transparent);
    }
</style>