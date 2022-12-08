<link rel="stylesheet" href="{{ asset('CSS/admin.css') }}">
<x-layout>

    @section('content')
        <div class="table">
            <div class="table_header">
                <a href="{{ route('admin/albums/index') }}">
                    <input type="submit" value="Add animal" />
                </a>
                <p> Albums details </p>
                <p> Searchul ala... </p>
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
                                <a href="{{ route('admin.albums.edit', $album->id) }}" title="Edit album"><button><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                <form action="{{ route('admin.albums.destroy', $album->id) }}" method="post">
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

        <div class="pagination">
            <a href="admin.albums.index">
                <input type="submit" value="Animal page" />
        </a>
        <a href="admin.user.index">
            <input type="submit" value="user page" />
        </a>
        </div>
    </div>

    @endsection

</x-layout>

