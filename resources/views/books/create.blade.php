<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="container">
    <a href="{{ route('books.index')}}">Go back</a>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf {{-- I have yet to know what this exactly does besides do security stuff / prevent mass submission..? --}}
        Book Name:
        <input type="text" name="book_name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
        <br /><br />
        <button type="submit" class="btn btn-primary">Add it!</button>
    </form>
</body>
</html>