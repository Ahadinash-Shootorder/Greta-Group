 <section class="news-section-hero pt-70 pb-70">
        <div class="news-section-container container">
            <!-- Breadcrumb -->
            <!-- <nav class="news-section-breadcrumb">
                <a href="#" class="news-section-breadcrumb-link">Home</a>
                <span class="news-section-breadcrumb-separator">/</span>
                <a href="#" class="news-section-breadcrumb-link">Blogs</a>
            </nav> -->
            
            <h1 class="news-section-title">
                Thought<br>Leadership
            </h1>
            
            <p class="news-section-description">
                Explore the latest news from around the world. We bring you up-to-the-minute updates on the most significant events, trends, and stories. Discover the world through our news coverage.
            </p>
        

        <!-- <section class="news-section-slider-wrapper">
        <div class="news-section-slider-container"> -->
           <div>
            <div class="news-section-slider" id="news-section-slider">
                <!-- Slide 1 -->
                <div class="news-section-slide news-section-active" data-slide="1">
                    <div class="news-section-slide-image">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&h=500&fit=crop" alt="AI Brain">
                    </div>
                    <div class="news-section-slide-content">
                        <div class="news-section-slide-meta">
                            <span class="news-section-slide-tag">AI ML</span>
                            <span class="news-section-slide-date">June 20, 2025</span>
                        </div>
                        <h2 class="news-section-slide-title">Why the Future of Software Belongs to AI Agents</h2>
                        <p class="news-section-slide-description">
                            Despite impressive progress, artificial intelligence largely operates in the background. It autocompletes sentences, flags anomalies, optimizes recommendations, and responds to user queries but typically in reaction to human input. Even the most sophisticated models wait for directions. They assist with decisions but do not make them. That paradigm is over. AI has evolved from a reactive tool into an autonomous...
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="news-section-slide" data-slide="2">
                    <div class="news-section-slide-image">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=500&fit=crop" alt="Technology">
                    </div>
                    <div class="news-section-slide-content">
                        <div class="news-section-slide-meta">
                            <span class="news-section-slide-tag">Technology</span>
                            <span class="news-section-slide-date">June 18, 2025</span>
                        </div>
                        <h2 class="news-section-slide-title">The Digital Transformation Revolution</h2>
                        <p class="news-section-slide-description">
                            The pace of digital transformation has accelerated dramatically, reshaping industries and redefining how businesses operate. From cloud computing to edge technologies, organizations are embracing new paradigms that promise greater efficiency, innovation, and competitive advantage in an increasingly connected world...
                        </p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="news-section-slide" data-slide="3">
                    <div class="news-section-slide-image">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&h=500&fit=crop" alt="Innovation">
                    </div>
                    <div class="news-section-slide-content">
                        <div class="news-section-slide-meta">
                            <span class="news-section-slide-tag">Innovation</span>
                            <span class="news-section-slide-date">June 15, 2025</span>
                        </div>
                        <h2 class="news-section-slide-title">Building Tomorrow's Tech Today</h2>
                        <p class="news-section-slide-description">
                            Innovation is no longer a luxury—it's a necessity. As we stand at the crossroads of technological advancement, companies that embrace change and invest in cutting-edge solutions are positioning themselves for long-term success. The future belongs to those who dare to innovate and transform challenges into opportunities...
                        </p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="news-section-slide" data-slide="4">
                    <div class="news-section-slide-image">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&h=500&fit=crop" alt="Leadership">
                    </div>
                    <div class="news-section-slide-content">
                        <div class="news-section-slide-meta">
                            <span class="news-section-slide-tag">Leadership</span>
                            <span class="news-section-slide-date">June 12, 2025</span>
                        </div>
                        <h2 class="news-section-slide-title">Leading Teams in the Age of Remote Work</h2>
                        <p class="news-section-slide-description">
                            The shift to remote and hybrid work models has fundamentally changed how leaders manage teams and drive productivity. Successful leaders are adapting their strategies, leveraging technology, and fostering cultures of trust and collaboration that transcend physical boundaries and enable teams to thrive in any environment...
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="news-section-slider-nav">
                <button class="news-section-nav-btn" id="news-section-prev-btn" aria-label="Previous slide">
                    <svg viewBox="0 0 24 24">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="news-section-nav-btn" id="news-section-next-btn" aria-label="Next slide">
                    <svg viewBox="0 0 24 24">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
            </div>

            </div>
            
        <!-- </div>
    </section> -->


    </section>

     <script>
        // Slider functionality
        const newsSlider = document.getElementById('news-section-slider');
        const newsSlides = newsSlider.querySelectorAll('.news-section-slide');
        const newsPrevBtn = document.getElementById('news-section-prev-btn');
        const newsNextBtn = document.getElementById('news-section-next-btn');
        let newsCurrentSlide = 0;

        function newsShowSlide(index) {
            newsSlides.forEach(slide => {
                slide.classList.remove('news-section-active');
            });
            
            if (index >= newsSlides.length) {
                newsCurrentSlide = 0;
            } else if (index < 0) {
                newsCurrentSlide = newsSlides.length - 1;
            } else {
                newsCurrentSlide = index;
            }
            
            newsSlides[newsCurrentSlide].classList.add('news-section-active');
        }

        newsNextBtn.addEventListener('click', () => {
            newsShowSlide(newsCurrentSlide + 1);
        });

        newsPrevBtn.addEventListener('click', () => {
            newsShowSlide(newsCurrentSlide - 1);
        });

        // Optional: Auto-advance slides every 5 seconds
        // setInterval(() => {
        //     newsShowSlide(newsCurrentSlide + 1);
        // }, 5000);
    </script>