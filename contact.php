<?php

function retourALaLigne()
{
    print "<br/>";
}


$contacts = [
    [
        "fullname" => "Jean Marie",
        "email" => "jeanmarie@gmail.com"
    ],
    [
        "fullname" => "Aliou Diouf",
        "email" => "alioudiouf@gmail.com"
    ]
];

function afficherContact($contact){
    print "nom : {$contact['fullname']} - email : {$contact['email']}";
    retourALaLigne();

}
foreach($contacts as $contact){
    afficherContact($contact);
}
