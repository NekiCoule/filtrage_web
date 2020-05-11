<!DOCTYPE HTML5>
<html>

<!--head-->
	<head>
		<title>Traitement des données</title>
		<meta charset="UTF-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

	</head>

<!--body-->
	<body id="Traitement" name="body">
    <h1>Traitement des données</h1>

    <?php
	    //si le formulaire a été envoyé
	    if(isset($_POST['Nom'])){

        //nom
        echo("<p>Nom avec caractères spéciaux filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Nom',FILTER_SANITIZE_SPECIAL_CHARS));
        echo("<p>Nom avec nombres filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Nom',FILTER_SANITIZE_NUMBER_INT));

        //prénom
        echo("<p>Prénom avec caractères spéciaux filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Prenom',FILTER_SANITIZE_SPECIAL_CHARS));
        echo("<p>Prénom avec nombres filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Prenom',FILTER_SANITIZE_NUMBER_INT));

        //sexe
        echo("<p>Vous êtes :</p>");
        echo($_POST["Sexe"]);

        //ajout de la réception de l'email
        echo("<p>email avec caractères spéciaux filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Email',FILTER_SANITIZE_SPECIAL_CHARS));
        echo("<p>email avec nombres filtrés :</p>");
        echo(filter_input(INPUT_POST, 'Email',FILTER_SANITIZE_NUMBER_INT));

        if(!filter_input(INPUT_POST, 'Email',FILTER_VALIDATE_EMAIL)){
          echo("<p>Il y a un soucis avec votre email</p>");
        }else{
          echo("<p>Votre email est correct</p>");
        }

        //sports
        if(isset($_POST["Sports"])){
          echo("<p>sport avec caractères spéciaux filtrés :</p>");
          echo(filter_input(INPUT_POST, 'Sports',FILTER_SANITIZE_SPECIAL_CHARS));
          echo("<p>sport avec nombres filtrés :</p>");
          echo(filter_input(INPUT_POST, 'Sports',FILTER_SANITIZE_NUMBER_INT));
        }
	    }
    ?>

	</body>

  <!--footer-->
	<footer id="FOOTER" name="footer">
    <h4>Contact</h4>
    <a href="m.weber@ludus-academie.com">M'envoyer un mail</a>
    <br />
    <a href="../images/icon.png" title="Sauvetage de l icone">Télécharger l'icone du site</a>
    <br />
    <a href="http://www/google/fr" alt="Retour au on endroit" title="Sauvetage" target="_self">Bouée de sauvetage</a>
	</footer>

</html>
