<?php
/**
 * Greta Global Presence Section
 */

$feature_services = [
    [
        'title' => 'Global Metcorp Ltd',
        'subtitle' => 'Global Ferrous Scrap Trading',
        'desc' => 'An international trading house specializing in ferrous scrap, supporting steel production worldwide with dependable raw material supply.',
        'image' => 'img/gg-network/metcorp.webp',
        'link' => 'https://www.globalmetcorp.com/'
    ],
    [
        'title' => 'Greta Metal Pte Ltd',
        'subtitle' => 'Commodities & Steel Trading (Asia)',
        'desc' => 'Based in Singapore, this entity trades key commodities like semi-finished steel products and essential ferrous scrap and mineral ores.',
        'image' => 'img/gg-network/metal-pte.webp',
        'link' => 'greta-metal-pte-ltd.php'
    ],
    [
        'title' => 'Global Ardour Recycling',
        'subtitle' => 'Critical Mineral Exploration & Development',
        'desc' => 'Focuses on mining and exploration assets, particularly for critical minerals like Lithium, Gold, and Rare Earth Elements in Australia.',
        'image' => 'img/gg-network/ardour.webp',
        'link' => 'https://globalardour.co.uk/'
    ],
    [
        'title' => 'Greta Energy Ltd',
        'subtitle' => 'Sustainable Power Generation & Steel',
        'desc' => 'Operates a 15 MW biomass-based power plant, and is developing an integrated green steel plant (DRI/Billet) in India.',
        'image' => 'img/gg-network/energy.webp',
        'link' => 'https://www.gretaenergy.in/'
    ],
    [
        'title' => 'Shriram Food Industry Ltd',
        'subtitle' => 'Rice Milling and Export',
        'desc' => 'A leading manufacturer and exporter of various rice types, operating an integrated milling and trading model for global agri-commodity markets.',
        'image' => 'img/gg-network/shriram-food.webp',
        'link' => 'https://www.shriramfood.com/'
    ],
    [
        'title' => 'Greta Minerals Australia',
        'subtitle' => 'Critical Mineral Exploration & Development',
        'desc' => 'Focuses on mining and exploration assets, particularly for critical minerals like Lithium, Gold, and Rare Earth Elements in Australia.',
        'image' => 'img/gg-network/mineral.webp',
        'link' => 'https://www.gretaminerals.com/'
    ],
    [
        'title' => 'KUSUM METALS PVT LTD',
        'subtitle' => 'Pioneering Metal Recycling',
        'desc' => 'Founded in 1996, we are the pioneering core of the Greta Group, driving industrial sustainability from India. We specialize in full-cycle recycling of ferrous & non-ferrous scrap.',
        'image' => 'img/gg-network/metal-dmcc.webp',
        'link' => 'kusum-metals-pvt-ltd.php'
    ]
];
?>

<!-- feature Section Start -->
<div class="feature-sec-v2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title">
                    <h1>Greta Global Presence</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="gg-carousel-wrapper">
        <button class="gg-nav-btn gg-btn-prev" aria-label="Previous">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path d="M15 18l-6-6 6-6" />
            </svg>
        </button>

        <div class="gg-carousel-container">
            <div class="gg-carousel-track">
                <?php foreach ($feature_services as $service): ?>
                    <div class="gg-carousel-slide">
                        <div class="gg-service-card">
                            <div class="gg-card-thumb">
                                <a href="<?php echo $service['link']; ?>" target="_blank">
                                    <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" />
                                </a>
                            </div>
                            <div class="gg-card-content">
                                <h2 class="gg-card-title"><?php echo $service['title']; ?></h2>
                                <div class="gg-card-subtitle"><?php echo $service['subtitle']; ?></div>
                                <p class="gg-card-desc"><?php echo $service['desc']; ?></p>
                                <div class="gg-read-more-btn">
                                    <a href="<?php echo $service['link']; ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <button class="gg-nav-btn gg-btn-next" aria-label="Next">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </button>
    </div>

    <div class="gg-dots-container"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.gg-carousel-track');
        const slides = Array.from(document.querySelectorAll('.gg-carousel-slide'));
        const prevBtn = document.querySelector('.gg-btn-prev');
        const nextBtn = document.querySelector('.gg-btn-next');
        const dotsContainer = document.querySelector('.gg-dots-container');

        let currentIndex = 0;

        function getSlidesPerView() {
            if (window.innerWidth < 768) return 1;
            if (window.innerWidth < 1200) return 2;
            return 3;
        }

        function createDots() {
            dotsContainer.innerHTML = '';
            const slidesPerView = getSlidesPerView();
            const totalDots = Math.max(1, slides.length - slidesPerView + 1);

            for (let i = 0; i < totalDots; i++) {
                const dot = document.createElement('button');
                dot.classList.add('gg-dot');
                if (i === currentIndex) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateCarousel() {
            const slidesPerView = getSlidesPerView();
            const gap = 24;
            const containerWidth = document.querySelector('.gg-carousel-container').offsetWidth;
            const slideWidth = (containerWidth - (gap * (slidesPerView - 1))) / slidesPerView;

            const offset = -(currentIndex * (slideWidth + gap));
            track.style.transform = `translateX(${offset}px)`;

            // Update dots
            const dots = document.querySelectorAll('.gg-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });

            // Update button visibility
            prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
            prevBtn.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';

            const maxIndex = slides.length - slidesPerView;
            nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
            nextBtn.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
        }

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            const maxIndex = slides.length - getSlidesPerView();
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });

        // Initial State
        window.addEventListener('resize', () => {
            const maxIndex = slides.length - getSlidesPerView();
            if (currentIndex > maxIndex) currentIndex = maxIndex;
            if (currentIndex < 0) currentIndex = 0;
            createDots();
            updateCarousel();
        });

        createDots();
        updateCarousel();

        // Touch Support
        let startX = 0;
        let isDragging = false;

        track.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        track.addEventListener('touchend', e => {
            if (!isDragging) return;
            const endX = e.changedTouches[0].clientX;
            const diff = startX - endX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) nextBtn.click();
                else prevBtn.click();
            }
            isDragging = false;
        });
    });
</script>