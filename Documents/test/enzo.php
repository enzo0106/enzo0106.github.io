<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Contact</title>
    <style>
    body {
    background-image: url(imageeee.png);
    background-size: cover; /* Ou 'contain', selon le comportement souhaité */
    background-position: center; /* Centre l'image */
    background-repeat: no-repeat; /* Pour éviter la répétition de l'image */
    height: 100vh; /* Assure que le body couvre toute la hauteur de la fenêtre */
    margin: 0; /* Enlève les marges par défaut qui peuvent causer des espaces */
    padding: 0; /* Enlève le padding qui pourrait aussi causer des espaces */
}
    .text-colored {
        color :rgb(255, 255, 255)

    }

    </style>
</head>
<body>
<ul>
    <form action="mailto:votremai1@gmail.com"
    method="post">
    <br><br>
    <label for="nom" class="text-colored" >Nom : </label> <br> <input type="text" id="nom" name="nom"placeholder="pseudo" autofocus  ><br><br>
    <label for="mdp" class="text-colored" >Mot de passe : 
    <br>
    </label> <input type="password" name="mdp" id="mdp" pattern=". {8,}"placeholder="Entrez votre mot de passe" required><br><br>
    <!-- créez un champ mail qui doit
    contenir un @ et un point aprés --
    M.<input type="radio" value="monsieur"

    name="civilite"> Mme ‹input
    <body>

        <div class="form-container">
            <h2>Formulaire de Contact</h2>
            <form action="/submit" method="POST">
            <Champ Nom -->
                <label for="age" class="text-colored">age :</label><br>
                <input type="text" id="age" name="age" placeholder="Entrez votre age" required><br><br>

                <!-- Champ Mot de Passe -->
                <label for="password" class="text-colored"; >Mot de Passe :</label><br>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required><br><br>

                <!-- Champ Email -->
                <label for="email" class="text-colored";>Email :</label><br>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required><br><br>

                <!-- Champ Genre -->
                <label for="genre" class="text-colored";>Genre :</label><br>
                <select id="genre" name="genre" required>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">sophie mon BB</option>
                    <option value="non_specifie">solene lachevre miel</option>
                </select><br><br>

                <!-- Champ Message -->
                <label for="message" class="text-colored">Votre Message :</label><br>
                <textarea id="message" name="message" rows="5" placeholder="Entrez votre message ici..." required></textarea><br><br>

                <!-- Bouton de soumission -->
                <button type="submit">Envoyer</button><br><br><br>
                <a href="index.html" class="text-colored">retour au CV</a>
            </form>
</ul>
    </div>

    bonjour <p id="valueNom" class="text-colored"></p>
    <script>
       
    //     var resultat = prompt("quelle est la capital du bresil");
    //     var resu = prompt("Quelle est la capitale du Brésil ?");
    // console.log("hello");


    /*while (resu !== "Brasilia" && resu !== null) {
        alert("Réponse incorrecte. Essayez encore.");
        resu = prompt("Quelle est la capitale du Brésil ?");
    }


    if (resu === "Brasilia") {
        document.write('<span style="color: white;">Félicitations, la capitale du Brésil est bien Brasília !</span>');

    } else if (resu === null) {
        document.write('<span style="color: white;">"Vous avez annulé l opération."!</span>');
    }*/

        /*if (resultat == "Brasilia" ){
            document.write("t'es bien chaud");
        }
        else if (resultat == "rio" ){
            document.write("aieee aieee aieee revois ça mon gars");
        }
        else if (resultat == "São Paulo" ){
            document.write("ça aurait pu main non");
        }
        else {document.write("t'es tres loin mon reuf")}*/
        document.getElementById("nom").addEventListener("input", function(){
            document.getElementById("valueNom").innerHTML = document.getElementById("nom").value;

        })
        <?Php
        echo "hello world";
        ?>

    </script>
    
</body>
</html>

