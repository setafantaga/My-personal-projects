<link rel="stylesheet" href="{{ asset('CSS/addAlbum.css') }}">
<x-layout>

    @section('content')

        <form action="{{ route('adminAlbumSection.store') }}" method="POST" class="add" enctype="multipart/form-data">
            @csrf
            <p>Add a new album</p>
            <input type="text" class="add-text" name="user" placeholder="User" required value="admin"><br>
            @error('user')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <input type="text" class="add-text" name="title" placeholder="Title" required><br>
            @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <input type="text" class="add-slug" name="slug" placeholder="Slug" required><br>
            @error('slug')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            
            <textarea name="excerpt" class="add-excerpt" cols="10" rows="4" placeholder="Excerpt" required></textarea> <br>
            @error('excerpt')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            
            <textarea name="body" class="add-body" cols="30" rows="10" placeholder="Body" required></textarea> <br>
            @error('body')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <input type="submit" class="contact-form-btn" value="Add">
        </form>

    @endsection

</x-layout>