
<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Student Spot</title>
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
    <?php if (isset($_SESSION['user_id'])): ?>
        <?php
        // Fetch user details
        $user_id = $_SESSION['user_id'];
        $query = $conn->prepare("SELECT name FROM users WHERE id = ?");
        $query->bind_param("i", $user_id);
        $query->execute();
        $query->bind_result($name);
        $query->fetch();
        $query->close();
        ?>
        
        <section class="welcome">
            <h2>Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
            <p>Discover, Learn, and Grow with The Student Spot.</p>
            <a href="resources.php" class="btn">Explore Resources</a>
        </section>

        <section class="quick-links">
            <div class="card">
                <h3>📘 Study Materials</h3>
                <p>Access high-quality educational content.</p>
                <a href="resources.php" class="btn-small">View Resources</a>
            </div>
            <div class="card">
                <h3>🎯 Career Guidance</h3>
                <p>Get expert career advice.</p>
                <a href="career.php" class="btn-small">Learn More</a>
            </div>
            <div class="card">
                <h3>🌎 Community</h3>
                <p>Connect with students and mentors.</p>
                <a href="community.php" class="btn-small">Join Community</a>
            </div>
        </section>

    <?php else: ?>
        <section class="hero">
            <h2>Welcome to The Student Spot</h2>
            <p>Your go-to platform for student resources and future planning.</p>
            <a href="login.php" class="btn">Login to Explore</a>
        </section>
    <?php endif; ?>
</main>
<footer>
    <p>&copy; 2025 The Student Spot. All Rights Reserved.</p>
</footer>
</body>
</html>
