<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Book Name</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book) {{-- "books" from web.php --}}
            <tr>
                <td>{{ $book->name }}</td>
                <td><a href="{{ route('books.edit'), $book }}"></a>Edit</td> {{-- by default the parameter is id --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>