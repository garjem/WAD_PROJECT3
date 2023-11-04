

<?php
    $coon = mysqli_connect ("localhost:3308" , "root", "", "wadproject3");
    $result = mysqli_query($coon, "SELECT * FROM student");
?>