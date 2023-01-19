<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SEO -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Damn! It's a chair">
    <title>Chair | Get a Chair</title>

    <!-- icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="app.css">

    <!-- Js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="app.js" defer></script>
</head>
<body>
    @include('components.navbar')
    @yield('main')
</body>
</html>