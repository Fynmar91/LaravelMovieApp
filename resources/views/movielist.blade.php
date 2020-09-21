<div class="card bg-dark text-white mb-3">
    <div class="card-body">
        <h5 class="card-title">List of all movies</h5>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Release Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->releaseDate }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ url('/edit/'.$movie->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('/delete/'.$movie->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>