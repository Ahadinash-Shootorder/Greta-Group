<section class="industry-page-product pt-70 pb-70">
    <div class="industry-page-product-container container">
        <!-- Header -->
        <div class="industry-page-product-header">
            <h2 class="industry-page-product-title">Core Ferrous Commodities </h2>
            <div class="industry-page-product-title-underline"></div>
        </div>

        <!-- Product Grid -->
        <div class="industry-page-product-grid">
            <!-- Ferrous Scrap   -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/global-metcorp/ferrous-scrap.webp" 
                        alt="Ferrous Scrap" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Ferrous Scrap</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        This is the primary feedstock for Electric Arc Furnaces (EAFs) and is the core product traded by metal recyclers and ferrous commodity houses like Global Metcorp. 
                    </div>
                </div>
            </div>

            <!-- Pig Iron  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/global-metcorp/pig-iron.webp" 
                        alt="Pig Iron" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Pig Iron </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        It is a primary raw material used in both EAFs and Basic Oxygen Furnaces (BOFs) for steel production. 
                    </div>
                </div>
            </div>

            <!-- Steel Billets  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/global-metcorp/steel-billets.webp" 
                        alt="Steel Billets " 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Steel Billets </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        This is a semi-finished steel product. Trading houses often deal in semi-finished goods as well as scrap to offer a complete supply solution to rolling mills. 
                    </div>
                </div>
            </div>

              <!-- HBI & DRI   -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/global-metcorp/hbi-dri.webp" 
                        alt="HBI DRI" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">HBI & DRI </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Hot Briquetted Iron (HBI) and Direct Reduced Iron (DRI) are high-purity iron inputs that serve as substitutes for scrap, making them essential commodities for any advanced ferrous trading house. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleDetails(button) {
        const description = button.nextElementSibling;
        const arrow = button.querySelector('.industry-page-product-arrow');
        
        if (description.classList.contains('show')) {
            description.classList.remove('show');
            arrow.classList.remove('open');
        } else {
            description.classList.add('show');
            arrow.classList.add('open');
        }
    }
</script>