<?php

namespace App\Http\Controllers;

use App\Models\Patron;
use Illuminate\Http\Request;

class PatronController extends Controller
{
    public function index()
    {
        $patrons = Patron::all();

        return view('patrons.index', compact('patrons'));
    }

    public function create()
    {
        return view('patrons.create'); 
    }

    public function store(Request $request)
    {
        Patron::create([
            'patron_name' => $request->input('patron_name')
        ]);

        return redirect()->route('patrons.index');
    }

    public function show(Patron $patron)
    {
        
    }

    public function edit(Patron $patron)
    {
        return view('patrons.edit', compact('patron'));
    }

    public function update(Request $request, Patron $patron)
    {
        $patron->update([
            'patron_name' => $request->input('patron_name')
        ]);

        return redirect()->route('patrons.index');
    }

    public function destroy(Patron $patron)
    {
        $patron->delete();

        return redirect()->route('patrons.index');
    }
}
