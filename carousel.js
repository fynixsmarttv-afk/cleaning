
class LuxuryCarousel {
    constructor() {
        this.currentSlide = 0;
        this.prevSlideIndex = 0;
        this.slides = document.querySelectorAll('.carousel-slide');
        this.dots = document.querySelectorAll('.dot');
        this.prevBtn = document.querySelector('.carousel-nav.prev');
        this.nextBtn = document.querySelector('.carousel-nav.next');
        this.totalSlides = this.slides.length;
        this.autoPlayInterval = null;
        this.autoPlayDelay = 7000;
        this.isTransitioning = false;
        
        this.init();
    }
    
    init() {
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());
        
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.prevSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        });
        
        this.startAutoPlay();
        
        const carouselElement = this.slides[0].parentElement;
        carouselElement.addEventListener('mouseenter', () => {
            this.stopAutoPlay();
        });
        
        carouselElement.addEventListener('mouseleave', () => {
            this.startAutoPlay();
        });
        
        let touchStartX = 0;
        let touchEndX = 0;
        
        carouselElement.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            this.stopAutoPlay();
        });
        
        carouselElement.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe(touchStartX, touchEndX);
            this.startAutoPlay();
        });
        
        this.preloadImages();
        this.animateTitle();
    }
    
    handleSwipe(startX, endX) {
        const swipeThreshold = 50;
        const diff = startX - endX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                this.nextSlide();
            } else {
                this.prevSlide();
            }
        }
    }
    
    goToSlide(index) {
        if (this.isTransitioning || index === this.currentSlide) return;
        
        this.isTransitioning = true;
        
        this.slides.forEach(slide => {
            slide.classList.remove('active', 'prev-slide');
        });
        
        this.dots[this.currentSlide].classList.remove('active');
        
        this.slides[this.currentSlide].classList.add('prev-slide');
        this.prevSlideIndex = this.currentSlide;
        this.currentSlide = index;
        
        this.slides[this.currentSlide].classList.add('active');
        this.dots[this.currentSlide].classList.add('active');
        
        this.animateTitle();
        
        setTimeout(() => {
            this.slides[this.prevSlideIndex].classList.remove('prev-slide');
            this.isTransitioning = false;
        }, 1400);
        
        this.resetAutoPlay();
    }
    
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextIndex);
    }
    
    prevSlide() {
        const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.goToSlide(prevIndex);
    }
    
    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => {
            this.nextSlide();
        }, this.autoPlayDelay);
    }
    
    stopAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
    }
    
    resetAutoPlay() {
        this.stopAutoPlay();
        this.startAutoPlay();
    }
    
    animateTitle() {
        this.slides.forEach((slide, idx) => {
            const title = slide.querySelector('.slide-title');
            if (!title) return;
            
            const originalText = title.getAttribute('data-text');
            if (originalText && idx !== this.currentSlide) {
                title.textContent = originalText;
            }
        });
        
        const activeSlide = this.slides[this.currentSlide];
        const title = activeSlide.querySelector('.slide-title');
        
        if (!title) return;
        
        const text = title.getAttribute('data-text') || title.textContent;
        
        if (!document.getElementById('letter-animation')) {
            const style = document.createElement('style');
            style.id = 'letter-animation';
            style.textContent = `
                @keyframes letterPop {
                    0% {
                        opacity: 0;
                        transform: translateY(20px) rotateX(-90deg);
                    }
                    50% {
                        transform: translateY(-5px) rotateX(10deg);
                    }
                    100% {
                        opacity: 1;
                        transform: translateY(0) rotateX(0);
                    }
                }
            `;
            document.head.appendChild(style);
        }
        
        setTimeout(() => {
            const words = text.split(' ');
            let html = '';
            
            words.forEach((word, wordIndex) => {
                const letters = word.split('');
                html += '<span class="word" style="display: inline-block; margin-right: 0.25em;">';
                
                letters.forEach((letter, letterIndex) => {
                    const delay = (wordIndex * letters.length + letterIndex) * 0.02;
                    html += `<span style="display: inline-block; animation: letterPop 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) ${delay}s both;">${letter === ' ' ? '&nbsp;' : letter}</span>`;
                });
                
                html += '</span>';
            });
            
            title.innerHTML = html;
        }, 300);
    }
    
    preloadImages() {
        const images = document.querySelectorAll('.slide-image');
        images.forEach(img => {
            const src = img.getAttribute('src');
            const image = new Image();
            image.src = src;
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.hero-carousel')) {
        new LuxuryCarousel();
    }
});
