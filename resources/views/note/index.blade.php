@extends('layouts.app')

@section('content')
<a href="{{route('note.create')}}" style="color: red;">created new note</a>
<ul>
    @forelse ($notes as $note)
   
    <li>
        <a href="{{route('note.show', $note->id )}}"  style="color: rgb(255, 255, 255);" > {{$note->title}} </a> 
        <a href="{{route('note.edit', $note->id )}}" style="color: red;" > editar </a> 
        <form method="POST" action="{{route('note.destroy', $note->id ) }}">
            @csrf
            @method('DELETE')
            <button type="submit" value="DELETE">delete  </button>
        </form>
    </li>
    @empty
        <p>no data</p>
    @endforelse
</ul>
@endsection
