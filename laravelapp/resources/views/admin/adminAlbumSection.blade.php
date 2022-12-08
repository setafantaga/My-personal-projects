<link rel="stylesheet" href="{{ asset('CSS/admin.css') }}">
<!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<x-layout>

    @section('content')
        <div class="table">
            <div class="table_header">
                <a href="{{ route('adminAlbumSection.create') }}">
                    <input type="submit" value="Add album" />
                </a>
                <p> Albums details </p>
                <form action="{{ route('search') }}" method="GET">
                    <div class="search">
                        <input type="text" class="searchTerm" name = 'search' placeholder="What are you looking for?">
                        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="table_section">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Excerpt</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($albums as $album)
                        <tr>
                            <td> {{ $album->id }} </td>
                            <td> {{ $album->title }} </td>
                            <td> {{ $album->slug }} </td>
                            <td> {{ $album->excerpt }} </td>
                            <td> {{ $album->body }} </td>
                            <td>
                                <a href="{{ route('adminAlbumSection.edit', $album->id) }}" title="Edit album"><button><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                <form action="{{ route('adminAlbumSection.destroy', $album->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $albums->links() }}

        <div class="pagination">
            <a href="adminAlbumSection">
                <input type="submit" value="Animal page" />
        </a>
        <a href="adminUserSection">
            <input type="submit" value="User page" />
        </a>
        </div>
    </div>

    @endsection

</x-layout>

