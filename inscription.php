<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

    <title>Cette fois c'est la bonne on s'y met</title>

    <?php include ('./Realisation_backend/controler/create_user.php');?>
</head>

<body>

    <header>

        <p> Powered by <a href="www.twitch.com">Twitch</a><i class="fab fa-twitch"></i></p>

    </header>

    <div class="cadre2">
        <h2>On t'a préparé un petit formulaire pour faire plus ample connaissance ! (et surtout créer ton compte)<br></h2>


        <form action="" method="post">

            <fieldset>
                <!-- Premier champ avec les infos persos -->

                <legend>Quelques informations personnelles :</legend>

                <div id="radioMF">

                    <input type="radio" name="radioS" id="radioM" checked>
                    <label for="radioM">Monsieur</label>


                    <input type="radio" name="radioS" id="radioF">
                    <label for="radioF">Madame</label>
                </div>

                <div class="nomPrenom">
                    <div>

                        <label for="prenom">Prénom :</label>
                        <br>
                        <input type="text" name="prenom" placeholder="Entrez votre prenom" maxlength="20" minlength="2" id="prenom" />
                    </div>


                    <div>
                        <label for="Nom">Nom :</label>
                        <br>
                        <input type="text" name="nom" placeholder="Entrez votre Nom" maxlength="20" minlength="2" id="Nom" />
                    </div>
                </div>

                <div>

                    <label for="age">Age :</label>
                    <br>
                    <input type="number" name="age" placeholder="01" maxlength="2" id="age" />

                </div>

                <div>
                    <label for="email">Mail :</label>
                    <br>
                    <input type="email" name="mail" placeholder="votreMail@smthg.com" id="email" />
                </div>

                <div>

                    <label for="tel">Numéro :</label>
                    <br>
                    <input type="tel" name="Numéro" placeholder="00.00.00.00.00" maxlength="10" id="number" />

                </div>

                <div>

                    <label for="password">Entrez votre mot de passe :</label>
                    <br>
                    <input type="password" name="mdp" placeholder="Hackerman" maxlength="20" id="password" />

                </div>


                <div>
                    <label for="infoD"> Description :</label>
                    <br>
                    <textarea name="text" placeholder="Ceci peut-être un roman" id="infoD" cols="10" rows="3"></textarea>

                </div>

                <div>

                    <label for="file" class="pic"> Choisissez une photo de profil :</label>
                    <input type="file" name="photoid" id="file">

                </div>


            </fieldset>

            <fieldset id="field">
                <!-- Deuxième champ avec les checkboxes -->

                <legend>Dites-nous ce que vous aimez regarder :</legend>

                <label for="checkboxJV"><input type="checkbox" id="checkboxJV" checked /> Jeux vidéos</label>

                <label for="checkboxEvent"> <input type="checkbox" id="checkboxEvent" /> évenements</label>

                <label for="checkboxJustC"> <input type="checkbox" id="checkboxJustC" /> Just chatting </label>

                <label for="checkboxNo"> <input type="checkbox" id="checkboxNo" /> Nada, je suis juste là pour découvrir</label>

            </fieldset>

            <fieldset id="field1">
                <!-- Dernier champ avec les infos persos -->

                <legend> Dites-nous quand est-ce qu'il vous arrive de regarder des streams</legend>

                <label for="checkMat"><input type="checkbox" name="checkWake" id="checkMat" checked> Le Matin</label>

                <label for="checkMid"><input type="checkbox" name="checkMid" id="checkMid"> Le midi</label>

                <label for="checkSoir"><input type="checkbox" name="checkWake" id="checkSoir"> Le soir</label>

                <label for="checkAsSoon"><input type="checkbox" name="checkAsSoon" id="checkAsSoon"> Dès que j'en ai l'occasion !</label>

            </fieldset>

            <fieldset id="field2">

                <div class="submit">

                   <input type="submit" name="submit">Valider</input>
                    <a href="./index.html">Retour</a>

                </div>

            </fieldset>


        </form>

    </div>


</body>

</html>