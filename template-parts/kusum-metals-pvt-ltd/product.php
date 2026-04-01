<section class="industry-page-product pt-70 pb-70">
    <div class="industry-page-product-container container">
        <!-- Header -->
        <div class="industry-page-product-header">
            <h2 class="industry-page-product-title">Variety of Rice</h2>
            <div class="industry-page-product-title-underline"></div>
        </div>

        <!-- Product Grid -->
        <div class="industry-page-product-grid">
            <!-- FERROUS SCRAP  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/kusum/ferrous-scrap.webp" 
                        alt="FERROUS SCRAP " 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">FERROUS SCRAP</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Scrap metal derived from iron and steel. We source, process, and sell high-quality scrap steel and iron for use in foundries and steel mills globally. 
                    </div>
                </div>
            </div>

            <!-- NON-FERROUS SCRAP -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/kusum/non-ferrous.webp" 
                        alt="NON-FERROUS SCRAP" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">NON-FERROUS SCRAP</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        High-value scrap that does not contain iron, including essential commodity metals and their alloys. We specialize in non-ferrous categories such as aluminium and lead. 
                    </div>
                </div>
            </div>

            <!-- COPPER AND ALLOYS  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/kusum/copper-alloys.webp" 
                        alt="COPPER AND ALLOYS " 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">COPPER AND ALLOYS </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Premium, high-demand non-ferrous metals. Our extensive operations include the recovery, processing, and trading of pure copper scrap and various copper alloys for manufacturing new products. 
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