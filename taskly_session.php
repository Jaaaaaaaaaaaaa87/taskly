<!-- session -->
<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login_taskly.php");///if username is not set, go back to login
        exit();
    }
?>