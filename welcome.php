<!DOCTYPE html>
<html>
<head>
<title>KSU Straipsniai</title>
</head>
<body>

<h1>Main Page</h1>
<p>My first paragraph.</p>

<div style="text-align: center">
    <h1>Wellcome</h1>
    <p>You must be logged in or registered user to use all features.</p>
    <button type="button" id="logIn" class="btn btn-light" data-mdb-ripple-color="dark">Log in</button>
    <button type="button" id="Reg" class="btn btn-dark">Register</button>
</div>

<script type="text/javascript">
    document.getElementById("logIn").onclick = function () {
        location.href = "auth.php";
    };
    document.getElementById("Reg").onclick = function () {
        location.href = "autent.php";
        sessionStorage.setItem("OpenReg", "true");
    };
    </script>

</body>
</html> 