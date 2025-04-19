<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - The Student Spot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>The Student Spot</h1>
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

<main>
    <section class="about">
        <h2>About The Student Spot</h2>
        <p>The Student Spot is an educational platform dedicated to helping students with resources, career guidance, and community interaction.</p>
        
        <h3>Our Mission</h3>
        <p>We aim to empower students by providing access to quality educational materials, skill development programs, and career-building opportunities.</p>

        <h3>Why Choose Us?</h3>
        <ul>
            <li><strong>Quality Resources:</strong> Curated materials for academic success.</li>
            <li><strong>Career Guidance:</strong> Job interview tips, resume-building tools, and mentorship.</li>
            <li><strong>Community Support:</strong> Engage with students and professionals.</li>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2025 The Student Spot. All Rights Reserved.</p>
</footer>

</body>
</html>
