<?php
session_start();
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user details
$user_id = $_SESSION['user_id'];
$query = $conn->prepare("SELECT name FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$query->bind_result($name);
$query->fetch();
$query->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - The Student Spot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
    <nav>
        <a href="home.php">Home</a>
        <a href="resources.php">Resources</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main>
    <section class="welcome">
        <h2>Discover, Learn, and Grow</h2>
        <p>Welcome to The Student Spot, your ultimate hub for learning resources and career growth.</p>
        <a href="resources.php" class="btn">Explore Resources</a>
    </section>

    <section class="quick-links">
        <div class="card">
            <h3>📘 Study Materials</h3>
            <p>Access high-quality educational content to boost your learning.</p>
            <a href="resources.php" class="btn-small">View Resources</a>
        </div>
        <div class="card">
            <h3>🎯 Career Guidance</h3>
            <p>Get expert advice to shape your future career path.</p>
            <a href="career.php" class="btn-small">Learn More</a>
        </div>
        <div class="card">
            <h3>🌎 Connect & Grow</h3>
            <p>Engage with fellow students, mentors, and industry experts.</p>
            <a href="community.php" class="btn-small">Join Community</a>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2025 The Student Spot. All Rights Reserved.</p>
</footer>

</body>
</html>
