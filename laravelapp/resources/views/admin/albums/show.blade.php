<x-layout>
    @section('content')

    <article>
        <h1> {{ $album->title }} </h1>
        <p> {{ $album->slug }} </p>
        <h3> {{ $album->body }} </h3>
    </article>

    @endsection
</x-layout>