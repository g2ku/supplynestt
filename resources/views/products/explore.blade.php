@extends('base')

@section('content')


    <a href="{{route('products.index')}}" type="text" class="home">
        Home
    </a>
    <p class="soon">SOON..</p>


    <style>
        .soon
        {
            font-size: 200px;
            text-align: center;
        }
        .home
        {
            text-decoration: none;
            color: black;
            font-size: 22px;
            margin-bottom: 40px;
        }
    </style>

@endsection
