<?php
    // Initialize the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>

        <link rel="stylesheet" type="text/css" href="css\main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">item 3</a></li>
                <li style="float:right"><input type="text" placeholder="IEŠKOTI..."></li>
			</ul>
		</nav>

        <div class="container">
            <div class="row">
                <div class="text col-lg-6 col-md-6 col-xs-12 mt-4 mb-4">
                    <h2>What is Lorem Ipsum?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. (The Extremes of Good and Evil) by Cicero, written.</p>
                        <button class="bg-warning comment" onclick="JavaScript:alert('Nuoroda neaktyvi')">Komentarai</button>
                    
                </div>

                <div class="text col-lg-6 col-md-6 col-xs-12  mt-4 mb-4">
                    <h2>Where does it come from?</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                
                    <button class="bg-warning comment" onclick="JavaScript:alert('Nuoroda neaktyvi')">Komentarai</button>
                </div>

                <article class="text col-lg-6 col-md-6 col-xs-12  mt-4 mb-4"> 
                    <h2>Why do we use it?</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        <button class="bg-warning comment mt-4" onclick="JavaScript:alert('Nuoroda neaktyvi')">Komentarai</button>
                </article>

                <article class="text col-lg-6 col-md-6 col-xs-12  mt-4 mb-4">
                    <h2>Where can I get some?</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        <button class="bg-warning comment" onclick="JavaScript:alert('Nuoroda neaktyvi')">Komentarai</button> 
                </article>
            </div>
        </div>

        <footer></footer>
    </body>
</html>