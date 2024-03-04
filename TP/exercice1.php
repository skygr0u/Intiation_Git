<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Date</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="form" style="margin: 50px;">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's See the Date</div>
            <div class="input-container ic1">
                <input id="firstname" name="firstname" class="input" type="text" placeholder=" " required/>
                <div class="cut "></div>
                <label for="firstname" class="placeholder">Nom</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" name="lastname" class="input" type="text" placeholder=" " required/>
                <div class="cut cut-short"></div>
                <label for="lastname" class="placeholder">Prénom</label>
            </div>
            <div>
                <button type="text" class="submit">Date</button>
            </div>
        </div>
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["firstname"];
            $prenom = $_POST["lastname"];

            $date = date("d/m/Y");
            $time = date("H:i:sA");

            ?>
            <div class="afficher">
                <h1>Bonjour</h1>
                <div class="display"><?php echo $prenom . " " . $nom ?></div>
                <div class="date">
                    <h3>Date : <?php echo $date ?></h3>
                    <h3>Time : <?php echo $time ?></h3>
                </div>
            </div>
        <?php
        }
        ?>



    
</body>
</html>