<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Form</title>
    <style>
        p {
            color: white;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="form" style="margin: 50px;">
            <div class="title">Welcome</div>
            <div class="subtitle">Sign Up</div>
            <div class="input-container ic2">
                <input id="lastname" name="lastname" class="input" type="text" placeholder=" "/>
                <div class="cut cut-short"></div>
                <label for="lastname" class="placeholder">Prénom</label>
            </div>
            <div class="input-container ic1">
                <input id="firstname" name="firstname" class="input" type="text" placeholder=" "/>
                <div class="cut "></div>
                <label for="firstname" class="placeholder">Nom</label>
            </div>
            <div>
                <button type="text" class="submit">Envoyer</button>
            </div>
        </div>
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["firstname"];
            $prenom = $_POST["lastname"];

            if (empty($nom) || empty($prenom))
            {
                ?>
                <div class="afficher">
                <h1>Be Careful</h1>
                <div class="display">Complete The form please !</div>
            </div>
                <?php
            }
            else {
            ?>
            <div class="afficher">
                <h1>Bonjour</h1>
                <div class="display"><?php echo $prenom . " " . $nom ?></div>
            </div>
        <?php
            }
        }
        ?>



    
</body>
</html>