<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Wellcome</title>

        <style></style>
    </head>
    <body>

        <div style="text-align: center">
            <h1>Wellcome</h1>
            <p>You must be logged in or registered user to use all features.</p>
            <button type="button" id="logIn" class="btn btn-light" data-mdb-ripple-color="dark">Log in</button>
            <button type="button" id="Reg" class="btn btn-dark">Register</button>
        </div>

        <script type="text/javascript">
            document.getElementById("logIn").onclick = function () {
                location.href = "login.php";
            };
            document.getElementById("Reg").onclick = function () {
                location.href = "register.php";
                sessionStorage.setItem("OpenReg", "true");
            };
        </script>

    </body>
</html> 