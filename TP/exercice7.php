<?php
    function afficherMessages() {
        $livredorFile = "livredor.txt";

        if (file_exists($livredorFile)) {
            $message = file($livredorFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            if (empty($message)) {
                echo"<p>No Messages in our visitor book</p>";
            } else {
                foreach ($message as $message) {
                    $details = explode(";", $message);
                    echo "<div class='messages'>";
                    echo "<h2 style='color:#08d;'>$details[1]</h2> <br>";
                    echo "<p>" . htmlspecialchars($details[3]) . "<p><br>" ;
                    echo "<p> Posted on $details[0] </p>";
                    echo "<br>";
                    echo "<hr>";
                    echo "</div>";
                }
            }
        }else {
            echo "<p>No messages in our visitors' book</p>";
        }
    }

    function enregistermessage($name, $email, $message) {  
        $livredorFile = "livredor.txt";

        if ((empty($name)) || (empty($email)) || (empty($message))) {
            echo "<p class='erreur'>Veuillez saisir votre name, votre email et votre message.</p>";
            return;
        }else {
            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $message = htmlspecialchars($message);

            $date = date("Y-m-d");

            $newmessage = "$date;$name;$email;$message\n";

            $fichier = fopen($livredorFile,"a");

            fputs($fichier, $newmessage);

            fclose($fichier);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = isset($_POST["name"]) ? trim($_POST["name"]) :"";
        $email = isset($_POST["email"]) ? trim($_POST["email"]):"";
        $message = isset($_POST["message"]) ? trim($_POST["message"]) :"";

        enregistermessage($name, $email, $message);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/livredor.css" />
    <title>Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form" style="margin: 50px;">
            <div class="title">Welcome</div>
            <div class="subtitle">To our exhibition</div>
            <div class="input-container ic1">
                <input id="name" name="name" class="input" type="text" placeholder=" " required/>
                <div class="cut "></div>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input id="email" name="email" class="input" type="email" placeholder=" " required/>
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">E-mail</label>
            </div>
            <div class="input-container ic2">
                <textarea name="message" id="message" class="input" placeholder=" " cols="30" rows="10" required></textarea>
                <div class="cut cut-short"></div>
                <label for="message" class="placeholder">Message</label>
            </div>  
            <div>
                <button type="text" class="submit">Send</button>
            </div>
        </div>
    </form>

    <div class="messages-container">
    <?php
        echo "<br>";
        afficherMessages(); 
     ?>
    </div>
    
</body>
</html>