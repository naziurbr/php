<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Superglobal Example</title>
</head>
<body>

<?php
// Check if the 'name' parameter exists before using it
if (isset($_GET["name"])) {
    echo htmlspecialchars($_GET["name"]); // Safe output
    echo "<br>";
} else {
    echo "No name parameter passed.";
}
?>

<a href="get-superglobal.php?name=Karimul">Click Here</a>

</body>
</html>
