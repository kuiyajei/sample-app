<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <a class="btn btn-secondary" href="{{ route('patrons.index')}}">Go back</a>
                <form method="POST" action="{{ route('patrons.update',$patron) }}">
                    @method('PUT')

                    @csrf {{-- I have yet to know what the hell this exactly does besides do security stuff --}}
                    Patron Name:
                    <input type="text" name="patron_name" value="{{$patron->patron_name}}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    <br /><br />
                    <button type="button submit" class="btn btn-success">Confirm Edit</button>
                </form>

            </div>
        </div>
    </div>
</div>