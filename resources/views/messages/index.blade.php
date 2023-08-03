@extends('layouts.app')

@section('content')
<h2>Messages</h2>
<ul class="list-unstyled">
    @foreach($messages as $message)
        <li class="mt-3 mb-3">
            <div class="message-container mb-3">
              <span>{{ $message->title }}</span> - <span>{{ $message->content }}</span>
            </div>            
            <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-primary me-2">Edit</a>
            <button class="btn btn-primary deleteBtn" data-id="{{ $message->id }}">Delete</button>
        </li>
    @endforeach
</ul>

<a href="{{ route('messages.create') }}" class="btn btn-primary mt-3">Create New Message</a>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('.deleteBtn').click(function () {
                let messageId = $(this).data('id');
                let listItem = $(this).parent();

                $.ajax({
                    type: 'DELETE',
                    url: '/api/messages/' + messageId,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function () {
                        listItem.remove();
                        console.log('Message deleted successfully');
                    },
                    error: function (error) {
                        console.error('Error deleting message:', error.responseJSON);
                    }
                });
            });
        });
    </script>
@endsection
