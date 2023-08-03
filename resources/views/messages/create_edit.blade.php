@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        @if(isset($message))
            Edit Message
        @else
            Create Message
        @endif
    </div>
    <div class="card-body">
        <form action="{{ isset($message) ? route('messages.update', $message) : route('messages.store') }}" method="post">
            @csrf
            @if(isset($message))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($message) ? $message->title : '' }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="4" required>{{ isset($message) ? $message->content : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($message) ? 'Update' : 'Create' }}</button>
        </form>
    </div>
</div>
@endsection
