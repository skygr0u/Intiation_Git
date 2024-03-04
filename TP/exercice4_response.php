<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Information On the Index</title>
    <style>
        * {
            background-color: #000;
            color: white;
            text-align: center;
            padding: 20px;
            font-family: sans-serif;
        }

        div {
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            background-color: #15172b;
            height: 300px;
        }

        h1 {
            color: #08d;
            margin-top: 50px;
        }

        h2 {
            margin:0;
            font-size: xx-large;
        }

        a {
            color: #08d; 
            text-decoration: none; 
            font-weight: bold;
            cursor: pointer;
        }

        a:hover {
            color: #06b; 
        }
    </style>
</head>
<body>
    <?php
        $index = $_GET["index"];
        $value = $_GET["value"];

        echo "<div>";
        echo "<h1>Plus de Detail sur l'index</h1>";
        echo "<h2>Index : $index </h2>";
        echo "<h2>Value : $value </h2>";
        echo "</div>";

    ?>
</body>
</html>