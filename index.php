<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }



        a{
            text-decoration: none;
            color: black;
        }

        button {
            border: 1px solid lavender;
            margin: 20px;
            width: 100px;
            height: 40px;
            border-radius: 10px;
            font-weight: 700;
        }

        button:hover {
            background-color: rgb(220, 220, 223);
        }
    </style>
</head>

<body>
    <button><a href="save.php">Import By folder</a></button>
    <button><a href="saveOne.php">Import By File</a></button>
</body>

</html>