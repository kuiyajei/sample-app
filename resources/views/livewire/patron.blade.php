<div> <!-- Livewire automatically puts in app.blade so there's no need to put the component here manually -->
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Livewire Patron Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="/" class="btn btn-secondary">click me to go back to the welcome page</a>

                    <!--Displays Update or Create-->
                    @if($updateMode)
                        @include('livewire.update')
                    @else
                        @include('livewire.create')
                    @endif
                    <!--Render table's records-->
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patron Name</th>
                                <th width="150px">
                                    Action
                                    @if($confirmDeletion)
                                        <button wire:click.prevent="cancel()" class="btn btn-secondary btn-sm">Cancel</button>
                                    @else
                                        <button wire:click.prevent="askDelete()" class="btn btn-danger btn-sm">Delete</button>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($patrons as $patron)
                            <tr>
                                <td>{{ $patron->id }}</td>
                                <td>{{ $patron->patron_name }}</td>
                                <td>
                                    @if($confirmDeletion)
                                        <button wire:click="delete({{ $patron->id }})" class="btn btn-danger btn-sm">Delete</button>
                                    @else
                                        <button wire:click="edit({{ $patron->id }})" class="btn btn-primary btn-sm">Edit</button>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No record
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>