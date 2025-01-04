<nav class="top-nav">
    <div class="nav-content">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="TERUBCE Logo" class="logo">
        </a>
        <button class="hamburger" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="nav-middle">
            <a href="index.php">Accueil</a>
            <!-- <a href="qui-sommes-nous.php">Qui sommes nous</a> -->
            <a href="services.php">Services</a>
            <a href="references.php">References</a>
            <a href="partenaires.php">Partenaires</a>
            <a href="contacts.php">Contacts</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.querySelector('.hamburger');
        const navMiddle = document.querySelector('.nav-middle');

        if (hamburger && navMiddle) {
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMiddle.classList.toggle('active');
            });
        }
    });
</script>