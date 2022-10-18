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
            
            $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    $login_err ="Neteisingas el.paštas arba slaptažodis";
                    header("Location: login.php");
                }else{                        
                    $_SESSION['user']=$email;
                    header("Location: index.html");
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
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Autorizacija</title>  
        
        <style>
            *{
                margin: 0;
                padding: 0;
                border: 0;
                box-sizing: border-box;
            }
            
            header{
                background-color: navy;
                min-height: 110px; 
            }
            
            main{
                min-height: 545px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            h2{
               margin: 20px 0;
               text-align: center;
            }
            
            form{
                display: flex;
                flex-direction: column;
                width: 400px;   
            }
            
            .form-group{
                margin-bottom: 1rem;
            }
            
            label{
                display: inline-block;
            }
            
            .form-control {
              display: block;
              width: 100%;
              height: calc(1.5em + 0.75rem + 2px);
              margin:10px 0;
              padding: 10px;
              font-size: 1rem;
              font-weight: 400;
              line-height: 1.5;
              color: #495057;
              background-color: #fff;
              background-clip: padding-box;
              border: 1px solid #ced4da;
              border-radius: 0.25rem;
              transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
            
            .form-control:focus, .btn:focus {
		border-color: #a177ff;
		box-shadow: 0 0 8px #c2a8ff;
            }
            
            .invalid-feedback {
                display: none;
                width: 100%;
                margin-top: 0.25rem;
                font-size: 80%;
                color: #dc3545;
            }
            
            .was-validated :invalid ~ .invalid-feedback,
            .is-invalid ~ .invalid-feedback{
              display: block;
            }
            
            .was-validated .form-control:invalid, .form-control.is-invalid {
                border-color: #dc3545;
                padding-right: calc(1.5em + 0.75rem);
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right calc(0.375em + 0.1875rem) center;
                background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
            }
            
            .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
                border-color: #dc3545;
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            }

            
            input[type=submit]{
               padding: 10px;
               background: #e3e3e3;
               border: unset;
               cursor: pointer;
            }
            
            input[type=submit]:hover{
                background-color: #E0FFFF;              
            }
            
            p{
              margin-top: 0;
              margin-bottom: 1rem;
            }
                        
            a{
              color: #007bff;
              text-decoration: none;
              background-color: transparent;
            }
            
            a:hover{
              color: #0056b3;
              text-decoration: underline;
            }            
            
            footer{
                background-color: grey;
                min-height: 90px;
            }
                 
        </style>        
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
                        Neturite paskyros? - <a href="http://localhost/SimpleLogin/register.php">Registruotis</a>
                    </p>
                </form>
            </div>    
        </main> 
        <footer></footer>
    </body>
</html>