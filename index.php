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

            /* Add a black background color to the top navigation bar */
            ul.topnav li {
                overflow: hidden;
                background-color: #e9e9e9;
            }

            /* Style the links inside the navigation bar */
            ul.topnav li a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Style the "active" element to highlight the current page */
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

            /* Style the search box inside the navigation bar */
                .topnav input[type=text] {
                float: right;
                padding: 6px;
                border: none;
                margin-top: 8px;
                margin-right: 16px;
                font-size: 17px;
            }


            /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
            @media screen and (max-width: 500px) {
                .topnav a, .topnav input[type=text] {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }
                .topnav input[type=text] {
                    border: 1px solid #ccc;
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
                <li>
                    <input type="text" placeholder="Search..">
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