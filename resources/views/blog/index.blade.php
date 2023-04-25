<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @@if (count($posts) > 100)
    {{-- Prints h1 if we have more than 100 posts --}}
        <h1>
            {{ dd($posts) }}
        </h1>
    @elseif (count($posts) === 202)
        <h1>
            You have exactly 202 posts
        </h1>
    @else
        <h1>
            No posts
        </h1>
    @endif

</body>
</html>