<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= http_response_code() ?></title>

    <style>
        :root,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: black;
            background-image: url("https://http.cat/<?= http_response_code() ?>");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>
</head>

<body>

</body>

</html>