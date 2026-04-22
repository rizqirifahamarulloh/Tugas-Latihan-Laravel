<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>
<body>
    <h1>Authors</h1>
    <p>Ini adalah halaman untuk menampilkan daftar penulis.</p>

    @foreach($authors as $author)
        <li>{{ $author->name }} - Bio: {{ $author->bio }}</li>
    @endforeach
</body>
</html>