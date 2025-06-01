<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post | index</title>
</head>
<body>
    <h1>Show one post</h1>
    <h3>Select * from post where idpost = <?= $idpost ?>;</h3>
    <h3>ID: {{ $idpost }}</h3>  
</body>
</html>