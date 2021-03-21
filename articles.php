<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="articles-mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="articles-screen.css" type="text/css" />
    <script type="text/javascript" src="script.js"></script>
</head>

<body>

    <div class="bigBox"><!-- on entoure toutes les box  -->
        <nav>
            <ul id="menu-deroulant">
                <li><a href="#" id="alt-titreHide">Articles</a>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="histoire.php">Histoire</a></li>
                        <li><a id="art-comp" href="compétences.php">Compétences</a></li>
                        <li><a href="quizz.php">Quizz</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="art-container"> 
            <header>
                <h1 id="titre">Articles</h1>
            </header>

            <main> <!-- Le contenu principal de notre page -->
                
                    <article>
                        
                        <a href="" id="test1" onclick="JouerSon()">
                        <h2 class='art-titre'>Le fossé</h2>
                        <p class='art-info'> écrit par jkscjikcjdsio le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                        Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test2" onclick="init()">
                        <h2 class='art-titre'>Le fossé</h2>
                        <p class='art-info'> écrit par jkscjikcjdsio le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                        Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test3" onclick="JouerSon()">
                        <h2 class='art-titre'>Le fossé</h2>
                        <p class='art-info'> écrit par jkscjikcjdsio le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                        Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test4" onclick="JouerSon()">
                        <h2 class='art-titre'>Le fossé</h2>
                        <p class='art-info'> écrit par jkscjikcjdsio le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                        Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </a>
                    </article>
                    <audio  src="./Sons/Articles-intro.mp3" id="son1"></audio>
 
            </main>
        </div>

    </div>




    <footer> <!-- Le footer commun à toutes les pages -->
        <p>
            Eric Hochet <br />
            Telephone : 36.15 <br />
            E-mail :
            <a href="mailto:eric.hochet@gmail.com">eric.hochet@gmail.com</a>
            <br><br>
            <span id="disclaimer">Ce site est en contruction dans le cadre d'un projet pour la Wild Code School</span>
        </p>

    </footer>
</body>
</html>