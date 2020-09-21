<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Movie Database</title>
</head>

<body class="bg-dark">

    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1 class="text-light">Movie Database</h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("movielist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("movielist")
            </section>
            <section class="col-md-5">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Add movie here</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="text-light">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name...">
                            </div>
                            <div class="form-group">
                                <label class="text-light">Release Date</label>
                                <input name="releaseDate" type="text" class="form-control" placeholder="Release Date...">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("movielist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("movielist")
            </section>
            <section class="col-md-5">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Update movie here</h5>
                        <form action="{{ url('/update/'.$movie->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="text-light">Name</label>
                                <input value="{{ $movie->name }}" name="name" type="text" class="form-control" placeholder="Name...">
                            </div>
                            <div class="form-group">
                                <label class="text-light">Release Date</label>
                                <input value="{{ $movie->releaseDate }}" name="releaseDate" type="text" class="form-control" placeholder="Release Date...">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>