@extends('product.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
    body{
        background-color: black;
        opacity: 0.8;
       
    }
    .icons{
        padding:10px;
    }
   </style>

</head>
<body>
    

    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4><a href="landing"><img style="width: 200px;"  src="https://i.ibb.co/r5krrdz/logo.png" alt="" /></a></h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary " href="{{ route('movies.create') }}"> 
                    Add New Movie
                </a>
            </div>
        </div>
    </div>

    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered  table-dark" style="margin-top: 20px;">
        <tr>
            <th>No</th>
            <th width="150px">movie image</th>
            <th width="150px">movie name</th>
            <th width="200px">movie genre</th>
            <th>movie description</th>
            <th width="220px">Action</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $movie->image }}" width="130px" height="180px;"></td>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->movie_genre }}</td>
                <td>{{ $movie->movie_description }}</td>
                <td>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}"><img class="icons" src="images/eye (1).svg"></a>

                        <a class="btn btn-success" href="{{ route('movies.edit', $movie->id) }}"><img class="icons" src="images/pen (1).svg"></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><img class="icons" src="images/trash (1).svg"></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $movies->links() !!}





    

@endsection
