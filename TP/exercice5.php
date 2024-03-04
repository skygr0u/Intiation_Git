<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Explode</title>
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
    <table style="width: 50px">
        
    </table>

    <form action="ex5.php" method="POST">
        <div class="form" style="margin: 50px;">
            <div class="title">Welcome</div>
            <div class="subtitle">Explode your text</div>
            <div class="input-container ic2">
                <textarea name="text" id="text" class="input" cols="30" rows="10"  placeholder=" " required></textarea>
                <div class="cut cut-short"></div>
                <label for="text" class="placeholder">Text</label>
            </div>
            <div>
                <button type="text" class="submit">Explode</button>
            </div>
        </div>
    </form>
</body>
</html>