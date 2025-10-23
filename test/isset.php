<?php
//  if (isset($_GET['submit'])) {
//     // The form was submitted because the 'submit' parameter exists in the GET array
//     $name = $_GET['name'];  // safe to access because form was submitted
//     // process the form...
// }


?>

<?php
if(isset ($_REQUEST['submit'])){
    $mynum = $_REQUEST['mynum'];

    $output = 1;
    for ($i = 1; $i<=$mynum; $i++ ){
        $output *= $i;
    } 
    echo $output;
} 


?>

<form action="">
    <form action="" method="get">
        <input type="number" name="mynum" placeholder="Enter a number" required> <br><br>
        <button type="submit" name="submit" value="CHECK">Submit</button>
    </form>
</form>
 