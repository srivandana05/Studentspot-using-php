<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - The Student Spot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="resources.php">Resources</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="contact-container">
        <h2>Get in Touch</h2>
        <p>Connect with us on social media or send us a message.</p>
        
        <div class="contact-links">
            <a href="https://wa.me/1234567890" target="_blank" class="contact-btn whatsapp">WhatsApp</a>
            <a href="https://instagram.com/studentspot" target="_blank" class="contact-btn instagram">Instagram</a>
            <a href="https://linkedin.com/in/studentspot" target="_blank" class="contact-btn linkedin">LinkedIn</a>
        </div>
    </main>

</body>
</html>
