<?php
include 'db.php'; // Database connection

$query = "SELECT * FROM resources WHERE category = 'career'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career & Skill Development</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Career & Skill Development</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="resources.php">All Resources</a>
        <a href="contact.php">Logout</a>
    </nav>
</header>

<main>
    <h2>Explore Career Resources</h2>
    <div class="resource-list">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='resource-card'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<a href='" . $row['file_link'] . "' class='btn'>Download</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No career resources available.</p>";
        }
        ?>
    </div>
</main>

</body>
</html>

