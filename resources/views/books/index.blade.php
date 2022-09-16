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
    <a href="{{ route('books.create')}}">Add a book</a>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->book_name }}</td>
                <td><a href="{{ route('books.edit', $book)}}">Edit</a></td> {{-- pass in the object $book, by default will find record id --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>