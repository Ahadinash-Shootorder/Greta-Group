<section class="industry-page-product pt-70 pb-70">
    <div class="industry-page-product-container container">
        <!-- Header -->
        <div class="industry-page-product-header">
            <h2 class="industry-page-product-title">Variety of Rice</h2>
            <div class="industry-page-product-title-underline"></div>
        </div>

        <!-- Product Grid -->
        <div class="industry-page-product-grid">
            <!-- Steel Product -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-metal-pte-ltd/steel-product.webp" 
                        alt="Steel Product" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Steel Product</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Global wholesale trade in essential semi-finished steel products. This includes core items like Steel Billets and Wire Rods in various sizes and grades to fulfill customer specifications.  
                    </div>
                </div>
            </div>

            <!-- FERROUS SCRAP  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-metal-pte-ltd/ferrous-scarp.webp" 
                        alt="FERROUS SCRAP" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">FERROUS SCRAP </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                       Sourcing and supply of high-volume ferrous scrap for use in manufacturing new metal products. This ensures a sustainable, circular economy approach for steel and iron producers globally.  
                    </div>
                </div>
            </div>

            <!-- Minerals and Ores -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-metal-pte-ltd/chrome-ore.webp" 
                        alt="Chrome Ore" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Chrome Ore</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                       Strategic trading of bulk minerals and ores essential for the steel and alloy industries. Key commodities include Chrome Ore and Manganese Ore which are vital in various industrial processes. 
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