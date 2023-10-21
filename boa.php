<?php
$title = "Shutterbird"; // Set the title specific to this page
ob_start(); // Start buffering output
?>




<?php
$content = ob_get_clean(); // Get the buffered content and assign it to $content
include("base.php"); // Include the common layout
?>
