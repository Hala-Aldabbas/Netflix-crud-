@extends('product.layout')

@section('content')
    <div class="row" style="margin-top: 20px;margin:auto">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Edit Movie</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="w-50 " action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data"
        style="margin-top: 20px; margin:auto ">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>movie name:</strong>
                    <input type="text" name="movie_name" value="{{ $movie->movie_name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>movie genre:</strong>
                    <input type="text" name="movie_genre" value="{{ $movie->movie_genre }}" class="form-control" placeholder="Name">
                </div>
            </div>
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>movie description:</strong>
                    <textarea class="form-control" style="height:150px" name="movie_description"
                        placeholder="Detail">{{ $movie->movie_description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>movie image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <br>
                    <img src="/images/{{ $movie->image }}" width="100px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>

    
@endsection
