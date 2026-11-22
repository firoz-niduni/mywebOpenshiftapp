<?php
// 1. Define variables
$pageTitle = "Sample PHP Page";
$currentTime = date("h:i A");
$greeting = "";

// 2. Handle form submission (POST request)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user input to prevent XSS attacks
    $name = htmlspecialchars(trim($_POST["username"] ?? "Guest"));
    if (!empty($name)) {
        $greeting = "Hello, " . $name . "! Welcome to PHP.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body { font-family: sans-serif; margin: 2rem; line-height: 1.5; }
        .box { padding: 1rem; border: 1px solid #ccc; max-width: 400px; border-radius: 6px; }
    </style>
</head>
<body>

    <div class="box">
        <h1><?php echo $pageTitle; ?></h1>
        <p>Server time: <strong><?php echo $currentTime; ?></strong></p>

        <!-- Display greeting if form was submitted -->
        <?php if ($greeting): ?>
            <p style="color: green;"><strong><?php echo $greeting; ?></strong></p>
        <?php endif; ?>

        <!-- HTML Form submitting back to this same file -->
        <form method="POST" action="">
            <label for="username">Enter your name:</label><br>
            <input type="text" id="username" name="username" required>
            <button type="submit">Greet Me</button>
        </form>
    </div>

</body>
</html>
Use code with caution.

2. 
