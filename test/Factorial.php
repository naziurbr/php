<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number Checker</title>
</head>
<body>
    <h3>Find the Factorial of a Number</h3>

    <?php
    if (isset($_REQUEST["submit"])) {
        $num = $_REQUEST["num"];
        echo "You entered: $num <br>";

        if ($num < 0) {
            echo "Factorial is not defined for negative numbers.";
        } elseif ($num == 0 || $num == 1) {
            echo "The factorial of $num is 1.";
        } else {
            $fact = 1;
            for ($i = 1; $i <= $num; $i++) {
                $fact *= $i;
            }
            echo "The factorial of $num is $fact.";
        }
    }
    ?>

    <form action="" method="get">
        <input type="number" name="num" placeholder="Enter a number" required> <br><br>
        <button type="submit" name="submit" value="CHECK">Submit</button>
    </form>
</body>
</html>
