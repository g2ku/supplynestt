@extends('base')

@section('content')
    <a href="{{route('products.index')}}" type="text" class="home">
        Home
    </a>
    <a
        href="{{route('products.search')}}" class="home">Back
    </a>
    <style>
        .home
        {
            text-decoration: none;
            color: black;
            font-size: 22px;
            margin-bottom: 40px;
            margin-right: 10px;
        }
        .all-list
        {
            width: 100%;
            margin: 40px 60px;
            font-size: 20px;
        }
        .name
        {
            font-size: 40px;
            font-weight: bold;
        }
        .tag
        {
            font-size: 18px;
            font-weight: lighter;
        }
        .category
        {
            background-color: #ffd2a5;
            width: 160px;
            height: 25px;
            border-radius: 5%;
            opacity: 0.5;
            position: absolute;
            top: 245px;
        }
        .text-category
        {
            font-size: 15px;
            color: #af5700;
            font-weight: bolder;
            margin: 19px 10px;
        }
        .candidat
        {
            background-color: #a5cfff;
            width: 130px;
            height: 25px;
            border-radius: 5%;
            opacity: 0.5;
            position: absolute;
            top: 245px;
            left: 360px;
        }
        .text-candidat
        {
            font-size: 15px;
            color: #0055b9;
            font-weight: bolder;
            position: absolute;
            top: 245px;
            left: 370px;
        }
        .stazh
        {
            background-color: #d1a5ff;
            width: 110px;
            height: 25px;
            border-radius: 5%;
            opacity: 0.5;
            position: absolute;
            top: 245px;
            left: 540px;
        }
        .text-stazh
        {
            font-size: 15px;
            color: #27004d;
            font-weight: bolder;
            position: absolute;
            top: 245px;
            left: 550px;
        }
        .line
        {
            width: 70%;
            height: 1px;
            background-color: #e0e0e0;
        }
        .med_center
        {
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
        }
        .geo
        {
            font-size: 17px;
            font-weight: 500;
        }
        .status
        {
            color: #00a12c;
            font-size: 19px;
            font-weight: bold;
        }
        .priem
        {
            width: 5%;
            font-size: 20px;
        }
        .cost
        {
            font-size: 25px;
            color: #0059ff;
            font-weight: 500;
        }
        .children
        {
            font-size: 17px;
            font-weight: bold;
            color: #7e7e7e;
        }
        .children-yes
        {
            color: #22bd00;
            font-size: 19px;
            font-weight: bold;
        }
        .yo
        {
            margin-left: 10px;
            font-size: 19px;
        }
        .all-children
        {
            display: flex;
            flex-direction: row;
        }
        .viezd
        {
            font-size: 17px;
            font-weight: bold;
            color: #7e7e7e;
        }
        .viezd-no
        {
            font-size: 17px;
            font-weight: bold;
            color: #ff0000;
        }
        .all-viezd
        {
            position: absolute;
            left: 400px;
            bottom: 66px;
        }
        .phone
        {
            color: #001dff;
            font-size: 25px;
            font-weight: bold;
        }
        .graphic-raboty
        {
            font-size: 17px;
            color: #001dff;
        }
        .days
        {
            color: #306900;
            display: inline-block;
        }
        .about
        {
            font-size: 17px;
            color: #001dff;
        }
        .obrazavanie
        {
            font-size: 25px;
            font-weight: bold;
            margin-top: 20px;
        }
        .about-obraz
        {
            font-weight: lighter;
        }
        .course
        {
            font-size: 25px;
            font-weight: bold;
        }
        .about-course
        {
            font-weight: lighter;
        }
        .opit-raboty
        {
            font-size: 25px;
            font-weight: bold;
        }
        .about-opit
        {
            font-weight: lighter;
        }
        .operazies
        {
            font-size: 25px;
            font-weight: bold;
        }
        .about-opera
        {
            font-weight: lighter;
        }

    </style>
    <div class="all-list">
        <p class="name">{{ $product->name }}</p>
        <p class="tag">{{$product -> tag }}</p>
        <div class="all-category">
            <p class="text-category">Популярный Товар</p>
            <div class="category"></div>
            <p class="text-candidat">Хорошая Цена</p>
            <div class="candidat"></div>

<<<<<<< HEAD
        </div>
        <div class="line"></div>

        <a href="#" class="med_center">
            Apec Petrotechnic
        </a>
        <p class="geo">ул.Проспект Елорда, 24</p>
        <p class="status">Работает</p>
        <br>
        <p class="priem">Цена:</p>
        <p class="cost">{{$product -> products}} tg</p>
        <br>
        <p class="phone">{{$product->phone}}</p>
        <br>
        <div class="line"></div>
        <div>
            <p class="graphic-raboty">График работы</p>
            <p class="days">Пн-Пт</p>
            <p class="time">08:00-17:00</p>
        </div>
        <div class="line"></div>

    </div>
=======
    <h1>Name: {{ $product->name }}</h1>
    <p>Price:
        <?php
              if ($product->price == null)
              {
                  echo 'Price == 0';
              }else
              {
                  echo $product->price;
              }
              ?>
    </p>
    <p>Description: {{ $product->description }}</p>

    <br>
    <a href="{{route('home')}}" class="btn btn-default btn-sm">Back</a>|
            <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-primary btn-sm">Edit</a>
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566

@endsection
