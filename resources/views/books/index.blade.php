<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Management') }}
        </h2>
    </x-slot>

{{--    copy-pasted front-end stuff from dashboard.php--}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-bordered">
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
                                <td>
                                    <a class="btn btn-warning" href="{{ route('books.edit', $book)}}">Edit</a>
                                    <form method="POST" action="{{ route('books.destroy', $book) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit button" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td> {{-- pass in the object $book, by default will find record id --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('books.create')}}">Add a book</a>
                </div>
            </div>
        </div>
    </div>
{{--    <a href="{{route('welcome')}}" class="btn btn-secondary">click me to go back to the welcome page</a>--}}
</x-app-layout>
