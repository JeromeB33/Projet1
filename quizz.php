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
    <link rel="stylesheet" media="screen" href="style/style_quizz_mobile.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="style/style_quizz_print.css" type="text/css" />
</head>

<body>

<div class="bigBox"><!-- on entoure toutes les box et le formulaire -->
    <nav>
        <ul id="menu-deroulant">
            <li><a href="#" id="alt-titreHide">Quizz</a>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="histoire.php">Histoire</a></li>
                    <li><a href="compétences.php">Compétences</a></li>
                    <li><a href="articles.php">Arcticles</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="art-container">
        <header>
            <h1 id="titre">Quizz</h1>
        </header>

        <main> <!-- Le contenu principal de notre page -->
            <div id="formulaire_quizz"> <!-- formulaire du quizz -->
                <form method="post" action="form_quizz.php">
                    <p class="question_formulaire">Quel est le nom de Eric ?<br>
                        <input type="radio" name="réponse_formulaire1"> Hochet
                        <input type="radio" name="réponse_formulaire1"> Hockel
                        <input type="radio" name="réponse_formulaire1"> Hocret
                        <input type="radio" name="réponse_formulaire1"> Lavinass
                    </p>
                    <p class="question_formulaire">Quel âge a Eric ?<br>
                        <input type="radio" name="réponse_formulaire2"> 17
                        <input type="radio" name="réponse_formulaire2"> 30
                        <input type="radio" name="réponse_formulaire2"> 32
                        <input type="radio" name="réponse_formulaire2"> 45
                    </p>
                    <p class="question_formulaire">De quel ville vient-il ?<br>
                        <input type="radio" name="réponse_formulaire3"> Paris
                        <input type="radio" name="réponse_formulaire3"> Strasbourg
                        <input type="radio" name="réponse_formulaire3"> Lovigny
                        <input type="radio" name="réponse_formulaire3"> Metz
                    </p>
                    <p class="question_formulaire">En 1998 qu'à t-il fait comme exploit ?<br>
                        <input type="radio" name="réponse_formulaire4"> Traire sa première vache
                        <input type="radio" name="réponse_formulaire4"> Dragué à une prostitué
                        <input type="radio" name="réponse_formulaire4"> Sérré la main à Jean De La Fontaine
                        <input type="radio" name="réponse_formulaire4"> Ecrit son premier poème " La vache nommée Marguerite"
                    </p>
                    <p class="question_formulaire">Quel est le nom de Eric ?<br>
                        <input type="radio" name="réponse_formulaire5"> Hochet
                        <input type="radio" name="réponse_formulaire5"> Hockel
                        <input type="radio" name="réponse_formulaire5"> Hocret
                        <input type="radio" name="réponse_formulaire5"> Lavinass
                    </p>
                    <p class="question_formulaire">Quel âge a Eric ?<br>
                        <input type="radio" name="réponse_formulaire6"> 17
                        <input type="radio" name="réponse_formulaire6"> 30
                        <input type="radio" name="réponse_formulaire6"> 32
                        <input type="radio" name="réponse_formulaire6"> 45
                    </p>
                    <p class="question_formulaire">De quel ville vient-il ?<br>
                        <input type="radio" name="réponse_formulaire7"> Paris
                        <input type="radio" name="réponse_formulaire7"> Strasbourg
                        <input type="radio" name="réponse_formulaire7"> Lovigny
                        <input type="radio" name="réponse_formulaire7"> Metz
                    </p>
                    <p class="question_formulaire">En 1998 qu'à t-il fait comme exploit ?<br>
                        <input type="radio" name="réponse_formulaire8"> Traire sa première vache
                        <input type="radio" name="réponse_formulaire8"> Dragué à une prostitué
                        <input type="radio" name="réponse_formulaire8"> Sérré la main à Jean De La Fontaine
                        <input type="radio" name="réponse_formulaire8"> Ecrit son premier poème " La vache nommée Marguerite"
                    </p>
                    <p class="question_formulaire">Quel est le nom de Eric ?<br>
                        <input type="radio" name="réponse_formulaire9"> Hochet
                        <input type="radio" name="réponse_formulaire9"> Hockel
                        <input type="radio" name="réponse_formulaire9"> Hocret
                        <input type="radio" name="réponse_formulaire9"> Lavinass
                    </p>
                    <p class="question_formulaire">Quel âge a Eric ?<br>
                        <input type="radio" name="réponse_formulaire10"> 17
                        <input type="radio" name="réponse_formulaire10"> 30
                        <input type="radio" name="réponse_formulaire10"> 32
                        <input type="radio" name="réponse_formulaire10"> 45
                    </p>
                    <p class="question_formulaire">De quel ville vient-il ?<br>
                        <input type="radio" name="réponse_formulaire11"> Paris
                        <input type="radio" name="réponse_formulaire11"> Strasbourg
                        <input type="radio" name="réponse_formulaire11"> Lovigny
                        <input type="radio" name="réponse_formulaire11"> Metz
                    </p>
                        <p class="question_formulaire">En 1998 qu'à t-il fait comme exploit ?<br>
                        <input type="radio" name="réponse_formulaire12"> Traire sa première vache
                        <input type="radio" name="réponse_formulaire12"> Dragué à une prostitué
                        <input type="radio" name="réponse_formulaire12"> Sérré la main à Jean De La Fontaine
                        <input type="radio" name="réponse_formulaire12"> Ecrit son premier poème " La vache nommée Marguerite"
                    </p>
                    <p id="bouton_formulaire">
                        <input id="button_submit" type="submit" name="submit_button" value="Envoyer">
                    </p>
                </form>
            </div>

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