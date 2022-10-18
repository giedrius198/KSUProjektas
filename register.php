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
                header("Location: index.html");
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
            
            .wrapper{
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

