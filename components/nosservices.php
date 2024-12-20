<section class="section" id="services">
    <h2 class="section-title" style="color: white;">NOS SERVICES</h2>

    <div class="service-grid">
        <?php

        $services = [
            [
                'image' => './assets/images/service1.jpg',
                'title' => "BUREAU D'ÉTUDES",
                'show' => false,
            ],
            [
                'image' => './assets/images/service2.jpg',
                'title' => "TRAVAUX TOPOGRAPHIQUES",
                'show' => false,
            ],
            [
                'image' => './assets/images/service3.jpg',
                'title' => "ASSISTANCE TRAVAUX",
                'show' => false,
            ],
            [
                'image' => './assets/images/service4.jpg',
                'title' => "ESTIMATION DE VALEUR ECONOMIQUE",
                'show' => true,
            ],
            [
                'image' => './assets/images/service5.jpg',
                'title' => "FISSURATION DES MURS",
                'show' => true,
            ],
            [
                'image' => './assets/images/service6.jpg',
                'title' => "ASSISTANCE VEFA",
                'show' => true,
            ],
            [
                'image' => './assets/images/service7.jpg',
                'title' => "ASSISTANCE TECHNIQUE",
                'show' => true,
            ],
            [
                'image' => './assets/images/service8.jpg',
                'title' => "INFILTRATIONS ET HUMIDITÉ",
                'show' => true,
            ],
            [
                'image' => './assets/images/service9.jpg',
                'title' => "MALFAÇONS",
                'show' => true,
            ],
            [
                'image' => './assets/images/service10.jpg',
                'title' => "LITIGES",
                'show' => true,
            ],
            [
                'image' => './assets/images/service11.jpg',
                'title' => "CATASTROPHES NATURELLES",
                'show' => true,
            ],
            [
                'image' => './assets/images/service12.jpg',
                'title' => "ASSISTANCE CCMI",
                'show' => true,
            ],
            [
                'image' => './assets/images/service13.jpg',
                'title' => "ASSISTANCE RECEPTION DES TRAVAUX",
                'show' => false,
            ],
            [
                'image' => './assets/images/service14.jpg',
                'title' => "PISCINE",
                'show' => true,
            ],
            [
                'image' => './assets/images/service15.jpg',
                'title' => "BILAN PRÉ-ACHAT",
                'show' => true,
            ],

        ];

        foreach ($services as $service) {
            echo '<div class="service-card' . ($service['show'] ? '' : ' d-none') . '">';
            echo '<img src="' . $service['image'] . '" alt="' . $service['title'] . '">';
            echo '<div class="service-overlay">';
            echo '<h3>' . $service['title'] . '</h3>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>

</section>