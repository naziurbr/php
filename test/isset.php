<?php
 if (isset($_GET['submit'])) {
    // The form was submitted because the 'submit' parameter exists in the GET array
    $name = $_GET['name'];  // safe to access because form was submitted
    // process the form...
}


?>