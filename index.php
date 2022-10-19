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
            /* Style the header with a grey background and some padding */
            .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
            }

            /* Style the header links */
            .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
            }

            /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
            .header a.logo {
            font-size: 25px;
            font-weight: bold;
            }

            /* Change the background color on mouse-over */
            .header a:hover {
            background-color: #ddd;
            color: black;
            }

            /* Style the active/current link*/
            .header a.active {
            background-color: dodgerblue;
            color: white;
            }

            /* Float the link section to the right */
            .header-right {
            float: right;
            }

            /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
            @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            .header-right {
                float: none;
            }
            }

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
            <div class="header">
                <a href="#default" class="logo">CompanyLogo</a>
                <div class="header-right">
                    <a class="active" href="welcome.php">Prisijungti</a>
                </div>
            </div> 
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