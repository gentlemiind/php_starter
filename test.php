<?php

// Déclaration des Variables
$first_name = "Babacar";
$last_name = "Fall";
// Affichage avec echo
echo $first_name, " ", $last_name, "<br/>";
// TAKALé de deux chaines de caractères
$fullname = $first_name . " " . $last_name . "<br/>";
// Affichage  avec print
print $fullname;

//Déclarer une variable age
$age = 18;

// Structure conditionnelle
if ($age < 18) { //si l'age est inferieur a 18

    print "Tu es mineur (e)! <br/>";
} elseif ($age < 30) { //si l'age est inferieur a 30

    print "Tu es majeur(e)! <br/>";
} else { //si l'age est superieur ou égale à 30
    print "Tu es marié (e) ? <br/>";
}


// Structure conditionnelle switch
switch ($age) {
    case  18:
        print "Tu es mineur (e)! <br/>";
        break;
    case 30:
        print "Tu es majeur(e)! <br/>";
        break;
    case 45:
        print "Tu es marié (e) ? <br/>";
        break;
}

// String interpolation
echo "My name is {$fullname}. <br/>";

const AGE_LIMIT = 35;

if ($age >= AGE_LIMIT) {
    print "Allez vous marier! <br/>";
} else {
    print "Vous avez encore le temps de trouver le grand AMOUR! <br/>";
}

$etudiants = array("Jean Marie", "Mariama", "Diokhané");
$pointures = [18, 24, 38, 44];
$numbers = ["un", 2, "Trois"];


foreach ($etudiants as $etudiant) {
    print "Bonsoir {$etudiant} <br/>";
}

//   *
//   **
//  ***
//  ****
// *****

function retourALaLigne()
{
    print "<br/>";
}


function direBonjour($nom)
{
    print "Bonjour {$nom}";
}

function afficherUnTriangle($nb = 10)
{
    for ($i = 0; $i < $nb ; $i++) { // Pour tous les i inferieur à 5 faire une incrémentation 

        for ($k = $nb - $i; $k > 0; $k--) { // pour tous les K supérieur à 0, faire une décrémentation
            print "&nbsp;"; // Afficher un espace (HTML code)
        }
        for ($j = 0; $j < $i + 1; $j++) { // pour tous les j inferieur à i + 1, faire une incrémentation
            print " * "; // Afficher un *
        }
        retourALaLigne(); // retourner à la ligne

    }
}

retourALaLigne();
direBonjour("Dieng");
retourALaLigne();
afficherUnTriangle();
retourALaLigne();
afficherUnTriangle(30);
retourALaLigne();
// var_dump($etudiants);
// print "<br/>";
// var_dump($pointures);
// print "<br/>";
// var_dump($numbers);
// print "<br/>";



$operand = '';

switch ($operand) {
    case "+":
        print "C'est une addition. <br/>";
        break;
    case "-":
        print "C'est une soustraction. <br/>";
        break;
    case "*":
        print "C'est une multiplication. <br/>";
        break;
    case "/":
        print "C'est une division. <br/>";
        break;
    default:
        print "Je ne vois pas ce que cela peut être! <br/>";
}
