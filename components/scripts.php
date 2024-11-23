<script>
    // Slider functionality
    const dots = document.querySelectorAll('.dot');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');
        });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        // Pause animation au survol
        const track = document.querySelector('.carousel-track');

        track.addEventListener('mouseenter', () => {
            track.style.animationPlayState = 'paused';
        });

        track.addEventListener('mouseleave', () => {
            track.style.animationPlayState = 'running';
        });

        // Vérifier si le carousel doit être réinitialisé
        const checkPosition = () => {
            const firstItem = track.firstElementChild;
            const lastItem = track.lastElementChild;

            if (track.getBoundingClientRect().right <= window.innerWidth) {
                track.appendChild(firstItem.cloneNode(true));
            }
        };

        setInterval(checkPosition, 1000);
    });
</script>