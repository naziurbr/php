<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$_GET $_POST $_REQUEST


    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre";
    // $fullname = $_GET("name");
    // $fullname = $_GET("email");
    // $fullname = $_GET("phone");
    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];

        echo "name " . $name . "<br>"; 
        echo "email" . $email . "<br>"; 
        echo "phone" . $phone. "<br>"; 
    }



    ?>
    <h3>Registration Form</h3>

    <form action="" method="get">
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="text" name="email" placeholder="Enter Your Email"><br>
        <input type="text" name="phone" placeholder="Enter Your phone"><br>

        <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>











<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h3>Registration Form</h3>

    <form action="" method="get">
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <input type="email" name="email" placeholder="Enter Your Email"><br>
        <input type="text" name="phone" placeholder="Enter Your Phone"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    // if (isset($_GET['submit'])) {
    //     $name = $_GET["name"] ?? '';
    //     $email = $_GET["email"] ?? '';
    //     $phone = $_GET["phone"] ?? '';

    //     echo "<h4>Form Submitted Data:</h4>";
    //     echo "Name: " . htmlspecialchars($name) . "<br>";
    //     echo "Email: " . htmlspecialchars($email) . "<br>";
    //     echo "Phone: " . htmlspecialchars($phone) . "<br>";
    // }
    ?>
</body>
</html> -->
