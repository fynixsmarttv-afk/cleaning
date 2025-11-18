<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sands Cleaners - Premium Dry Cleaning & Laundry Service in San Jose, CA. Expert care for your garments with free pickup & delivery.">
    <meta name="keywords" content="dry cleaning, laundry service, San Jose, premium cleaning, fabric restoration">
    <meta name="author" content="Sands Cleaners">
    <title><?php echo isset($page_title) ? $page_title . ' - Sands Cleaners' : 'Sands Cleaners - Premium Dry Cleaning & Laundry Service'; ?></title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="icon" type="image/png" href="/assets/images/logo.png">
</head>
<body>
    <header>
        <nav>
            <a href="/" class="logo">
                <img src="/assets/images/logo.png" alt="Sands Cleaners Logo">
                <span>Sands Cleaners</span>
            </a>

            <ul class="nav-menu">
                <li><a href="/" <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="/about.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'class="active"' : ''; ?>>About</a></li>
                <li><a href="/services.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'class="active"' : ''; ?>>Services</a></li>
                <li><a href="/pricing.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'pricing.php') ? 'class="active"' : ''; ?>>Pricing</a></li>
                <li><a href="/process.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'process.php') ? 'class="active"' : ''; ?>>Process</a></li>
                <li><a href="/restoration.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'restoration.php') ? 'class="active"' : ''; ?>>Restoration</a></li>
                <li><a href="/faq.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'faq.php') ? 'class="active"' : ''; ?>>FAQs</a></li>
                <li><a href="/contact.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
            </ul>

            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>