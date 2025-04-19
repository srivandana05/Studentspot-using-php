<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Community</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Join Our Community</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="resources.php">Resources</a>
            <a href="career.php">Career Guidance</a>
            <a href="contact.php">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </nav>
    </header>

    <main class="community-container">
        <h2>Connect & Grow with The Student Spot</h2>
        <p>Join our community to connect with students, mentors, and industry experts.</p>

        <div class="community-section">
            <h3>📢 Discussion Forums</h3>
            <p>Join conversations about career growth, internships, and skills.</p>
            <a href="forums.php" class="btn">Visit Forums</a>
        </div>

        <div class="community-section">
            <h3>🎤 Webinars & Events</h3>
            <p>Stay updated on upcoming career guidance webinars and networking events.</p>
            <a href="events.php" class="btn">View Events</a>
        </div>

        <div class="community-section">
            <h3>👩‍🏫 Mentorship Program</h3>
            <p>Connect with professionals who can guide your career journey.</p>
            <a href="mentorship.php" class="btn">Find a Mentor</a>
        </div>

        <div class="community-section">
            <h3>📲 Join Our Social Media Groups</h3>
            <p>Stay connected and updated through WhatsApp, Discord, and LinkedIn.</p>
            <a href="https://chat.whatsapp.com/yourlink" class="btn">Join WhatsApp</a>
            <a href="https://instagram.com/yourlink" class="btn">Join Instagram</a>
            <a href="https://linkedin.com/yourlink" class="btn">Join LinkedIn</a>
        </div>

        <div class="community-section">
            <h3>📩 Subscribe to Our Newsletter</h3>
            <form action="subscribe.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
    </main>

</body>
</html>
