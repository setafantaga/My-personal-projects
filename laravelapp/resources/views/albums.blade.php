
<x-layout>

    @section('content')

        <form action="{{ route('search') }}" method="GET">
            <div class="search">
                <input type="text" class="searchTerm" name = 'search' placeholder="What are you looking for?">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
            </div>
        </form>

        {{-- the search results --}}
        {{-- <div class="container">
            @if(isset($details))
                <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample Album details</h2>
            @foreach($details as $album)
                {{ $album->title }}
                {{ $album->body }}
            @endforeach
            @endif
        </div> --}}


        <div class="content">
            <h1>Animals</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos aperiam dicta recusandae maxime. Sed illum dicta, soluta voluptas magni voluptates delectus enim dolorum impedit aliquam architecto laboriosam ratione eligendi! Asperiores eligendi rerum repellendus ex error doloremque quidem quo necessitatibus, reprehenderit praesentium, delectus assumenda dolore quae beatae repudiandae deleniti laborum amet, omnis illo tenetur quas natus esse iusto. Vel deserunt quae ipsam quos dolores molestiae sequi repellendus perspiciatis, tenetur quas, blanditiis, iure delectus! Ex dolor culpa veniam error et rem necessitatibus consequuntur optio eligendi amet reiciendis at aperiam, cupiditate cum dolorem fugiat! Quidem laborum sunt impedit ipsa, beatae est dicta labore nulla quae delectus repellat asperiores, corrupti fugiat consequuntur, quo vel corporis officiis aut reiciendis repudiandae voluptatum non! 
            </p>
        </div>
    
        <div class="animals">
            @foreach ($albums as $album)
                <div class="album album1">

                    <a href="albums/{{ $album->slug }}">{!! $album->title !!}</a>
                    
                    <p>{{ $album->excerpt }}</p>
                </div>
            @endforeach
        </div>

    @endsection    

</x-layout>

