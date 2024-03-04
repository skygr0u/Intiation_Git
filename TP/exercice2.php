<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <style>
        * {
            background-color: #fff;
        }
        div {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        table {
            text-align: center;
            color: white;
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
        h1{
            padding-top: 50px;
            text-align: center;
            color: white;
        }

    </style>
</head>
<body>
    <h1>Random Table of 10 values</h1>

    <?php
        $T = array() ;

        for ($i = 0; $i < 10; $i++) {
            $T[$i] = rand(1,20) ;
        }
        /*
        echo"<div>";
        echo"<table>";
        echo"<tr><th>Index</th><th>Value</th></tr>";

        foreach ($T as $index => $value) {
            echo "<tr><td>$index</td><td>$value</td></tr>";
        }
        echo "</table>";
        echo"</div>";*/
        // echo var_dump($T);

        print_r($T);
        echo "<br>";
        echo var_dump($T);
    ?>

</body>
</html>