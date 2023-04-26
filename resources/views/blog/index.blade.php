<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- @@unless ($posts)
        <h1>
            Post have been saved
        </h1>
        {{-- Doesn't show h1, because we get posts --}}
    {{-- @endunless --}}

    {{-- @forelse ($posts as $post)
        {{ $post->title }}
    @empty
        <p>No posts have been set</p>
        {{-- Doesn't  show, because forelse worked and showed posts --}}
    {{-- @endforelse --}}

    @forelse ($posts as $post)
        {{ $loop->index }}
        {{-- hiden property loop is a an SED class object and index method 
        will return 0 based index of the current item in the loop.
        Print 0 till 201

        Also can use:
            iteration - starts with 1
            remaining - shows how many items have left
            starts with 201 and end with 0
            count - shows count of items in lopp (shows 202)
            first - boolean property that shows if the item is the
            first inside the loop
            last - oposite of first
            depth - constantly looping over 1 forelse
            parent - checks if loop is inside another loop --}}
    @empty
        <p>No posts have been set</p>
        {{-- Doesn't  show, because forelse worked and showed posts --}}
    @endforelse

</body>
</html>