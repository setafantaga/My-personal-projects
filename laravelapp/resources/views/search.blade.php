<x-layout>
    @if($albums->isNotEmpty())
        @foreach ($albums as $album)
            <div class="post-list">
                <p>{{ $album->title }}</p>
                <p>{{ $album->excerpt }}</p> 
                <p>{{ $album->body }}</p> 
            </div>
        @endforeach
    @else 
        <div>
            <h2>No posts found</h2>
        </div>
    @endif
</x-layout>
