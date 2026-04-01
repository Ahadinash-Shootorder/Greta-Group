<section class="industry-page-product pt-70 pb-70">
    <div class="industry-page-product-container container">
        <!-- Header -->
        <div class="industry-page-product-header">
            <h2 class="industry-page-product-title">Products & Solutions </h2>
            <div class="industry-page-product-title-underline"></div>
        </div>

        <!-- Product Grid -->
        <div class="industry-page-product-grid">
            <!-- LITHIUM (Li)  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-minerals/lithium.webp" 
                        alt="LITHIUM (Li)" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">LITHIUM (Li) </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                       A critical mineral essential for EV batteries and large-scale renewable energy storage solutions. We target high-potential pegmatite deposits in Australia's Lithium Corridor. 
                    </div>
                </div>
            </div>

            <!-- GOLD (Au) -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-minerals/gold.webp" 
                        alt="GOLD (Au)" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">GOLD (Au)  </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                      A highly valued commodity used in investment, jewelry, and electronics. Our projects are strategically located within the Kalgoorlie Terrane, a globally renowned gold region. 

  
                    </div>
                </div>
            </div>

            <!-- REE  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-minerals/ree.webp" 
                        alt="REE" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">RARE EARTH ELEMENTS (REE)  </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                      A group of seventeen elements vital for high-tech manufacturing, including specialized magnets in wind turbines and advanced electronics. We focus on exploring prospective assets near the Ida Fault. 
                    </div>
                </div>
            </div>

              <!--Coal  -->
            <div class="industry-page-product-card">
                <div class="industry-page-product-image-wrapper">
                    <img 
                        src="img/industry/greta-minerals/coal.webp" 
                        alt="Coal" 
                        class="industry-page-product-image"
                    >
                </div>
                <div class="industry-page-product-info">
                    <h3 class="industry-page-product-name">Coal </h3>
                    <button class="industry-page-product-details-toggle" onclick="toggleDetails(this)">
                        <span>Product Details</span>
                        <span class="industry-page-product-arrow">▼</span>
                    </button>
                    <div class="industry-page-product-description">
                     Managed through PT Greta Coal (established 2010), this commodity focuses on exploration, extraction, and trading of coal resources to support growing energy requirements.  
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