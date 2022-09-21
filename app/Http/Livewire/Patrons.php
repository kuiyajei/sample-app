<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patron;

class Patrons extends Component
{
    public $patron_id, $patron_name; // fields to modify
    public $updateMode = false;
    public $confirmDeletion = false;

    protected function rules()
    {
        return [
            'patron_name' => 'required|string',
        ];
    }

    public function render()
    {
        $patrons = Patron::all();
        return view('livewire.patron', ['patrons' => $patrons]);
    }

    // PatronController stuff but better

    public function create()
    {
        return view('patron.create'); 
    }

    public function store()
    {
        // $validatedData = $this->validate([ //! validation can be accomplished here (NOT DONE); probably better in fun() rules
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);

        $validatedData = $this->validate();
  
        Patron::create($validatedData);
  
        session()->flash('message', 'Patron Added');
  
        $this->resetInputFields();
    }

    public function edit($id)
    { // 'this' refers to the variables in this class
        $patron = Patron::findOrFail($id);
        $this->patron_id = $id;
        $this->patron_name = $patron->patron_name;
  
        $this->updateMode = true;
    }

    public function update()
    {
        // $validatedData = $this->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);

        $validatedData = $this->validate();

        Patron::where('id',$this->patron_id)->update([
            'patron_name' => $validatedData['patron_name'],
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }

    // 
    public function delete($id)
    {
        Patron::find($id)->delete();
        session()->flash('message', 'Patron Removed');
        $this->confirmDeletion = false;
    }

    public function askDelete()
    {
        # code...
        $this->confirmDeletion = true;
    }

    public function cancel() //! this is used for an @if statement at the View. Displays Create or Update functions depending on the `updateMode`
    {
        $this->updateMode = false;
        $this->confirmDeletion = false;
        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->patron_name = '';
    }
}
