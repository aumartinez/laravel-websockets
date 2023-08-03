@extends('layouts.app')

@section('content')
<h2>Create New Message</h2>

<form id="createMessageForm" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" required></textarea>
    </div>
    <button type="button" id="submitBtn" class="btn btn-primary mt-3">Create</button>
</form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#submitBtn').click(function () {
                let formData = $('#createMessageForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '/api/messages',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        console.log('Message created successfully:', data);
                        window.location.href = '/messages';
                    },
                    error: function (error) {
                        console.error('Error creating message:', error.responseJSON);
                    }
                });
            });
        });
    </script>
@endsection
