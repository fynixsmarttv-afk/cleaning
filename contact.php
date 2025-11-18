<?php
$page_title = 'Contact Us';
include 'includes/header.php';
?>

<section class="hero" style="min-height: 60vh;">
    <div class="hero-content">
        <p class="hero-subtitle fade-in">Contact Us</p>
        <h1 class="fade-in">Get In Touch</h1>
        <p class="fade-in">Schedule a pickup or ask us anything. We're here to help!</p>
    </div>
</section>

<section class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-bottom: 60px;">
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 4px 16px rgba(30, 41, 59, 0.12); text-align: center;">
            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #06b6d4, #0891b2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 30px;">
                <i class="fas fa-phone"></i>
            </div>
            <h3 style="margin-bottom: 10px;">Call Us</h3>
            <p style="color: #64748b; margin-bottom: 15px;">Mon-Fri: 8AM - 7PM<br>Sat: 9AM - 5PM</p>
            <a href="tel:4082469377" style="color: #06b6d4; font-size: 20px; font-weight: 600;">(408) 246-9377</a>
        </div>
        
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 4px 16px rgba(30, 41, 59, 0.12); text-align: center;">
            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #06b6d4, #0891b2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 30px;">
                <i class="fas fa-envelope"></i>
            </div>
            <h3 style="margin-bottom: 10px;">Email Us</h3>
            <p style="color: #64748b; margin-bottom: 15px;">We respond within 24 hours</p>
            <a href="mailto:sandscleanersus@gmail.com" style="color: #06b6d4; font-size: 16px; font-weight: 600;">sandscleanersus@gmail.com</a>
        </div>
        
        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 4px 16px rgba(30, 41, 59, 0.12); text-align: center;">
            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #06b6d4, #0891b2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 30px;">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3 style="margin-bottom: 10px;">Visit Us</h3>
            <p style="color: #64748b;">375 Saratoga Ave, Suite F<br>San Jose, CA 95129</p>
        </div>
    </div>
    
    <div class="contact-form">
        <div class="section-header">
            <h2 class="section-title" style="font-size: 36px;">Schedule Your Pickup</h2>
            <p class="section-description">Fill out the form below and we'll contact you to confirm your pickup details.</p>
        </div>
        
        <?php
        $success = false;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inquiry = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'phone' => $_POST['phone'] ?? '',
                'address' => $_POST['address'] ?? '',
                'service' => $_POST['service'] ?? '',
                'date' => date('Y-m-d H:i:s'),
                'preferred_day' => $_POST['date'] ?? '',
                'message' => $_POST['message'] ?? '',
                'status' => 'unread'
            ];
            
            $inquiries_file = __DIR__ . '/admin/inquiries.json';
            $inquiries = [];
            if (file_exists($inquiries_file)) {
                $inquiries = json_decode(file_get_contents($inquiries_file), true) ?: [];
            }
            
            $inquiries[] = $inquiry;
            file_put_contents($inquiries_file, json_encode($inquiries, JSON_PRETTY_PRINT));
            $success = true;
        }
        ?>
        
        <?php if ($success): ?>
        <div style="background: #d1fae5; color: #065f46; padding: 20px; border-radius: 12px; margin-bottom: 30px; text-align: center;">
            <i class="fas fa-check-circle"></i> <strong>Success!</strong> Your inquiry has been submitted. We'll contact you soon!
        </div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="address">Pickup Address *</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
                <div class="form-group">
                    <label for="service">Service Type</label>
                    <select id="service" name="service" class="form-control">
                        <option>Dry Cleaning</option>
                        <option>Laundry Service</option>
                        <option>Wedding Dress Care</option>
                        <option>Alterations</option>
                        <option>Household Fabrics</option>
                        <option>Restoration</option>
                        <option>Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="date">Preferred Pickup Day</label>
                    <select id="date" name="date" class="form-control">
                        <option>Tuesday</option>
                        <option>Friday</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="message">Special Instructions</label>
                <textarea id="message" name="message" class="form-control" placeholder="Tell us about your items, stains, or any special handling requirements..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 18px;">
                <i class="fas fa-paper-plane"></i> Schedule Pickup
            </button>
        </form>
    </div>
</section>

<section style="background: #f8fafc; padding: 0;">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.8156574629!2d-121.99264!3d37.311447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e340a42a7e4ed%3A0x7c4c4c4c4c4c4c4c!2s375%20Saratoga%20Ave%2C%20San%20Jose%2C%20CA%2095129!5e0!3m2!1sen!2sus!4v1234567890"
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
