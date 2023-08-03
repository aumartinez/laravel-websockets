@extends('layouts.app')

@section('content')
<h2>Edit Message</h2>

<form id="editMessageForm" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $message->title }}" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" required>{{ $message->content }}</textarea>
    </div>
    <button type="button" id="submitBtn" class="btn btn-primary mt-3">Update</button>
</form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#submitBtn').click(function () {
                let formData = $('#editMessageForm').serialize();

                $.ajax({
                    type: 'PUT',
                    url: '/api/messages/{{ $message->id }}',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        // Handle the response data if necessary
                        console.log('Message updated successfully:', data);
                        // For example, you could redirect to the messages index page:
                        window.location.href = '/messages';
                    },
                    error: function (error) {
                        // Handle the error if necessary
                        console.error('Error updating message:', error.responseJSON);
                    }
                });
            });
        });
    </script>
@endsection
