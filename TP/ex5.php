<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .submit {
            margin-top: 130px;
        }
        h1{
            font-size: xx-large;
            color: white;
        }
        p {
            font-size: large;
            color: white;
        }
        table {
            border-collapse: collapse;
            width: 80%;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            color: white;
        }
        
    </style>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $explode = explode(' ', $text);

        if (!empty($explode)) {
            echo "<div>";
            echo "<h1>Exploded Text</h1>";
            echo "<table>";
            echo "<tr><th>Index</th><th>Value</th></tr>";

            foreach ($explode as $index => $value) {
                echo "<tr><td>$index</td><td>$value</td></tr>";
            }

            echo "</table>";
            echo "</div>";
        } else {
            echo "<p>No text to explode.</p>";
        }
    }
?>
</body>
</html>

