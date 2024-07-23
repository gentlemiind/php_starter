<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Babacar Fall">
    <meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="phone">
        <div class="searchbar">
            <img src="./hamburger.png" alt="">
            <input type="text" placeholder="search for people">
            <span>bf</span>
        </div>

        <?php


        $contacts = [
            [
                "fullname" => "Jean Marie",
                "email" => "jeanmarie@gmail.com"
            ],
            [
                "fullname" => "Aliou Diouf",
                "email" => "alioudiouf@gmail.com"
            ],
            
            [
                "fullname" => "Babacar Fall",
                "email" => "babacarfall@gmail.com"
            ]

        ];

        function afficherContact($contact)
        {

            echo "
             <div class='contact'>

            <div class='avatar'>
                A
            </div>

            <div class='contact-infos'>
                <div class='name'>
                {$contact['fullname']}
                </div>
                <div class='email'>
                     {$contact['email']}
                </div>
            </div>
        </div>
            
            ";
        }



        foreach($contacts as $contact){
            afficherContact($contact);
        }



        ?>




        <a href="./add-contact.html">
            <div class="floating-btn">+
            </div>
        </a>

    </div>

</body>

</html>