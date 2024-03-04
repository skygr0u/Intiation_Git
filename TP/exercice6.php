<?php
    function formatDateTime($date) {
        return date("d-m H:i:s", $date);
    }

    $filePath = "connexion.txt";

    $currentTime = time();
    file_put_contents($filePath, formatDateTime($currentTime) . PHP_EOL, FILE_APPEND);

    $connectionDates = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Dates</title>

    <style>
        * {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 20px;
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>Connection Dates</h1>

    <?php

        if (!empty($connectionDates)) {
            echo "<table>";
            echo "<tr><th>Connection Date</th></tr>";

            foreach ($connectionDates as $date) {
                echo "<tr><td>$date</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No connection dates !</p>";
        }
    ?>

</body>
</html>
