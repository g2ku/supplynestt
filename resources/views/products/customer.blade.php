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
                top: 35px;
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
                font-size: 25px;
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

            .customer
            {
                text-decoration: none;
                margin-left: 70px;
                color: #b0b0b0;
            }
            .box
            {
                width: 100%;
                height: 585px;
                background-color: rgba(168, 168, 168, 0.42);
                position: absolute;
                top: 120px;
            }
            .customer_service
            {
                font-size: 60px;
                font-family: Nunito, sans-serif;
                font-weight: bold;
                margin-top: 50px;
                text-align: center;
            }
            .all-href
            {
                text-decoration: none;
                color: white;
                font-size: 40px;
                text-align: center;
            }
            .href_about
            {
                display: flex;
                flex-direction: column;
                margin-top: 100px;
            }
        </style>

        <a href="{{route('products.index')}}" class="supplynest">SupplyNest</a>

        <div class="links-header">
            <a href="{{route('products.about')}}" class="about_us_header">About Us</a>
            <a href="{{route('products.search')}}" class="products">Products</a>
            <a href="{{route('products.trending')}}" class="trend">Trending</a>
            <a href="{{route('products.customer')}}" class="customer">Customer Service</a>
        </div>


        <div class="box">
            <p class="customer_service">Customer Service</p>
            <p></p>
            <form class="href_about">
                <p class="all-href">Contact Us: +1234567890</p>
                <p class="all-href">Delivery: yl.Stepalon 45a</p>
            </form>
        </div>
