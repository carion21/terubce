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
            <a href="qui-sommes-nous.php">Qui sommes nous</a>
            <a href="services.php">Services</a>
            <a href="realisations.php">Suivis</a>
            <a href="references.php">Références</a>
            <a href="contacts.php">Contacts</a>
        </div>
        <div class="social-icons">
            <!-- Social icons -->
            <!-- Facebook Icon -->
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                </svg>
            </a>
            <!-- Twitter/X Icon -->
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                    <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                </svg>
            </a>
            <!-- Instagram Icon -->
            <a href="#" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                </svg>
            </a>
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