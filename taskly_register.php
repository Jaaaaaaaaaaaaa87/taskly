<!-- register -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Taskly registration</title>
        <link rel="stylesheet" href="taskly_login_style.css"/>
    </head>
    <body>
        <?php
            require('taskly_dp.php');          
            if(isset($_REQUEST['username'])){
                $username = stripslashes($_REQUEST['username']);        
                $username = mysqli_real_escape_string($con, $username);     
                $email = stripslashes($_REQUEST['email']);      
                $email = mysqli_real_escape_string($con, $email);       
                $password = stripslashes($_REQUEST['password']);        
                $password = mysqli_real_escape_string($con, $password);
                $query = "SELECT * FROM users WHERE username='$username'";
                $result = mysqli_query($con, $query);
                $rows = mysqli_num_rows($result);
                if($rows==1){
                    echo "<div class='form'>
                            <h3>Username alredy taken</h3><br>
                            <p class='link'><a href='taskly_register.php'>Try again</a></p>
                            </div>";
                }else {
                    $query = "INSERT INTO `users` (username, password, email)  
                            VALUES ('$username','".md5($password)."','$email')";  
                    $result = mysqli_query($con, $query);
                    if($result){        
                        echo "<div class='form'>
                                <h3>Account created</h3><br>
                                <p class='link'><a href='login_taskly.php'>Log in</a></p>
                                </div>";
                    }else{              
                        echo "<div class='form'>
                                <h3>Fill all the fields</h3><br>
                                <p class='link'><a href='taskly_register.php'>Try again</a></p>
                                </div>";
                    }
                }
            }else{
        ?>
                <form class="form" action="" method="post">         <!-- registration form -->
                    <h1 class="login_title">Registration</h1>
                    <input type="text" class="login_input" name="username" placeholder="Username" required />
                    <input type="text" class="login_input" name="email" placeholder="Email" required>
                    <input type="password" class="login_input" name="password" placeholder="Password" required>
                    <input type="submit" class="login_button" name="submit" value="Register" >
                    <p class="link">Have an account already?<br><a href="login_taskly.php">Log in</a></p>
                </form>
        <?php
            }
        ?>
    </body>
</html>