<?php
session_start();

// Connect to MySQL database (replace with your credentials)
$mysqli = new mysqli("localhost:3306", "root", "", "sellbooks");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Retrieve books uploaded by the logged-in user
$userId = $_SESSION["user_id"];
$result = $mysqli->query("SELECT id, title, author FROM userbooks WHERE user_id = '$userId'");
$books = $result->fetch_all(MYSQLI_ASSOC);

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Uploaded Books</title>
</head>
<body>
    <h1>My Uploaded Books</h1>

    <ul>
        <?php foreach ($books as $book): ?>
            <li><?php echo "{$book['title']} by {$book['author']}"; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="upload.php">Upload a Book</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>














<?php
session_start();

// Connect to MySQL database (replace with your credentials)
$mysqli = new mysqli("localhost:3306", "root", "", "sellbooks");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Handle book upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];

    // In a real application, implement user authentication and get user ID
    $userId = $_SESSION["user_id"];

    // Insert the book into the database
    $mysqli->query("INSERT INTO userbooks (user_id, title, author) VALUES ('$userId', '$title', '$author')");
}

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Book</title>
</head>
<body>
    <h1>Upload Book</h1>

    <form method="post" action="upload.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <button type="submit">Upload Book</button>
    </form>
    <br>
    <a href="../useruploads/userbook.php">View My Books</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
