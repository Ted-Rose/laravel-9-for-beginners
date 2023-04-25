<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{ $posts->title }}
    {{-- Equevialent to <?php $posts->title ?>
        but not because behind scenes we actually do:
        <?php echo htmlentities($posts->title) ?>--}}
</body>
</html>