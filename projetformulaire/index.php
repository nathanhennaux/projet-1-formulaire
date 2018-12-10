<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- FORMULAIRE -->
    <div class="container">
        <div class="card-panel">
            <div class="row form">
                <!-- <h2>Formulaire</h2>-->
                <form class="col s12" action="user.php" method="post">
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" name="first_name" class="validate ">
                            <label for="first_name" class="label">Prénom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" name="last_name" class="validate ">
                            <label for="last_name" class="label">Nom</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12 s12">
                            <input id="email" type="email" name="email" class="validate ">
                            <label for="email" class="label">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12 s12">
                            <select name="pays">
                                <option value="" disabled>Choisir un pays</option>
                                <option value="1">Belgique</option>
                                <option value="2">USA</option>
                                <option value="3">Japon</option>
                                <option value="4">Enfer</option>
                            </select>
                            <label for="pays">Pays</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m12 s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <p>
                            <label class="label genre">Quel est votre sexe?</label>
                            </p>
                            <p>
                                    
                                    <input class="sexe" name="sexe" type="radio" value="1" checked/>
                                    <span>Homme</span>

                            </p>
                            <p>
                                    <input class="sexe" name="sexe" type="radio" value="2" />
                                    <span>Femme</span>
                            </p>
                        </div>
                        <div class="input-field col s6">
                            <p>
                            <label class="label sujet">Quel est le sujet?</label>
                            </p>
                            <p>
                                <label>
                                    <input id="indeterminate-checkbox" name="sujets[]" value="1" type="checkbox" />
                                    <span>Html</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="indeterminate-checkbox" name="sujets[]" value="2" type="checkbox" />
                                    <span>Css</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input id="indeterminate-checkbox" name="sujets[]" value="3" type="checkbox" />
                                    <span>Php</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/script.js"></script>
</body>

</html>