<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance - Learn More</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Career Guidance</h1>
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

    <main class="career-container">
        <h2>Explore Career Opportunities</h2>
        <p>Find the best guidance for your future with our expert resources.</p>

        <div class="career-section">
            <h3>Career Planning</h3>
            <p>Identify your strengths and explore career paths that match your interests.</p>
            <a href="career-planning.php" class="btn">Learn More</a>
        </div>

        <div class="career-section">
            <h3>Resume & Interview Tips</h3>
            <p>Get expert tips on writing a winning resume and acing interviews.</p>
            <a href="resume-tips.php" class="btn">Learn More</a>
        </div>

        <div class="career-section">
            <h3>Skill Development</h3>
            <p>Enhance your skills with courses, certifications, and hands-on projects.</p>
            <a href="skill-development.php" class="btn">Learn More</a>
        </div>
    </main>

</body>
</html>
