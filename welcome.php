<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Wellcome</title>

        <link rel="stylesheet" type="text/css" href="css\welcome.css"> 
        <style>
            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
        <header>
            <div class="header">
                <a href="#default" class="logo">CompanyLogo</a>
            </div> 
        </header>
        
        <nav role="navigation">
			<ul class="navbar">
				<li><a class="active" href="index.php">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">ARTICLES</a></li>
                <li style="float:right"><input type="text" placeholder="IEŠKOTI..."></li>
			</ul>
		</nav>

        <main>
                <h1>Wellcome</h1><br />
                <p>You must be logged in or registered user to use all features.</p><br />
                <button type="button" id="logIn" class="btn btn-light">Autorizacija</button>
                <button type="button" id="Reg" class="btn btn-dark">Registracija</button>
        </main>
        
        <footer></footer>

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