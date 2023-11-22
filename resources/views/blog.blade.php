<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raqo | Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="" >

@foreach($blog as $blog)
    <h2>{{$blog->title}}</h2>
    <p>{{$blog->blog}}</p>
    <p>{{$blog->date}}</p>
@endforeach

</body>
</html>