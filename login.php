<?php
    // Initialize the session
    session_start();
    
    // Include config file
    include "config.php";
 
    // Define variables and initialize with empty values
    $email = $password = "";
    $email_err = $password_err = $login_err = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Check if email is empty
        if(empty(trim($_POST["email"]))){
            $email_err = "Prašome įvesti Jūsų el. pašto adresą";
        } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email_err = "Netinkamas el. pašto formatas";
        } else{
            $email = trim($_POST["email"]);
        } 
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Įveskite slaptažodį";
        } else{
            $password = trim($_POST["password"]);
        }

        // Validate credentials
        if(empty($email_err) && empty($password_err)){
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql="SELECT * FROM users WHERE email='$email' AND password='".md5($password)."'";
            $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    $login_err ="Neteisingas el.paštas arba slaptažodis";
                    header("Location: login.php");
                }else{                        
                    $_SESSION['user']=$email;
                    header("Location: index.php");
                }
                $conn->close();
            }    
    }    
                    
/*
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["email"] = $email;
                                
                                // Redirect user to welcome page
                                header("location: mano_profilis.php");
                            } else{
                                // Password is not valid, display a generic error message    
                                $login_err = "Neteisingas el.paštas arba slaptažodis";
                            }
*/
?>

<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Autorizacija</title>
        <link rel="stylesheet" type="text/css" href="css\login.css">         
    </head>
    <body>
        <header></header>
        <main>
            <div class="wrapper">
                <h2>Prisijungimas prie sistemos</h2>
                <?php
                if(!empty($login_err)){
                    echo '<div class="alert alert-danger">' . $login_err . '</div>';
                }        
                ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">  
                    <div class="form-group">
                        <label>El.paštas</label>
                        <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Slaptažodis</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Prisijungti" class="btn btn-primary">
                    </div>    
                    <p>
                        Neturite paskyros? - <a href="register.php">Registruotis</a>
                    </p>
                </form>
            </div>    
        </main> 
        <footer></footer>
    </body>
</html>




