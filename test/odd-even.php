<!DOCTYPE html>
<html>
<head>
    <title>Odd and Even Number Counter</title>
</head>
<body>
    <h2>Odd and Even Number Finder</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];

        $odd_numbers = [];
        $even_numbers = [];

        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0) {
                $even_numbers[] = $i;
            } else {
                $odd_numbers[] = $i;
            }
        }

        echo "<h3>Results for numbers from 1 to $num:</h3>";

        echo "<p><strong>Even numbers (" . count($even_numbers) . "):</strong><br>";
        echo implode(", ", $even_numbers) . "</p>";

        echo "<p><strong>Odd numbers (" . count($odd_numbers) . "):</strong><br>";
        echo implode(", ", $odd_numbers) . "</p>";
    }
    ?>
</body>
</html>
