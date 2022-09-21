<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <a href="{{ route('patrons.index')}}">Go back</a>
                <form method="POST" action="{{ route('patrons.store') }}">
                    @csrf {{-- I have yet to know what this exactly does besides do security stuff / prevent mass submission..? --}}
                    Patron's Name:
                    <input type="text" name="patron_name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <br /><br />
                    <button type="submit" class="btn btn-primary">Add a patron</button>
                </form>

            </div>
        </div>
    </div>
</div>