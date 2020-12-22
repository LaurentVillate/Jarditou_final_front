<?php
$erreur :[];
// Validation du nom //
if(empty($_POST["nom"])){
    $erreur["nom"] = "Saisissez un nom";
}
// Validation du prenom //
if(empty($_POST["prenom"])){
    $erreur["prenom"] = "Saisissez un prenom";
}
// Validation de la date de naissance //

// Validation du code postal //
if(strlen($_POST["postal"])!=5){
    $erreur["postal"] = "Saisissez un code postal valide (5 chiffres";
}

// Validation de l'adresse //
if(empty($_POST["adresse"])){
    $erreur["adresse"] = "Saisissez une adresse";
}

// Validation de la ville //
if(empty($_POST["ville"])){
    $erreur["ville"] = "Saisissez une ville";
}

// Validation de l'email //
if(empty($_POST["mail"]) || !filter_var($POST["mail"], FILTER_VALIDATE_EMAIL)){
    $erreur["mail"] = "Saisissez une adresse mail valide";
}

// Validation sujet de la demande //

// Validation de la question //
if(empty($_POST["question"])){
    $erreur["question"] = "Saisissez votre question";
}
