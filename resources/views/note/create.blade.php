@extends('layouts.app')

@section('content')

<a href="{{ route('note.index') }}">back</a>
<form method="POST" action="{{ route('note.store') }}">
  @csrf
  <label>title: </label>
  <input type="text" name="title"/>
  @error('title')
    <p> {{ $message }}</p>
  @enderror

  <label>description: </label>
  <input type="text" name="description"/>
  @error('description')
    <p> {{ $message }}</p>
  @enderror

  <input type="submit" value="create" />
</form>
@endsection
