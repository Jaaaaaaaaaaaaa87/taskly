<!--Connection with database -->
<?php
    $con = mysqli_connect("localhost","root","","taskly");///connecting with database users
    if(mysqli_connect_errno()){
        echo "Failed to connect with database: ".mysqli_connect_error();///connection error 'handling'
    }
?>