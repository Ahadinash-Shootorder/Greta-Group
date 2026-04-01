<section class="industry-page-certification">
    <div class="industry-page-certification-container container">
        <!-- Header -->
        <div class="industry-page-certification-header">
            <h2 class="industry-page-certification-title">Certification & Membership</h2>
            <div class="industry-page-certification-title-underline"></div>
        </div>

        <!-- Certificates Grid -->
        <div class="industry-page-certification-grid">
            <div class="industry-page-certification-card" onclick="openModal(0)">
                <img 
                    src="img/industry/certificate-001.jpg" 
                    alt="HACCP Certificate" 
                    class="industry-page-certification-image"
                >
            </div>
            <div class="industry-page-certification-card" onclick="openModal(1)">
                <img 
                    src="img/industry/ISO-9001-new-2026.jpg" 
                    alt="ISO 9001:2026 Certificate" 
                    class="industry-page-certification-image"
                >
            </div>
            <div class="industry-page-certification-card" onclick="openModal(2)">
                <img 
                    src="img/industry/ISO-14001-New-2026.jpg" 
                    alt="ISO 14001:2026 Certificate" 
                    class="industry-page-certification-image"
                >
            </div>
            <div class="industry-page-certification-card" onclick="openModal(3)">
                <img 
                    src="img/industry/ISO-22000-New-2026.jpg" 
                    alt="ISO 22000:2026 Certificate" 
                    class="industry-page-certification-image"
                >
            </div>
        </div>

        <!-- Footer Badge -->
        <!-- <div class="industry-page-certification-footer">
            <div class="industry-page-certification-badge">Certified</div>
            <div class="industry-page-certification-badge-subtitle">THREE STAR</div>
        </div> -->
    </div>
</section>

<!-- Modal -->
<div class="industry-page-certification-modal" id="certModal" onclick="closeModalOnBackground(event)">
    <div class="industry-page-certification-modal-content">
        <span class="industry-page-certification-modal-counter" id="modalCounter">1 / 4</span>
        
        <button class="industry-page-certification-modal-close" onclick="closeModal()">×</button>
        
        <button class="industry-page-certification-modal-nav industry-page-certification-modal-prev" onclick="changeSlide(-1)">❮</button>
        
        <img 
            src="" 
            alt="Certificate" 
            class="industry-page-certification-modal-image" 
            id="modalImage"
        >
        
        <button class="industry-page-certification-modal-nav industry-page-certification-modal-next" onclick="changeSlide(1)">❯</button>
    </div>
</div>

<script>
    const images = [
        'https://images.unsplash.com/photo-1554224311-beee460c201f?w=800&h=1000&fit=crop',
        'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&h=1000&fit=crop',
        'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=800&h=1000&fit=crop',
        'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=800&h=1000&fit=crop'
    ];

    let currentIndex = 0;
    let isZoomed = false;

    function openModal(index) {
        currentIndex = index;
        const modal = document.getElementById('certModal');
        const modalImage = document.getElementById('modalImage');
        
        modalImage.src = images[currentIndex];
        modal.classList.add('active');
        updateCounter();
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('certModal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
        isZoomed = false;
        resetZoom();
    }

    function closeModalOnBackground(event) {
        if (event.target.id === 'certModal') {
            closeModal();
        }
    }

    function changeSlide(direction) {
        currentIndex += direction;
        
        if (currentIndex >= images.length) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }
        
        const modalImage = document.getElementById('modalImage');
        modalImage.src = images[currentIndex];
        updateCounter();
        resetZoom();
    }

    function updateCounter() {
        const counter = document.getElementById('modalCounter');
        counter.textContent = `${currentIndex + 1} / ${images.length}`;
    }

    function toggleFullscreen() {
        const modal = document.getElementById('certModal');
        if (!document.fullscreenElement) {
            modal.requestFullscreen().catch(err => {
                console.log('Fullscreen error:', err);
            });
        } else {
            document.exitFullscreen();
        }
    }

    function zoomImage() {
        const modalImage = document.getElementById('modalImage');
        isZoomed = !isZoomed;
        
        if (isZoomed) {
            modalImage.style.transform = 'scale(1.5)';
            modalImage.style.cursor = 'zoom-out';
        } else {
            resetZoom();
        }
    }

    function resetZoom() {
        const modalImage = document.getElementById('modalImage');
        modalImage.style.transform = 'scale(1)';
        modalImage.style.cursor = 'default';
        isZoomed = false;
    }

    function shareImage() {
        if (navigator.share) {
            navigator.share({
                title: 'Shriram Food Certificate',
                text: 'Check out our certification',
                url: window.location.href
            }).catch(err => console.log('Share error:', err));
        } else {
            alert('Sharing is not supported on this browser');
        }
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(event) {
        const modal = document.getElementById('certModal');
        if (modal.classList.contains('active')) {
            if (event.key === 'Escape') {
                closeModal();
            } else if (event.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (event.key === 'ArrowRight') {
                changeSlide(1);
            }
        }
    });
</script>