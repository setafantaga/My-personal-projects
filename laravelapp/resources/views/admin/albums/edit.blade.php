<link rel="stylesheet" href="{{ asset('CSS/addAlbum.css') }}">
<x-layout>

    @section('content')
        
        <form action="{{ route('adminAlbumSection.update', $album->id) }}"method="POST" class="add">
            @csrf
            @method('PUT')
            
            <input type="text" class="add-text" name="user" placeholder="User" required value="admin"><br>
            @error('user')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <input type="text" class="add-text" name="title" placeholder="Title" value="{{ $album->title }}" required><br>
            @error('title')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror

            <input type="text" class="add-slug" name="slug" placeholder="Slug" value="{{ $album->slug }}" required><br>
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
            
            <input type="submit" class="contact-form-btn" value="Update">
        </form>

    @endsection

</x-layout>

