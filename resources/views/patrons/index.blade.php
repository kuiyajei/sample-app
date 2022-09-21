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
                            <th>Patron Name</th>
                            <th>...</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($patrons as $patron) <!-- $fromRouteName as $whateverName -->
                            <tr>
                                <td>{{ $patron->patron_name }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('patrons.edit', $patron)}}">Edit</a>
                                    <form method="POST" action="{{ route('patrons.destroy', $patron) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit button" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ route('patrons.create')}}">Add a patron</a> <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>