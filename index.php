<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h1>User Information Form</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user's name from the form
        $name = $_POST["name"];
        
        // Get the client's IP address
        $client_ip = $_SERVER["REMOTE_ADDR"];
        
        // Get the current date
        $current_date = date("Y-m-d H:i:s");

        // Display the collected information
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Client IP Address:</strong> $client_ip</p>";
        echo "<p><strong>Current Date:</strong> $current_date</p>";
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
