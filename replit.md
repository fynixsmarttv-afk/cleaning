# Sands Cleaners - Ultra-Luxury Dry Cleaning & Laundry Website

## Overview

Sands Cleaners is an ultra-luxury dry cleaning and laundry service website built with pure PHP (no frameworks). The website features premium design, 3D animations, interactive UI elements, and comprehensive content across 8 pages serving the Bay Area and Northern California.

**Last Updated:** November 15, 2025

## User Preferences

Preferred communication style: Simple, everyday language.

## Technology Stack

### Core Technologies
- **Backend:** PHP 8.4 (pure PHP, no frameworks)
- **Frontend:** HTML5, CSS3, JavaScript (vanilla, no frameworks)
- **Server:** PHP built-in development server on port 5000
- **Typography:** Google Fonts (Playfair Display, Inter)
- **Icons:** Font Awesome 6.4.0

### Design System

**Color Palette:**
- Primary: Navy Blue (#1e293b)
- Accent: Cyan (#06b6d4)
- Text: Slate shades (#64748b, #475569)
- Backgrounds: White (#ffffff), Light Gray (#f8fafc)

**Typography:**
- Headings: Playfair Display (serif, luxury feel)
- Body: Inter (sans-serif, clean readability)
- Font weights: 300-800

**Animation System:**
- 3D CSS transforms and transitions
- Cubic-bezier easing for smooth motion
- Parallax scrolling effects
- Hover animations on cards
- Counter animations for statistics
- Marquee effect for clothes-on-wire animation
- Delivery truck booking animation

## Project Structure

```
/
├── public/                      # Web root directory
│   ├── index.php               # Home page (14-15 sections)
│   ├── about.php               # About Us page
│   ├── services.php            # Services overview
│   ├── pricing.php             # Complete pricing tables
│   ├── process.php             # 4-step process
│   ├── restoration.php         # Restoration services
│   ├── contact.php             # Contact form & info
│   ├── faq.php                 # FAQs with accordion
│   ├── includes/               # PHP components
│   │   ├── header.php          # Header with navigation
│   │   └── footer.php          # Footer with contact info
│   └── assets/                 # Static assets
│       ├── css/
│       │   └── style.css       # Main stylesheet (3000+ lines)
│       ├── js/
│       │   └── script.js       # Interactive features
│       └── images/             # 9 AI-generated premium images
│           ├── logo.png
│           ├── Premium_dry_cleaning_service_1f933a38.png
│           ├── Modern_laundry_equipment_59fd9c4f.png
│           ├── Wedding_dress_preservation_bb8f7a6c.png
│           ├── Alterations_and_repairs_6f5039c6.png
│           ├── Household_fabric_cleaning_dc6a49c4.png
│           ├── Fire_smoke_restoration_service_52e3f48d.png
│           ├── Luxury_laundry_hero_background_9868be20.png
│           └── Luxury_navy_background_texture_0b2f6af1.png
├── attached_assets/            # Source materials & generated images
└── replit.md                   # Project documentation
```

## Page Descriptions

### 1. Home Page (`index.php`)
**Sections (14+):**
1. Hero section with animated background
2. About preview with feature cards
3. Services grid with images
4. Why Choose Us section
5. Process timeline
6. Statistics counters
7. Clothes-on-wire marquee animation
8. Wedding dress preservation
9. Restoration services preview
10. Business services
11. Coverage area
12. Testimonials slider
13. Delivery booking animation
14. Call-to-action section

### 2. About Page (`about.php`)
- Company history (20+ years)
- Mission and values
- Eco-friendly practices
- Quality commitment
- Ownership information

### 3. Services Page (`services.php`)
- Premium dry cleaning
- Professional laundry
- Wedding dress preservation
- Alterations & repairs
- Household fabric cleaning
- Business services
- Detailed pricing for each service

### 4. Pricing Page (`pricing.php`)
Complete price tables for:
- Dry cleaning items
- Laundry services
- Alterations
- Household items
- Special services
- Business volume pricing

### 5. Process Page (`process.php`)
4-step interactive timeline:
1. Book pickup
2. We collect
3. Expert cleaning
4. Delivery

### 6. Restoration Page (`restoration.php`)
24/7 emergency restoration services:
- Fire & smoke damage
- Water damage
- Mold remediation
- Commercial restoration
- Insurance coordination

### 7. Contact Page (`contact.php`)
- Contact information cards
- Phone, email, location
- Interactive contact form
- Business hours
- Google Maps embed
- WhatsApp link

### 8. FAQs Page (`faq.php`)
Accordion-style Q&A covering:
- Service details
- Pricing
- Pickup/delivery
- Special care
- Business services

## Key Features

### Interactive Elements
- **Mobile Navigation:** Hamburger menu with smooth toggle
- **Scroll Effects:** Sticky header with scroll detection
- **Active Navigation:** Highlights current section/page
- **Smooth Scrolling:** Anchor links with offset
- **Counter Animations:** Statistics that count up on scroll
- **Parallax Effects:** Background movement on scroll
- **Card Hover Effects:** 3D transforms on service cards
- **FAQ Accordion:** Expandable/collapsible answers
- **Testimonial Slider:** Auto-advancing carousel
- **Form Validation:** Real-time input validation
- **Lazy Loading:** Images load as they enter viewport

### Animations
- **Clothes-Wire Marquee:** Infinite scrolling garment animation
- **Delivery Truck:** Animated truck on booking button click
- **Fade-In Effects:** Elements appear as user scrolls
- **3D Card Transforms:** Hover effects with depth
- **Floating Elements:** Subtle movement animation
- **Loading States:** Button animations during form submission

### Responsive Design
- Mobile-first approach
- Breakpoints: 768px, 1024px, 1200px
- Touch-friendly navigation
- Optimized images
- Flexible grid layouts

## Services Offered

### Residential Services
- Premium dry cleaning ($4.95 - $25.00)
- Professional laundry ($7.95 - $17.95)
- Wedding dress preservation ($159.99+)
- Alterations & repairs ($8.95 - $25.00+)
- Household items (bedspreads, curtains, etc.)

### Business Services
- Hotel linens
- Restaurant uniforms
- Security company uniforms
- Catering company linens
- Volume discounts available

### Restoration Services
- Fire & smoke damage recovery
- Water damage restoration
- Mold remediation
- Commercial restoration
- Insurance claim assistance
- 24/7 emergency service

## Contact Information

- **Phone:** (408) 246-9377
- **Email:** info@sandscleaners.com
- **Location:** San Jose, CA (serving Bay Area & Northern California)
- **Hours:** Mon-Fri 8AM-7PM, Sat 9AM-5PM
- **Pickup Days:** Tuesday & Friday
- **Minimum for Free Pickup:** $50

## Deployment

### Current Setup
- PHP 8.4 installed via Nix package manager
- Workflow configured: `php-server`
- Command: `php -S 0.0.0.0:5000 -t public`
- Port: 5000 (webview enabled)
- Status: Running successfully

### Publishing to Production
The website is ready to be published to production using Replit's deployment feature. No additional configuration needed - just click the Publish button.

## Future Enhancements

**Potential Additions:**
1. Backend order management system
2. Customer account/login system
3. Online payment integration (Stripe/PayPal)
4. Real-time order tracking
5. Automated pickup scheduling
6. SMS/email notifications
7. Customer review system
8. Database for order history
9. Admin dashboard for staff
10. Route optimization for drivers

**Database Recommendations:**
- PostgreSQL for transactional data
- Tables needed: customers, orders, services, pricing, schedules
- Consider Drizzle ORM for type-safe queries

## Development Notes

### File Organization
- All source code properly organized in `/public/`
- Includes system for reusable components (header, footer)
- Separate CSS and JavaScript files
- Optimized asset structure

### Performance
- Minified CSS and JavaScript ready for production
- Lazy loading for images
- Efficient DOM manipulation
- Intersection Observer API for scroll animations

### Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- CSS Grid and Flexbox layouts
- ES6+ JavaScript features
- Fallbacks for older browsers where needed

### Security
- Input validation on forms
- XSS prevention in PHP includes
- Secure session handling ready for implementation

## Maintenance

### Content Updates
To update content, edit the PHP files directly:
- Service descriptions: `services.php`
- Pricing: `pricing.php`
- Company info: `about.php`
- Contact details: `contact.php`, `footer.php`

### Styling Changes
Edit `/public/assets/css/style.css` for:
- Colors and typography
- Layout and spacing
- Animations and transitions
- Responsive breakpoints

### Adding Features
Edit `/public/assets/js/script.js` for:
- Interactive functionality
- Form handling
- Animations
- Event listeners

---

**Project Status:** ✅ Complete and ready for deployment
