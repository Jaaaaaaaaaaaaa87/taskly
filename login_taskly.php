<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Zaloguj się</title>
        <link rel="stylesheet" href="taskly_login_style.css"/>
    </head>
    <body>
        <?php
            require('taskly_dp.php');      // Importuj plik z danymi połączenia z bazą danych
            session_start();        // Start sesji
            // Jeśli formularz z logowaniem został wysłany
            if(isset($_POST['username'])){
                // Pobierz dane z formularza
                $username = stripslashes($_REQUEST['username']);        
                $username = mysqli_real_escape_string($con, $username);     
                $password = stripslashes($_REQUEST['password']);        
                $password = mysqli_real_escape_string($con, $password);     
                // Zapytanie do bazy danych, sprawdzenie czy podane dane istnieją w tabeli Users
                $query = "SELECT * FROM `users` WHERE username='$username' AND password='".md5($password)."'";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                // Jeśli znaleziono użytkownika o podanych danych
                if($rows == 1){
                     // Ustaw zmienną sesji na nazwę użytkownika i przekieruj do strony głównej
                    $_SESSION['username'] = $username;      
                    header("Location: index.php");                        //adres na który przekierowuje po udanym logowaniu
                }else{                                      
                    echo "<div class='form'>        
                            <h3>Incorrect username/password</h3><br>
                            <p class='link'><a href='login_taskly.php'>Try again</a></p>
                          </div>";
                }
            }else{
        ?>
                <form class="form" action="" method="post">
                    <h1 class="login_title">Log in</h1>
                    <input type="text" class="login_input" name="username" placeholder="Username" autofocus="true"/>
                    <input type="password" class="login_input" name="password" placeholder="Password">
                    <input type="submit" class="login_button" name="submit" value="Log in" >
                    <p class="link">Don't have an account?<br><a href="taskly_register.php">Register now</a></p>
                </form>
        <?php
                }
        ?>
    </body>
</html>