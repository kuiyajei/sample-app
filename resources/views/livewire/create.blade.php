{{-- <div> <!-- Livewire automatically puts in app.blade so there's no need to put the component here manually -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Livewire Patron Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                </div>
            </div>
        </div>
    </div>
</div> --}}

<h1>Add a patron</h1> <br>

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Patron Name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" wire:model="patron_name">
    </div> <br>
    <button wire:click.prevent="store()" class="btn btn-success">Add</button>
</form>