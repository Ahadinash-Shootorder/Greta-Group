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

<style>
    /* Feature Section Styles - Based on Provided Design */
    .feature-sec-v2 {
        width: 100%;
        min-height: 80px;
        position: relative;
        /* border-radius: 27px,; */
        background: linear-gradient(182.7deg, #796033, #34322f);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 60px 0;
        box-sizing: border-box;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }

    .feature-sec-v2 .sec-title h1 {
        color: #fff;
        font-weight: 700;
        margin-bottom: 40px;
        font-size: 36px;
        text-align: center;
    }

    .gg-carousel-wrapper {
        width: 100%;
        max-width: 1440px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 44px;
        box-sizing: border-box;
        position: relative;
        gap: 16px;
    }

    .gg-carousel-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .gg-carousel-track {
        display: flex;
        transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        gap: 24px;
    }

    .gg-carousel-slide {
        flex: 0 0 calc((100% - (24px * 2)) / 3);
        min-width: 0;
    }

    .gg-service-card {
        height: 750px;
        width: 100%;
        position: relative;
        box-shadow: 2px 4px 19px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        background-color: #fff;
        border: 8px solid #fff;
        box-sizing: border-box;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .gg-card-thumb {
        width: 100%;
        height: 380px;
        background-color: #f8f8f8;
        overflow: hidden;
    }

    .gg-card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gg-service-card:hover .gg-card-thumb img {
        transform: scale(1.05);
    }

    .gg-card-content {
        flex: 1;
        padding: 30px 24px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .gg-card-title {
        font-size: 28px;
        font-weight: 600;
        margin: 0;
        line-height: 1.2;
    }

    .gg-card-subtitle {
        font-size: 20px;
        font-weight: 600;
        color: #003c70;
        line-height: 1.3;
    }

    .gg-card-desc {
        font-size: 16px;
        font-weight: 400;
        color: #3a3a3a;
        line-height: 1.6;
    }

    .gg-read-more-btn {
        margin-top: auto;
        width: 100%;
        background-color: #003c70;
        border-radius: 5px;
        padding: 14px 10px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .gg-read-more-btn a {
        color: #fff;
        text-decoration: none;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 20px;
        display: block;
    }

    .gg-read-more-btn:hover {
        background-color: #002a4e;
    }

    /* Navigation Buttons */
    .gg-nav-btn {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: #fff;
        border: none;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        transition: all 0.3s ease;
    }

    .gg-nav-btn:hover {
        background: #f0f0f0;
        transform: translateY(-50%) scale(1.05);
    }

    .gg-btn-prev {
        left: 10px;
    }

    .gg-btn-next {
        right: 10px;
    }

    .gg-nav-btn svg {
        width: 24px;
        height: 24px;
        stroke: #003c70;
    }

    .gg-dots-container {
        display: flex;
        gap: 10px;
        margin-top: 30px;
    }

    .gg-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        border: none;
        cursor: pointer;
        padding: 0;
        transition: all 0.3s ease;
    }

    .gg-dot.active {
        background: #fff;
        width: 24px;
        border-radius: 10px;
    }

    /* Responsive Overrides */
    @media (max-width: 1200px) {
        .gg-carousel-slide {
            flex: 0 0 calc((100% - 24px) / 2);
        }
    }

    @media (max-width: 768px) {
        .gg-carousel-slide {
            flex: 0 0 100%;
        }

        .gg-service-card {
            height: auto;
            min-height: 600px;
        }

        .gg-card-thumb {
            height: 250px;
        }

        .gg-carousel-wrapper {
            padding: 0 20px;
        }

        .gg-nav-btn {
            display: none;
        }
    }
</style>

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