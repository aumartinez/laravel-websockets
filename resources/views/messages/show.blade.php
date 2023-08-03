@extends('layouts.app')

@section('content')
<h2>{{ $message->title }}</h2>
<p>{{ $message->content }}</p>

<a href="{{ route('messages.edit', $message) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('messages.destroy', $message) }}" method="POST" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
