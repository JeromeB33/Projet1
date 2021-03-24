<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="contact-mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="contact-screen.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="global.css" type="text/css" />
</head>

<body>
    <div class="bigBox"><!-- on entoure toutes les box  -->
        <nav id="art-nav">
            <ul id="menu-deroulant">
                <li><a href="#" id="art-titreHide">Articles</a>
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
                <h1 id="art-h1">Articles</h1>
            </header>

            <main> <!-- Le contenu principal de notre page -->
                
                    <article>
                        
                        <a href="" id="test1" >
                        <h2 class='art-titre'>L'homme aux grosses chevilles</h2>
                        <p class='art-info'> écrit par Eva Skacélagueul le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet a physiquement interagit avec un autre humain pour la première fois depuis cinq mois.<br> 
                        Interaction qu’il a complètement gâchée en centrant la conversation entièrement sur lui-même.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test2" onclick="init()">
                        <h2 class='art-titre'>L'homme de culture</h2>
                        <p class='art-info'> écrit par Eva Sion le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet avait annoncé sur les réseaux sociaux qu’il avait compris totalement les nouvelles mesures sanitaires de lutte contre la Covid19 <br>
                         et qu’il ne lui avait fallu moins d’une minute pour remplir la nouvelle attestation.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test3" onclick="JouerSon()">
                        <h2 class='art-titre'>La passion avant tout</h2>
                        <p class='art-info'> écrit par Eva Pisser le 21/03/21</p>
                        <p class='art-contenu'> Eric Hochet et sa femme ont finalement décidé de ne pas faire d’enfant afin de pouvoir pleinement se concentrer sur ce qu’ils aiment vraiment : <br>
                        Leur profonde haine des enfants des autres.</p>
                        </a>
                    </article>

                    <article>
                        <a href="" id="test4" onclick="JouerSon()">
                        <h2 class='art-titre'>Le Jésus des temps modernes</h2>
                        <p class='art-info'> écrit par Eva porée le 21/03/21</p>
                        <p class='art-contenu'> Récemment décédé lors d’un accident, Bernard n’a pas été autorisé à franchir les portes du Paradis car il n’est pas en possession d’un test PCR négatif <br> il a donc réssucité.</p>
                        </a>
                    </article>
                    <audio src="./Sons/Articles-intro.mp3" id="son1"></audio>
                    <audio src="./Sons/Intro-eric.mp3" id="son2"></audio>
 
 
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
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>