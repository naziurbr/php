<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h3>Check Whether a Number is Prime or Not</h3>

    <?php
    if (isset($_REQUEST["submit"])) {
        $mynum = $_REQUEST["mynum"];
        echo "You entered: $mynum <br>";

        if ($mynum <= 1) {
            echo "$mynum is not a prime number.";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($mynum); $i++) {
                if ($mynum % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                echo "$mynum is a prime number.";
            } else {
                echo "$mynum is not a prime number.";
            }
        }
    }
    ?>

    <form action="" method="get">
        <input type="number" name="mynum" placeholder="Enter a number" required> <br><br>
        <button type="submit" name="submit" value="CHECK">Submit</button>
    </form>
</body>
</html>
