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

        <style>
            a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
                text-decoration: none;
                color: initial;
            }

            nav{
                position: relative;
            }

            

            li {
                display: block;
                transition-duration: 0.5s;
            }

             li:hover {
                cursor: pointer;
            }

            ul li ul {
                visibility: hidden;
                opacity: 0;
                position: absolute;
                transition: all 0.5s ease;
                margin-top: 1rem;
                left: 0;
                display: none;
            }

            ul li:hover > ul,
            ul li ul:hover {
                visibility: visible;
                opacity: 1;
                display: block;
            }

            ul li ul li {
                clear: both;
                width: 100%;
            }
        </style>

    </head>
    <body>
        <header>
            <a href="welcome.php"  class="btn btn-primary">Prisijungti</a> 
        </header>
        
        <nav role="navigation">
			<ul>
				<li><a href="#">Pirma komanda</a>
                    <ul class="dropdown">
                        <li><a href="#">Sub-1</a></li>
                        <li><a href="#">Sub-2</a></li>
                        <li><a href="#">Sub-3</a></li>
                    </ul>
                </li>
				<li><a href="#">Antra komanda</a>
                    <ul class="dropdown">
                        <li><a href="#">Sub-1</a></li>
                        <li><a href="#">Sub-2</a></li>
                        <li><a href="#">Sub-3</a></li>
                    </ul>
                </li>
				<li><a href="#">Apie</a>
                    <ul class="dropdown">
                        <li><a href="#">Sub-1</a></li>
                        <li><a href="#">Sub-2</a></li>
                        <li><a href="#">Sub-3</a></li>
                    </ul>
                </li>
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