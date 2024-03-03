<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteResquest; //validaciones


class NotesController extends Controller
{
    
public function index () :View
{
    $notes = Note::all();
    return view('note.index', compact('notes'));
}

public function create (){
    return view('note.create');
}

public function store (NoteResquest $request) :RedirectResponse

    {
    Note :: create([
        'title' => $request->title,
        'description' => $request->description
        
    ]);

    return redirect()->route('note.index');
}

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));{

    }

    }

    public function update (Request $request, Note $note){
       
        $note->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect( )->route('note.index');
    
    }

    public function show (Note $note){
        return view('note.show', compact('note'));
    }

    public function destroy ( Request $request, Note $note){
        $note->delete();
        return redirect()->route('note.index');
    }

}
