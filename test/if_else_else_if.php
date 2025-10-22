<?php

$marks = 80; 


if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} elseif ($marks >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: F (Fail)";
}
?> <br>



<?php
$name = "Ali";
$marks = 85;

echo "Student: $name<br>";
echo "Marks: $marks<br>";

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} elseif ($marks >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: F (Fail)";
}
?> <br>




<?php
for ($i = 1; $i <= 50; $i++) {
    echo $i . "<br>";
}
?>
