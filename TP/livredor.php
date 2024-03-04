<?php
    
    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM users ;";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        echo "Query Failed :" . $e->getMessage() ;
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

    <form action="includes/addMessages.php" method="POST">
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
            if (empty($result))
            {
                echo "<p class='erreur'>No Results !</p>";
            }else{
                foreach ($result as $row) {
                    echo "<div class='messages'>";
                    echo "<h2 style='color:#08d;'>" . htmlspecialchars($row['name']) . "</h2>";
                    echo "<p>" . htmlspecialchars($row['message']) . "</p>";
                    echo "<p>Posted on ". htmlspecialchars($row['date']) . "</p>";
                    echo "<hr>";
                    echo "</div>";
                }
            }

        ?>

    </div>
    
</body>
</html>