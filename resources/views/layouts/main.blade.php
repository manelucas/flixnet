<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83f862bec7.js" crossorigin="anonymous"></script>

<style>
    body{
        background-color: rgba(0, 0, 0, 0.95);
    }

    header{
        background-color: black;
    }
    .navbar{
        color: white;
        background-color: rgba(0, 0, 0, 0.95);
        width: 100%;
        margin: auto;
    }

    .shadow-sm:hover {
        transform: scale(1.5);
        transition: 2s;
        z-index: 100;
    }
</style>

    <title>Flixnet</title>
</head>

<body>
@include('layouts.navbar')
    
<main>
@yield('content')
</main>

@include('layouts.cards')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>