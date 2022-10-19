<?php
    // Initialize the session
    session_start();   
    
    // Include config file
    include "config.php";
    
    // Define variables and initialize with empty values
    $email = $password = $confirm_password = "";
    $email_err = $password_err = $confirm_password_err = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Validate email
        if(empty(trim($_POST["email"]))){
            $email_err = "Prašome įvesti Jūsų el. pašto adresą.";
        } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email_err = "Netinkamas el. pašto formatas";
        }

        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Įveskite slaptažodį.";     
        } elseif(strlen(trim($_POST["password"])) < 4){
            $password_err = "Slaptažodį turi sudaryti bent 4 simboliai.";
        } else{
            $password = trim($_POST["password"]);
        }

        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Patvirtinkite slaptažodį.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Slaptažodžiai nesutampa";
            }
        }


        // Check input errors before inserting in database
        if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql="SELECT * FROM users WHERE email='$email'";
            $result = $conn->query($sql);
            if ($result->num_rows >0) {
                $email_err = "Jūsų įvestas el. pašto adresas jau užregistruotas";
                header("Location: index.html");
            }else{            
                $password=md5($password);
                $sql="INSERT INTO users (email,password) VALUES ('$email','$password');";
                $conn->query($sql);

                $_SESSION['user']=$email;
                header("Location: index.php");
            }
                $conn->close();
            } 
    }    
    
?>    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registracija</title>
        <link rel="stylesheet" type="text/css" href="css\register.css">
    </head>
    <body>
    <header></header>
    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onSubmit='return checkPassword(this)'>
            <h2>Naujo vartotojo registracija</h2> 
            <div class="form-group">
                <label>El.paštas</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Slaptažodis</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Pakartoti slaptažodį</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registruotis" >
            </div>
            <p>Ar jau turite paskyrą? <a href="login.php">Login here</a>.</p>
        </form>
    </div> 
    <footer></footer>
    
    <script>            
        function checkPassword(form) {
            password = form.password.value;
            confirm_password = form.confirm_password.value;
                
            if (password !== confirm_password && confirm_password !==''){
                alert("Jūsų slaptažodžiai nesutampa: bandykite dar kartą...");
                return false;
            }
        } 
    </script>
    
</body>
</html>

