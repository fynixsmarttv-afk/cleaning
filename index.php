<?php
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- Hero Carousel Section -->
<div class="hero-carousel">
    <div class="carousel-container">
        <?php
        $slides = [
            [
                'image' => '/assets/images/Premium_dry_cleaning_service_1f933a38.png',
                'title' => 'Premium Dry Cleaning',
                'subtitle' => 'Expert Care for Your Finest Garments',
                'description' => 'Experience luxury dry cleaning with eco-friendly technology and 72-hour turnaround',
                'cta' => 'Book Now',
                'link' => '/contact.php'
            ],
            [
                'image' => '/assets/images/Wedding_dress_preservation_bb8f7a6c.png',
                'title' => 'Wedding Gown Preservation',
                'subtitle' => 'Cherish Your Special Memories',
                'description' => 'Professional wedding dress cleaning and preservation starting at $169',
                'cta' => 'Learn More',
                'link' => '/services.php'
            ],
            [
                'image' => '/assets/images/Alterations_and_repairs_6f5039c6.png',
                'title' => 'Corporate Excellence',
                'subtitle' => 'Same-Day Service Available',
                'description' => 'In by 9, Out by 5 - Perfect for busy professionals',
                'cta' => 'Get Started',
                'link' => '/contact.php'
            ],
            [
                'image' => '/assets/images/Modern_laundry_equipment_59fd9c4f.png',
                'title' => 'Commercial Laundry',
                'subtitle' => 'Trusted by Hotels & Businesses',
                'description' => 'Bulk laundry services with free pickup and delivery',
                'cta' => 'Request Quote',
                'link' => '/contact.php'
            ],
            [
                'image' => '/assets/images/Household_fabric_cleaning_dc6a49c4.png',
                'title' => 'Specialty Fabric Care',
                'subtitle' => 'Leather, Silk & Persian Rugs',
                'description' => 'Expert treatment for delicate and rare fabrics',
                'cta' => 'Explore Services',
                'link' => '/services.php'
            ]
        ];

        foreach ($slides as $index => $slide) {
            $activeClass = $index === 0 ? 'active' : '';
            echo "
            <div class='carousel-slide {$activeClass}' data-slide='{$index}'>
                <div class='slide-background'>
                    <div class='slide-image-wrapper'>
                        <img src='{$slide['image']}' alt='{$slide['title']}' class='slide-image'>
                    </div>
                    <div class='diagonal-overlay'></div>
                    <div class='carousel-gradient-overlay'></div>
                </div>
                <div class='slide-content'>
                    <div class='content-inner'>
                        <div class='title-wrapper'>
                            <h1 class='slide-title' data-text='{$slide['title']}'>{$slide['title']}</h1>
                        </div>
                        <div class='accent-line'></div>
                        <h2 class='slide-subtitle'>{$slide['subtitle']}</h2>
                        <p class='slide-description'>{$slide['description']}</p>
                        <div class='cta-wrapper'>
                            <a href='{$slide['link']}' class='cta-button'>
                                <span class='button-text'>{$slide['cta']}</span>
                                <span class='button-icon'>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        ?>
    </div>

    <button class="carousel-nav prev" aria-label="Previous slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M15 18l-6-6 6-6"/>
        </svg>
    </button>
    <button class="carousel-nav next" aria-label="Next slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 18l6-6-6-6"/>
        </svg>
    </button>

    <div class="carousel-dots">
        <?php
        for ($i = 0; $i < count($slides); $i++) {
            $activeClass = $i === 0 ? 'active' : '';
            echo "<button class='dot {$activeClass}' data-slide='{$i}' aria-label='Go to slide " . ($i + 1) . "'></button>";
        }
        ?>
    </div>
</div>

<!-- About Preview Section -->
<section id="about" class="container">
    <div class="section-header">
        <p class="section-subtitle">About Us</p>
        <h2 class="section-title">20+ Years of Trusted Excellence</h2>
        <p class="section-description">Sands Cleaners has been serving the Bay Area with premium dry cleaning and laundry services since the 1990s. We pride ourselves on delivering exceptional quality and customer satisfaction.</p>
    </div>
    
    <div class="services-grid" style="margin-top: 40px;">
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Expert Care</h3>
                <p>Over two decades of professional garment care experience with trained specialists who understand every fabric type.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Eco-Friendly</h3>
                <p>We use environmentally safe cleaning methods and green-certified detergents to protect your clothes and the planet.</p>
            </div>
        </div>
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Fast Turnaround</h3>
                <p>72-hour standard service or same-day "In by 9, Out by 5" for your urgent cleaning needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" style="background: linear-gradient(180deg, #f8fafc 0%, #e0f2fe 100%);">
    <div class="container">
        <div class="section-header">
            <p class="section-subtitle">Our Services</p>
            <h2 class="section-title">Complete Garment Care Solutions</h2>
            <p class="section-description">From everyday wear to delicate designer pieces, we handle all your fabric cleaning needs with professional expertise.</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <img src="/assets/images/Premium_dry_cleaning_service_1f933a38.png" alt="Dry Cleaning Service" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-shirt"></i>
                    </div>
                    <h3>Premium Dry Cleaning</h3>
                    <p>Expert dry cleaning for suits, dresses, coats, and delicate fabrics. We remove tough stains while preserving fabric integrity.</p>
                    <a href="/services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <img src="/assets/images/Modern_laundry_equipment_59fd9c4f.png" alt="Laundry Service" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-soap"></i>
                    </div>
                    <h3>Laundry by Kilo</h3>
                    <p>Professional wash & fold or wash & iron service at $3.25 per pound. Perfect for busy individuals and families.</p>
                    <a href="/services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <img src="/assets/images/Wedding_dress_preservation_bb8f7a6c.png" alt="Wedding Dress Care" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Wedding Dress Care</h3>
                    <p>Specialized cleaning and preservation for your precious wedding gown. Keep your memories pristine for generations.</p>
                    <a href="/services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <img src="/assets/images/Alterations_and_repairs_6f5039c6.png" alt="Alterations" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-scissors"></i>
                    </div>
                    <h3>Alterations & Repairs</h3>
                    <p>Professional tailoring services including hemming, zipper replacement, and custom adjustments for perfect fit.</p>
                    <a href="/services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <img src="/assets/images/Household_fabric_cleaning_dc6a49c4.png" alt="Household Fabrics" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3>Household Fabrics</h3>
                    <p>Comforters, bedding, curtains, and rugs cleaned to perfection. Queen comforters from just $25.</p>
                    <a href="/services.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="service-card">
                <img src="/assets/images/Fire_smoke_restoration_service_52e3f48d.png" alt="Restoration" class="service-image">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h3>Restoration Services</h3>
                    <p>24/7 emergency textile restoration for fire, smoke, water, and mold damage. Expert recovery of your valuables.</p>
                    <a href="/restoration.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clothes Wire Animation Section -->
<section class="clothes-wire-section">
    <div class="container">
        <div class="section-header">
            <p class="section-subtitle">Quality Care</p>
            <h2 class="section-title">We Care For Every Garment</h2>
            <p class="section-description">From everyday wear to special occasions, each piece receives expert attention and personalized care.</p>
        </div>
        
        <div class="wire-container">
            <div class="wire-line"></div>
            <div class="clothes-container">
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #3b82f6;">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <p class="garment-label">Dress Shirts</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #1e293b;">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <p class="garment-label">Suits</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #ec4899;">
                        <i class="fas fa-vest"></i>
                    </div>
                    <p class="garment-label">Blouses</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #8b5cf6;">
                        <i class="fas fa-person-dress"></i>
                    </div>
                    <p class="garment-label">Dresses</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #10b981;">
                        <i class="fas fa-shirt"></i>
                    </div>
                    <p class="garment-label">Polos</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #6366f1;">
                        <i class="fas fa-vest-patches"></i>
                    </div>
                    <p class="garment-label">Coats</p>
                </div>
                
                <!-- Duplicate for seamless loop -->
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #3b82f6;">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <p class="garment-label">Dress Shirts</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #1e293b;">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <p class="garment-label">Suits</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #ec4899;">
                        <i class="fas fa-vest"></i>
                    </div>
                    <p class="garment-label">Blouses</p>
                </div>
                
                <div class="garment-item">
                    <div class="hanger">
                        <div class="hanger-hook"></div>
                    </div>
                    <div class="garment-icon-box" style="color: #8b5cf6;">
                        <i class="fas fa-person-dress"></i>
                    </div>
                    <p class="garment-label">Dresses</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="container">
    <div class="section-header">
        <p class="section-subtitle">How It Works</p>
        <h2 class="section-title">Simple 4-Step Process</h2>
        <p class="section-description">Experience hassle-free garment care with our streamlined pickup, cleaning, and delivery service.</p>
    </div>
    
    <div class="process-timeline">
        <div class="process-step">
            <h3>Schedule Pickup</h3>
            <p>Call us or fill out our online form to schedule a free pickup at your convenience. Tuesday and Friday service available.</p>
        </div>
        
        <div class="process-step">
            <h3>We Collect</h3>
            <p>Our professional team arrives at your doorstep to collect your garments in sturdy bags with special handling instructions.</p>
        </div>
        
        <div class="process-step">
            <h3>Expert Cleaning</h3>
            <p>Your clothes receive professional treatment using state-of-the-art equipment and eco-friendly cleaning methods.</p>
        </div>
        
        <div class="process-step">
            <h3>Delivery</h3>
            <p>We deliver your fresh, perfectly cleaned clothes back to your door within 72 hours, ready to wear.</p>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number" data-count="10000">0</div>
                <p class="stat-label">Happy Customers</p>
            </div>
            
            <div class="stat-item">
                <div class="stat-number" data-count="50000">0</div>
                <p class="stat-label">Garments Cleaned</p>
            </div>
            
            <div class="stat-item">
                <div class="stat-number" data-count="20">0</div>
                <p class="stat-label">Years of Experience</p>
            </div>
            
            <div class="stat-item">
                <div class="stat-number" data-count="98">0</div>
                <p class="stat-label">% On-Time Delivery</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="container">
    <div class="section-header">
        <p class="section-subtitle">Why Choose Sands Cleaners</p>
        <h2 class="section-title">Unmatched Quality & Service</h2>
        <p class="section-description">Discover what makes us the preferred choice for premium dry cleaning in the Bay Area.</p>
    </div>
    
    <div class="services-grid">
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Free Pickup & Delivery</h3>
                <p>Enjoy complimentary pickup and delivery service with a minimum order of $50. We come to you!</p>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Same-Day Service</h3>
                <p>"In by 9, Out by 5" express service available for your urgent cleaning needs at no extra cost.</p>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Quality Guarantee</h3>
                <p>100% satisfaction guaranteed. We stand behind our work and will re-clean any unsatisfactory items for free.</p>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-recycle"></i>
                </div>
                <h3>Eco-Friendly</h3>
                <p>Green-certified detergents and environmentally responsible practices protect your health and the planet.</p>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-hand-sparkles"></i>
                </div>
                <h3>Fabric Experts</h3>
                <p>Specialized care for rare and delicate fabrics including silk, wool, linen, and designer garments.</p>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3>Competitive Pricing</h3>
                <p>Premium quality at fair prices. Volume discounts available for businesses and regular customers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section style="background: linear-gradient(180deg, #f8fafc 0%, #e0f2fe 100%);">
    <div class="container">
        <div class="section-header">
            <p class="section-subtitle">Testimonials</p>
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-description">Join thousands of satisfied customers who trust us with their garments.</p>
        </div>
        
        <div class="testimonials-slider">
            <div class="testimonials-track">
                <div class="testimonial-card active">
                    <p class="testimonial-text">Sands Cleaners has been my go-to for years. Their attention to detail is incredible, and my designer suits always come back looking brand new. The pickup and delivery service is so convenient!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JD</div>
                        <div class="author-info">
                            <h4>James Davidson</h4>
                            <p>Business Professional</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">I trust only Sands Cleaners with my wedding dress preservation. They did an amazing job cleaning and boxing it beautifully. Professional, caring, and worth every penny!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SM</div>
                        <div class="author-info">
                            <h4>Sarah Martinez</h4>
                            <p>Happy Bride</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">Best dry cleaning service in the Bay Area! They removed a wine stain from my favorite silk blouse that I thought was ruined forever. Excellent customer service and fast turnaround.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RK</div>
                        <div class="author-info">
                            <h4>Rachel Kim</h4>
                            <p>Marketing Executive</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">Outstanding service! I've been using Sands Cleaners for my restaurant's tablecloths and uniforms. Always spotless, perfectly pressed, and delivered on time. Their bulk pricing is very competitive.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MP</div>
                        <div class="author-info">
                            <h4>Michael Patel</h4>
                            <p>Restaurant Owner</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">After a small kitchen fire, I thought my favorite coat was ruined. Sands Cleaners' restoration service saved it! The smell is completely gone and it looks brand new. I'm amazed!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">LC</div>
                        <div class="author-info">
                            <h4>Lisa Chen</h4>
                            <p>Satisfied Customer</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">Professional alterations and quick turnaround! They hemmed my pants perfectly and repaired a torn jacket pocket. The craftsmanship is excellent and prices are very reasonable.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">DW</div>
                        <div class="author-info">
                            <h4>David Wong</h4>
                            <p>Software Engineer</p>
                            <div class="testimonial-rating">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-controls">
                <button class="testimonial-nav testimonial-prev" aria-label="Previous testimonial">‹</button>
                <div class="testimonial-dots">
                    <span class="testimonial-dot active"></span>
                    <span class="testimonial-dot"></span>
                    <span class="testimonial-dot"></span>
                    <span class="testimonial-dot"></span>
                    <span class="testimonial-dot"></span>
                    <span class="testimonial-dot"></span>
                </div>
                <button class="testimonial-nav testimonial-next" aria-label="Next testimonial">›</button>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas Section -->
<section class="container">
    <div class="section-header">
        <p class="section-subtitle">Service Areas</p>
        <h2 class="section-title">Serving the Greater Bay Area</h2>
        <p class="section-description">We proudly serve San Jose and surrounding communities with premium dry cleaning and laundry services.</p>
    </div>
    
    <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 4px 16px rgba(30, 41, 59, 0.12);">
        <p style="font-size: 18px; line-height: 2; color: #64748b;">San Jose • Santa Clara • Saratoga • Los Gatos • Campbell • Cupertino • Sunnyvale • Mountain View • Palo Alto</p>
        <a href="/contact.php" class="btn btn-primary" style="margin-top: 30px;">Check Your Area</a>
    </div>
</section>

<!-- Business Services Section -->
<section style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: white;">
    <div class="container">
        <div class="section-header">
            <p class="section-subtitle" style="color: #06b6d4;">Business Solutions</p>
            <h2 class="section-title" style="color: white;">Commercial Laundry Services</h2>
            <p class="section-description" style="color: rgba(255,255,255,0.8);">Specialized cleaning services for hotels, restaurants, catering companies, security firms, and schools.</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>Hotels & Motels</h3>
                    <p>Bulk wash and fold for sheets, blankets, pillows, and towels at $1.95 per pound. Volume discounts available.</p>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering Businesses</h3>
                    <p>Professional cleaning for tablecloths, chef coats, bar towels, and napkins. Reliable service for your events.</p>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Security Uniforms</h3>
                    <p>Bulk cleaning for security company uniforms including shirts, pants, jackets, and accessories.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="container" style="text-align: center;">
    <div style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); padding: 80px 40px; border-radius: 30px; color: white;">
        <h2 style="font-size: 48px; margin-bottom: 20px; color: white;">Ready to Experience Premium Care?</h2>
        <p style="font-size: 20px; margin-bottom: 40px; opacity: 0.95;">Schedule your free pickup today and discover why Bay Area residents trust Sands Cleaners.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="/contact.php" class="btn" style="background: white; color: #06b6d4; border: none;">Schedule Pickup</a>
            <a href="tel:4082469377" class="btn" style="background: transparent; color: white; border-color: white;">Call (408) 246-9377</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
