<?php
    // Initialize the session
    session_start();
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" type="text/css" href="css\main.css">
    </head>
    <body>
        <header>
            <div class="header">
                <a href="#default" class="logo">CompanyLogo</a>
                <div class="header-right">
                    <a class="active" href="welcome.php">Prisijungti</a>
                </div>
            </div> 
        </header>
        
        <nav role="navigation">
			<ul class="navbar">
				<li><a class="active" href="index.php">HOME</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">item 3</a></li>
                <li><input type="text" style="float:right" placeholder="Search.."></li>
			</ul>
		</nav>

        <h1>MAIN PAGE</h1>
        
        <div class="content">
            <article>
            </article>    
        <div>

        <footer></footer>
    </body>
</html>