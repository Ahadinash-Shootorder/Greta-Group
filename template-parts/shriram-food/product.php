<section class="industry-page-product pt-70 pb-70">
    <div class="industry-page-product-container container">
        <!-- Header -->
        <div class="industry-page-product-header">
            <h2 class="industry-page-product-title">Variety of Rice</h2>
            <div class="industry-page-product-title-underline"></div>
        </div>

        <!-- Product Grid -->
        <div class="industry-page-product-grid">
            <!-- Parboiled Rice -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/parboiled-rice.webp" 
                        alt="Parboiled Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Parboiled Rice</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Paddy is soaked and steamed before milling, a process that drives nutrients into the grain and results in a firmer, high-yield kernel with superior nutritional value. 
                    </div>
                </div>
            </div>

            <!-- White Rice -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/white-rice.webp" 
                        alt="White Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">White Rice</h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        The most popular polished variety, where the husk, bran, and germ are completely removed to produce clean, smooth, long-grain kernels prized for affordability and widespread consumption. 
                    </div>
                </div>
            </div>

            <!-- Steam Rice  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/steam-rice.webp" 
                        alt="100% Broken Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Steam Rice </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Rice that is mildly steamed after husking to reduce breakage during the milling process, offering a texture that is slightly different from raw white rice and is favored in many markets. 
                    </div>
                </div>
            </div>

             <!-- 100% Broken Rice -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/broken-rice.webp" 
                        alt="100% Broken Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">100% Broken Rice </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Fragments of rice grains that break during milling. Although fragmented, this is a highly demanded byproduct used in specialized regional cuisine and for animal feed. 
                    </div>
                </div>
            </div>

             <!-- Basmati Rice   -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/basmati-rice.webp" 
                        alt="100% Broken Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Basmati Rice </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Premium long-grain aromatic rice varieties (like 1121, 1509) known globally for their exceptional grain length, fluffy texture, and intense aroma after cooking. 
                    </div>
                </div>
            </div>

             <!-- Regional Varieties   -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/shriram-food-product/regional-varities.webp" 
                        alt="100% Broken Rice" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Regional Varieties  </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                        Includes popular Indian non-Basmati strains such as HMT Rice, Kolam Rice, and BPT Rice, which cater to specific domestic and international consumer preferences. 
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