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
            body {
                margin: 0;
            }

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

            ul.topnav li {
                float: left;
                background-color: #f1f1f1;
            }

            ul.topnav li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            ul.topnav li a:hover:not(.active) {
                background-color: #111;
            }

            ul.topnav li a.active {
                background-color: #04AA6D;
            }

            /* Add a gray right border to all list items, except the last item (last-child) */
            li {
                border-right: 1px solid #bbb;
            }

            li:last-child {
                border-right: none;
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
                ul.topnav li {
                    float: none;
                }
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
			<ul class="topnav">
				<li><a class="active" href="#">item 1</a>
                    <ul class="dropdown">
                        <li><a href="#">Sub-1</a></li>
                        <li><a href="#">Sub-2</a></li>
                        <li><a href="#">Sub-3</a></li>
                    </ul>
                </li>
				<li><a href="#">item 2</a>
                    <ul class="dropdown">
                        <li><a href="#">Sub-1</a></li>
                        <li><a href="#">Sub-2</a></li>
                        <li><a href="#">Sub-3</a></li>
                    </ul>
                </li>
				<li><a href="#">item 3</a>
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