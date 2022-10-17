@extends('product.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
   
   </style>
</head>
<body>
    

    {{-- <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Movie Details</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;text-align: center;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>movie name:</strong><br>
                {{$movie->movie_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>movie genre:</strong><br>
                {{ $product->movie_genre }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>movie description:</strong><br>
                {{ $product->movie_description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>movie image:</strong><br>
                <img src="/images/{{ $product->image }}" width="200px">
            </div>
        </div>
    </div> --}}

    <div class="card  w-25" style="width: 25rem; margin:auto;margin-top:50px ">
           <div class="card-body">
          {{-- <h5 class="card-title">movie name</h5> --}}
          <h4 class="card-text text-center"><b>{{$movie->movie_name }}</b></h4>
        </div>
        <img src="/images/{{$movie->image }}" height="450px">
     
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>{{$movie->movie_genre }}</b></li>
          <li class="list-group-item">{{$movie->movie_description }}</li>
          {{-- <li class="list-group-item">A third item</li> --}}
        </ul>
        <div class="card-body" >
          <a href="{{ route('movies.index') }}" class="btn btn-primary">Back to movies</a>
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>


@endsection
