@extends('base')


@section('content')

    <style>
        *
        {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .supplynest
        {
            text-align: center;
            font-size: 30px;
            color: #ffa600;
            position: absolute;
            top: 25px;
            left: 25px;
            text-decoration: none;
            font-weight: bold;
        }
        .links-header
        {
            margin-left: 400px;
            margin-top: 10px;
            position: absolute;
            top: 30px;
            font-size: 20px;
        }
        .about_us_header
        {
            text-decoration: none;
            color: #b0b0b0;
        }
        .products
        {
            text-decoration: none;
            margin-left: 70px;
            color: #b0b0b0;
        }
        .trend
        {
            text-decoration: none;
            margin-left: 70px;
            color: #b0b0b0;
        }
        .sell
        {
            text-decoration: none;
            margin-left: 70px;
            color: #b0b0b0;
        }
        .customer
        {
            text-decoration: none;
            margin-left: 70px;
            color: #b0b0b0;
        }
        .top_products
        {
            position: absolute;
            top: 150px;
            left: 550px;
            font-size: 70px;
            font-weight: bold;
        }
        .doctor
        {
            display: flex;
            margin-left: 30vh;
            font-size: 20px;
            box-shadow: 1px 14px 17px rgba(0,0,0,0.5);
            margin-top: 20px;
        }


        .doctors-list
        {
            width: 85%;
            border-collapse: collapse;
        }
        .doctors-list tr {
            height: 50px;
        }
        .doctors-list td {
            padding: 10px;
            vertical-align: middle;
        }
        .name
        {
            width: 40%;
        }
        .cost
        {
            width: 30%;
            margin-left: 60vh;
        }
        .tag_doctors
        {
            width: 30%;
            margin-left: 10vh;
        }
        .info_profucts
        {
            text-decoration: none;
        }
    </style>

    <a href="{{route('products.index')}}" class="supplynest">SupplyNest</a>

    <div class="links-header">
        <a href="{{route('products.about')}}" class="about_us_header">About Us</a>
        <a href="{{route('products.search')}}" class="products">Products</a>
        <a href="{{route('products.trending')}}" class="trend">Trending</a>
        <a href="#" class="customer">Customer Service</a>
    </div>

    <p class="top_products">Top Products</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    @foreach ($products as $product)
        <table class="doctors-list">
            <tr class="doctor">
                <td class="name">
                    {{ $product->name }}
                </td>
                <td class="cost">{{ $product->products }}</td>
                <td class="tag_doctors">{{ $product->tag }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="info_profucts">
                        Инфо
                    </a>
                </td>
            </tr>
        </table>
    @endforeach
