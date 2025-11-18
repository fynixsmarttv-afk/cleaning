<?php
$page_title = 'FAQs';
include 'includes/header.php';
?>

<style>
.faq-item {
    background: white;
    border-radius: 15px;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(30, 41, 59, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-question {
    padding: 25px 30px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 18px;
    font-weight: 600;
    color: #1e293b;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background: #f8fafc;
}

.faq-question i {
    color: #06b6d4;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
    padding: 0 30px;
}

.faq-item.active .faq-answer {
    max-height: 500px;
    padding: 0 30px 25px;
}

.faq-answer p {
    color: #64748b;
    line-height: 1.8;
    font-size: 16px;
}
</style>

<section class="hero" style="min-height: 60vh;">
    <div class="hero-content">
        <p class="hero-subtitle fade-in">FAQs</p>
        <h1 class="fade-in">Frequently Asked Questions</h1>
        <p class="fade-in">Find answers to common questions about our services.</p>
    </div>
</section>

<section class="container">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="faq-item">
            <div class="faq-question">
                <span>How do I schedule a pickup?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Call us at (408) 246-9377 or fill out the form on our contact page. We offer FREE pick-up and delivery service with a minimum order of $50.00. We currently perform pickup and drop-off service every Tuesday and Friday. Clothes picked up on Tuesday will be returned on Friday and vice-versa.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>What is your turnaround time?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>We offer FREE pick-up and delivery service with a minimum order of $50.00. A typical delivery time is 3 days from date of pickup. However, check with driver for an earlier delivery time frame at no additional cost. We also offer "in by 9, out by 5" same-day turnaround for standard dry clean service.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>What payment methods do you accept?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>We accept cash and Visa/Master credit cards at the time of placement of your order. Credit card orders can be paid on pick-up to the driver or via phone. Touchless payments can be made with Zelle.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>How should I prepare my items for pickup?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>It is preferred that all of the items are contained in reasonably sturdy bags. Special service items should be in a separate bag and labeled with instructions. When placing your order, give instructions where you would like your order to be picked up and returned.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you clean delicate and specialty fabrics?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Yes! We specialize in cleaning rare and delicate fabrics. No matter what fabric, for any occasion, Sands Cleaners can do it. Our advanced process can handle any type of service you need including silk linens, soft wedding dresses, fine bedding, leather, and Persian rugs.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you offer alterations and repairs?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Yes we do. Call to ask about pricing for custom items or check our pricing page for standard alteration and repair services including hemming, zipper replacement, and waist adjustments.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Are your cleaning methods environmentally friendly?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Absolutely! We have shifted to a state-of-the-art process whereby the cleaning of your clothes will be of the highest quality as well as environmentally friendly. We pride ourselves in not using any harsh chemicals on your unique garments. We use green-certified detergents and eco-friendly cleaning methods.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you have your own cleaning facility?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>Yes. Sands Cleaners has been operating its own plant in San Jose since the 1990's. Dry cleaning and shirt laundering is performed on the premises with modern, state-of-the-art equipment and experienced personnel.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you recycle hangers and bags?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>YES. We provide a free hanger pick-up to make this easy for you. We also recycle poly bags. Just place them in your pick-up bag with your clothes.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Can I schedule a specific pickup time?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>You will find that the driver is usually in your area at the same time on scheduled service days. However, due to the number of customers on our delivery service, we cannot promise to keep individual appointments. We do our best to accommodate your schedule.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">
                <span>Do you provide separate bags for laundry and dry cleaning?</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="faq-answer">
                <p>YES. You will be provided a bag for laundry and a bag for dry cleaning to help keep your items organized and ensure proper handling.</p>
            </div>
        </div>
    </div>
</section>

<section style="background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 42px; margin-bottom: 20px; color: white;">Still Have Questions?</h2>
        <p style="font-size: 20px; margin-bottom: 40px; opacity: 0.95;">Contact us and we'll be happy to help!</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="/contact.php" class="btn" style="background: white; color: #06b6d4;">Contact Us</a>
            <a href="tel:4082469377" class="btn" style="background: transparent; color: white; border-color: white;">Call (408) 246-9377</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>
