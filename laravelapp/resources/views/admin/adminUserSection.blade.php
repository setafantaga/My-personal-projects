<link rel="stylesheet" href="{{ asset('CSS/admin.css') }}">
<x-layout>

    @section('content')
        <div class="table">
            <div class="table_header">
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
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->username }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->password }} </td>
                            <td>
                                <form action="{{ route('adminUserSection.destroy', $user->id) }}" method="post">
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
        {{ $users->links() }}
        
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

