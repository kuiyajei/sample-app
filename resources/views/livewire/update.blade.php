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

                    like and subscrubdasds

                </div>
            </div>
        </div>
    </div>
</div> --}}

You are now editing

<form>
    <input type="hidden" wire:model="patron_id">
    <div class="form-group">
        <label for="exampleFormControlInput1">Patron Name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="patron_name">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Save Changes</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
</form>