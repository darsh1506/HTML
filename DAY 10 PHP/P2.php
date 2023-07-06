<?php
// Check if a name parameter exists in the URL query string
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    // Process the name parameter
    // ...
    $greeting = 'Hello, ' . $name . '!';
} else {
    // No name parameter provided
    $greeting = 'Please provide a name parameter in the URL.';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET Request Example</title>
</head>
<body>
    <h1>GET Request Example</h1>
    
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        
        <input type="submit" value="Submit">
        <p><?php echo $greeting; ?></p>
    </form>
</body>
</html>