<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "login_register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete Logic
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect back to the main page
    exit;
}

// Close database connection
mysqli_close($conn);
?>
