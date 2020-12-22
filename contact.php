<!Doctype html>
<html lang="fr">      
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--intégration Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jarditou</title>
</head>
<body>
<!--Container boostrap-->
    <div class="container">
<!--header: logo et slogan-->
        <header>
            <div class="row">
                <div class="col-6">
                    <img img="fluid" src="src\img\jarditou_logo.jpg" alt="logo jarditou" title="logo jarditou" width="100%">
                </div>
                <div class="col-6 text-right">
                    <h2>Tout le jardin</h2>
                </div>
            </div>
        </header>
<!--menu: liste non ordonnée 3 liens-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">jarditou.com</a>
<!--toggler... bascule vers bouton hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
<!--Menu de navigation formulaire de recherche à droite-->
            <ul class= "navbar-nav mr-auto">
                <li class="nav-item active"><a  class="nav-link" href="index.html">Accueil</a></li>
                <li class="nav-item"><a  class="nav-link" href="tableau.html">Tableau</a></li>
                <li class="nav-item"><a  class="nav-link" href="contact.html">Contact</a></li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Votre promotion">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
        </nav>
<!--image promotion en bannière-->
        <img class="img-fluid" src="src\img\promotion.jpg" alt="promotion" title="promotion">
            <br><br>
        <p>* Ces zones sont obligatoires</p>
<!--formulaire -->
        <form name="formJarditou" action="jarditoucontact.php" method="post" id="formulaire">
<!--formulaire première partie: coordonnées-->
            <fieldset>
            <legend><h3>Vos coordonnées</h3></legend>
                <div class="form-group">
                    <label for="nom">Votre nom*</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" >  
                    <!-- span pour message éventuel d'erreur lors de la validation du formulaire-->
                    <span style ="color: red" id="noNom"></span>  
                </div>
                <div class="form-group">
                    <label for="prenom">Votre prénom*</label>
                    <input type="text" class="form-control" name ="prenom" id="prenom" placeholder="Veuillez saisir votre prénom">
                    <span style ="color: red" id="noPrenom"></span>      
                </div>
                <div class="form-group">
                <legend class="col-form-label">Sexe*</legend>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="feminin" id="optionsexe" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="masculin" id="optionsexe2" value="option2">
                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datenaissance">Date de naissance</label>
                    <input type="text" class="form-control" name="date" id="datenaissance" placeholder="jj/mm/aaaa">
                    <span style ="color: red" id="noDate"></span> 
                </div>
                <div class="form-group">
                    <label for="postal">Code postal*</label>
                    <input type="text" class="form-control" name="postal" id="postal">   
                    <span style ="color: red" id="noPostal"></span> 
                </div> 
                <div class="form-group">
                    <label for="adresse">Adresse*</label>
                    <input type="text" class="form-control" name ="adresse" id="adresse">  
                    <span style ="color: red" id="noAdresse"></span>   
                </div> 
                <div class="form-group">
                    <label for="ville">ville*</label>
                    <input type="text" class="form-control" name="ville" id="ville">  
                    <span style ="color: red" id="noVille"></span>   
                </div> 
                <div class="form-group">
                    <label for="mail">Email*</label>
                    <input type="text" class="form-control" name="mail" id="mail" placeholder="dave.loper@afpa.fr">   
                    <span style ="color: red" id="noMail"></span>  
                </div> 
            </fieldset>
<!--formulaire 2e partie: demande-->
            <fieldset>
            <legend><h3>Votre demande</h3></legend>
                <div class="form-group">
                    <label for="sujet">Sujet*</label>
                    <select class="form-control" name="sujet" id="sujet">
                        <option>Veuillez sélectionner un sujet</option>
                        <option>Mes commandes</option>
                        <option>Question sur un projet</option>
                        <option>Réclamation</option>
                        <option>Autres</option>
                    </select>
                    <span style = "color: red" id="noSujet"></span>
                    </div>
                <div class="form-group">
                    <label for="question">Votre question*:</label>
                    <textarea class="form-control" name ="question" id="question" rows="3"></textarea>
                    <span style ="color: red" id="noQuestion"></span>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        J'accepte le traitement informatique de ce formulaire
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn btn-dark" value="Envoyer" id="envoyer">
                <input type="submit" class="btn btn-dark" value="Annuler">
            </fieldset>             
        </form>
<!--fin du formulaire-->
        <br>
        <!--pied de page pour second menu, liste ordonnée 3 liens-->
        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--toggler... bascule vers bouton hamburger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>   
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class= "navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="legal.html">Mentions légales</a></li>
                    <li class="nav-item"><a class="nav-link" href="horaires.html">Horaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="plansite.html">Plan du site</a></li>
                </ul>
            </nav>
        </footer>
    </div>
<!--javascript boostrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

