@extends('base')


@section('content')

<<<<<<< HEAD
    <style>
        .supplynest
        {
            text-align: center;
            font-size: 30px;
            color: #ffa600;
            display: flex;
            justify-content: flex-start;
            position: absolute;
            top: 50px;
            text-decoration: none;
        }
        * {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        :root {
            font-size: calc(16px + (24 - 16)*(100vw - 320px)/(1920 - 320));
        }
        body, button, input {
            font: 1em Hind, sans-serif;
            line-height: 1.5em;
        }
        body, input {
            color: #171717;
        }
        body, .search-bar {
            display: flex;
        }
        body {
            background: #f1f1f1;
            height: 100vh;
        }
        .search-bar input,
        .search-btn,
        .search-btn:before,
        .search-btn:after {
            transition: all 0.25s ease-out;
        }
        .search-bar input,
        .search-btn {
            width: 3em;
            height: 3em;
        }
        .search-bar input:invalid:not(:focus),
        .search-btn {
            cursor: pointer;
        }
        .search-bar,
        .search-bar input:focus,
        .search-bar input:valid  {
            width: 100%;
        }
        .search-bar input:focus,
        .search-bar input:not(:focus) + .search-btn:focus {
            outline: transparent;
        }
        .search-bar {
            margin: auto;
            padding: 1.5em;
            justify-content: center;
            max-width: 30em;
        }
        .search-bar input {
            background: transparent;
            border-radius: 1.5em;
            box-shadow: 0 0 0 0.4em #171717 inset;
            padding: 0.75em;
            transform: translate(0.5em,0.5em) scale(0.5);
            transform-origin: 100% 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .search-bar input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        .search-bar input:focus,
        .search-bar input:valid {
            background: #fff;
            border-radius: 0.375em 0 0 0.375em;
            box-shadow: 0 0 0 0.1em #d9d9d9 inset;
            transform: scale(1);
        }
        .search-btn {
            background: #171717;
            border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
            padding: 0.75em;
            position: relative;
            transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
            transform-origin: 0 50%;
        }
        .search-btn:before,
        .search-btn:after {
            content: "";
            display: block;
            opacity: 0;
            position: absolute;
        }
        .search-btn:before {
            border-radius: 50%;
            box-shadow: 0 0 0 0.2em #f1f1f1 inset;
            top: 0.75em;
            left: 0.75em;
            width: 1.2em;
            height: 1.2em;
        }
        .search-btn:after {
            background: #f1f1f1;
            border-radius: 0 0.25em 0.25em 0;
            top: 51%;
            left: 51%;
            width: 0.75em;
            height: 0.25em;
            transform: translate(0.2em,0) rotate(45deg);
            transform-origin: 0 50%;
        }
        .search-btn span {
            display: inline-block;
            overflow: hidden;
            width: 1px;
            height: 1px;
        }
=======
    <div style="padding-bottom: 30px;">
        <div class="row-cols-2">
            <a href="{{route('products.index')}}" type="text" class="home">
                Home
            </a>

        </div>
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566

        /* Active state */
        .search-bar input:focus + .search-btn,
        .search-bar input:valid + .search-btn {
            background: #2762f3;
            border-radius: 0 0.375em 0.375em 0;
            transform: scale(1);
        }
        .search-bar input:focus + .search-btn:before,
        .search-bar input:focus + .search-btn:after,
        .search-bar input:valid + .search-btn:before,
        .search-bar input:valid + .search-btn:after {
            opacity: 1;
        }
        .search-bar input:focus + .search-btn:hover,
        .search-bar input:valid + .search-btn:hover,
        .search-bar input:valid:not(:focus) + .search-btn:focus {
            background: #0c48db;
        }
        .search-bar input:focus + .search-btn:active,
        .search-bar input:valid + .search-btn:active {
            transform: translateY(1px);
        }

        @media screen and (prefers-color-scheme: dark) {
            body, input {
                color: #f1f1f1;
            }
<<<<<<< HEAD
            body {
                background: #ffffff;
            }
            .search-bar input {
                box-shadow: 0 0 0 0.4em #000000 inset;
            }
            .search-bar input:focus,
            .search-bar input:valid {
                background: #3d3d3d;
                box-shadow: 0 0 0 0.1em #3d3d3d inset;
            }
            .search-btn {
                background: #000000;
            }
        }
        .search-bar
        {
            position: absolute;
            top: 10px;
            left: 450px;
        }
        .links-header
        {
            margin-left: 350px;
            margin-top: 20px;
            position: absolute;
            top: 30px;
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
        .header_png
        {
            width: 1285px;
            height: 500px;
            margin-top: 30px;
            position: absolute;
            top: 170px;
        }
        .img_header
        {
            color: black;
            position: absolute;
            top: 300px;
            padding: 50px;
            background-color: rgba(255, 255, 255, 0.41);
            width: 1400px;
            height: 600px;
        }
        .main_img_txt
        {
            font-size: 60px;
            width: 600px;
            line-height: 0.8;
            text-align: center;
            margin-left: 280px;
            color: #000000;
            font-weight: bold;
        }

        .product_img
        {
            position: absolute;
            top:970px;
            display: flex;
            flex-direction: row;
            margin-left: 80px;
            color: black;
        }
        .txt_products
        {
            font-size: 60px;
            color: black;
            position: absolute;
            top: 750px;
            left: 650px;
        }
        .flours
        {
            margin-left: 10px;
        }
        .cereal
        {
            margin-left: 130px;
        }
        .pasta
        {
            margin-left: 130px;
        }
        .spices
        {
            margin-left: 130px;
        }
        .legumes
        {
            margin-left: 130px;
        }
        .dry-fruits
        {
            margin-left: 130px;
        }
        .box-cereal
        {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
            left: 180px;
        }
        .box-dry-fruits
        {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
            right: 1px;
        }
        .box-flours
        {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
        }
        .box-legumes
        {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
            left: 765px;
        }
        .box-pasta
        {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
            left: 370px;
        }
        .box-spices {
            width: 100px;
            background-color: rgb(255, 255, 255);
            height: 100px;
            position: absolute;
            bottom: 70px;
            left: 560px;
        }
        .all-about_us
        {
            position: absolute;
            top: 1100px;
            left: 250px;
        }
        .box-about
        {
            width: 500px;
            height: 400px;
            background-color: #525252;
        }
        .about_us
        {
            position: absolute;
            top: 70px;
            left: 580px;
            color: black;
            font-size: 60px;
            width: 100%;
        }
        .lorem-about
        {
            position: absolute;
            top: 160px;
            left: 580px;
            color: #575757;
            font-size: 40px;
            width: 80%;
            word-spacing: 5px;
        }
        .box_brands
        {
            width: 85%;
            height: 400px;
            background-color: #b7b7b7;
            position: absolute;
            top: 1600px;
            display: flex;
            flex-direction: row;
        }
        .circle-brands
        {
            margin-left: 130px;
            margin-top: 180px;
        }
        .many_brands
        {
            font-size: 60px;
            color: #2f2f2f;
            position: absolute;
            top: 1670px;
            left: 450px;
        }
        .circle-wait
        {
            width: 25px;
            background-color: rgba(107, 107, 107, 0.36);
            height: 25px;
            border-radius: 50%;
            margin-left: 5px;
            margin-top: 260px;
        }
        .circle-wait1
        {
            width: 25px;
            background-color: rgba(65, 65, 65, 0.36);
            height: 25px;
            border-radius: 50%;
            margin-left: 5px;
            margin-top: 260px;
        }
        .wait_form
        {
            display: flex;
            flex-direction: row;
            position: absolute;
            top: 1690px;
            left: 690px;
        }
        .advantages_all
        {
            display: flex;
            flex-direction: row;
            position: absolute;
            top: 1950px;
            left: 100px;
        }
        .ad_txt
        {
            display: flex;
            flex-direction: row;
            position: absolute;
            top: 300px;
            color: black;
            margin-left: 180px;
            font-size: 28px;
            text-align: center;
        }
        .quality_ad
        {

        }
        .fastdel_ad
        {
            margin-left: 170px;
        }
        .safepay_ad
        {
            margin-left: 170px;
        }
        .costum_ad
        {
            margin-left: 160px;
        }
        .circle-ad
        {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-left: 170px;
            margin-top: 180px;
        }
        .ad_lorem
        {
            position: absolute;
            top: 380px;
            left: 60px;
            display: flex;
            flex-direction: row;
            color: rgba(110, 110, 110, 0.36);
        }
        .lorem_txt_ad
        {
            width: 20%;
            text-align: center;
            margin-left: 60px;
        }
        .lorem_txt_ad3
        {
            width: 20%;
            text-align: center;
            margin-left: 60px;
        }
        .lorem_txt_ad4
        {
            width: 20%;
            text-align: center;
            margin-left: 80px;
            position: absolute;
            top: 1px;
            left: 780px;
        }
        .footer_box
        {
            width: 99.9%;
            height: 400px;
            background-color: #7c7c7c;
            position: absolute;
            top: 2500px;
            left: 1px;
        }
        .about_footer
        {
            font-size: 30px;

        }
        .href_about
        {
            display: flex;
            flex-direction: column;

        }
        .all-href
        {
            text-decoration: none;
            color: white;

        }
        .all-about-footer
        {
            position: absolute;
            left: 100px;
            top: 70px;
        }
        .all-costumer-footer
        {
            position: absolute;
            left: 400px;
            top: 70px;
        }
        .all-subscribe-footer
        {
            position: absolute;
            left: 1000px;
            top: 70px;
        }

        .main_img
        {
            margin-left: 120px;
            width: 1000px;
            height: 500px;
        }
        .muka
        {
            width: 100px;
        }
        .zerno
        {
            width: 110px;
        }
        .poloski
        {
            width: 100px;
        }
        .img_about
        {
            width: 500px;
        }
        .mastercard
        {
            width: 120px;
        }
        .amazon
        {
            margin-top: 40px;
            width: 140px;
        }
        .coca-cola
        {
            width: 150px;
            margin-top: 30px;
        }
        .uniliver
        {
            width: 180px;
            margin-top: 30px;
        }

    </style>


    <a href="{{route('products.index')}}" class="supplynest">SupplyNest</a>

    <div class="links-header">
        <a href="{{route('products.about')}}" class="about_us_header">About Us</a>
        <a href="{{route('products.search')}}" class="products">Products</a>
        <a href="{{route('products.trending')}}" class="trend">Trending</a>
        <a href="{{route('products.customer')}}" class="customer">Customer Service</a>
=======
        </style>

        <h1>All products</h1>
        <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary">
            Add product
        </a>
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566
    </div>
    <div class="header_png"><img src="https://img.freepik.com/premium-photo/group-of-diverse-occupation-people-smile_333547-13644.jpghttps://img.freepik.com/premium-vector/a-group-of-people-in-different-professions_36082-609.jpg?w=2000"
         class="main_img"></div>
    <div class="img_header">
        <p class="main_img_txt">SupplyNest Quarantee of Quality For People</p>

    </div>
        <p class="txt_products">Products</p>
    <div class="product_img">
        <div class="box-flours"><img class="muka" src="data:image/png;base64,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"></div>
        <p class="flours">Flours</p>
        <div class="box-cereal"><img class="zerno" src="data:image/png;base64,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"></div>
        <p class="cereal">Cereal</p>
        <div class="box-pasta"><img src="data:image/png;base64,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"></div>
        <p class="pasta">Pasta</p>
        <div class="box-spices"><img src="data:image/png;base64,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"></div>
        <p class="spices">Spices</p>
        <div class="box-legumes"><img src="data:image/png;base64,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"></div>
        <p class="legumes">Legumes</p>
        <div class="box-dry-fruits"><img class="poloski" src="data:image/png;base64,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"></div>
        <p class="dry-fruits">Dry Fruits</p>
    </div>
    <div class="all-about_us">
        <p class="about_us">About us</p>
        <div class="box-about"><img class="img_about" src="https://img.freepik.com/premium-photo/group-of-diverse-occupation-people_53876-68235.jpg"></div>
        <p class="lorem-about">SupplyNest company give you chance fast and safe buy product</p>
    </div>
    <div class="box_brands">
        <div class="circle-brands"><img class="mastercard" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/989px-Mastercard-logo.svg.png"></div>
        <div class="circle-brands"><img class="amazon" src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"></div>
        <div class="circle-brands"><img class="coca-cola" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Coca-Cola_logo.svg/2560px-Coca-Cola_logo.svg.png"></div>
        <div class="circle-brands"><img class="uniliver" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Unilever_logo.png/1198px-Unilever_logo.png"></div>
    </div>
    <div class="wait_form">
        <div class="circle-wait1"></div>
        <div class="circle-wait"></div>
        <div class="circle-wait"></div>
    </div>
    <p class="many_brands">Many brands await you</p>

    <div class="advantages_all">
        <div class="circle-ad"><img src="data:image/png;base64,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"></div>
        <div class="circle-ad"><img src="data:image/png;base64,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"></div>
        <div class="circle-ad"><img src="data:image/png;base64,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"></div>
        <div class="circle-ad"><img src="data:image/png;base64,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"></div>
        <div class="ad_txt">
            <p class="quality_ad">Quality</p>
            <p class="fastdel_ad">Fast delivery</p>
            <p class="safepay_ad">Safe Payment</p>
            <p class="costum_ad">Costumer Service</p>
        </div>
        <div class="ad_lorem">
            <p class="lorem_txt_ad">We give you 100% quality of products
            </p>
            <p class="lorem_txt_ad">We have personal auto delivery
            </p>
            <p class="lorem_txt_ad3">You money safe and you can repost return
            </p>
            <p class="lorem_txt_ad4">We service very friendly and support you
            </p>
        </div>
    </div>
    <footer>
        <div class="footer_box">
            <div class="all-about-footer">
                <p class="about_footer">About Us</p>
                <form class="href_about">
                    <a href="#" class="all-href">Loyality</a>
                    <a href="#" class="all-href">Privacy&Policy</a>
                    <a href="#" class="all-href">Terms & Conditions</a>
                    <a href="#" class="all-href">Where to buy</a>
                    <a href="#" class="all-href">Shipping Policy</a>
                    <a href="#" class="all-href">Refund Policy</a>
                    <a href="#" class="all-href">Terms of Service</a>
                </form>
            </div>
            <div class="all-costumer-footer">
                <p class="about_footer">Costumer Service</p>
                <form class="href_about">
                    <a href="#" class="all-href">Costumer Service</a>
                    <a href="#" class="all-href">Contact Us</a>
                    <a href="#" class="all-href">Delivery</a>
                    <a href="#" class="all-href">Frequently Asked Questions</a>
                </form>
            </div>
            <div class="all-subscribe-footer">
                <p class="about_footer">Subscribe</p>
                <form action="{{ route('send.email') }}" method="post" class="href_about">
                    <p>Sign Up for our newsletter</p>
                    @csrf
                    <input class="email-name" type="text" name="name" placeholder="Ваше имя" required>
                    <input class="email" type="email" name="email" placeholder="Ваш email" required>
                    <textarea class="email-text" name="message" placeholder="Ваше сообщение" required></textarea>
                    <button class="email-btn" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </footer>

<<<<<<< HEAD

=======
    <table class="table" style="padding-top: 30px">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>
                    <a href="{{route('products.show', ['product' => $product])}}">
                        {{$product->name}}
                    </a>
                </td>
                <td>
                    {{$products->price}}
                </td>

                <td>
                        {{$product->description}}
                </td>
                <td>
                    <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-outline-primary">
                        Edit
                    </a>
                    <form method="post" action="{{route('products.destroy', ['product' => $product])}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
>>>>>>> 146d422246fe7748a0a67dd9c732847a8efcd566


@endsection
