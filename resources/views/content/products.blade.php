@extends('layout.layout')

@section('content')
    {{--slide--}}
    <style>

    </style>
    <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner text-black">
            <div class="carousel-item active ">
                <img src="{{asset('slide/s1.jpg')}}" style="height:400px" class="w-12 d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-black">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item text-black">
                <img src="{{asset('slide/s2.jpg')}}" style="height:400px" class="d-block w-100" alt="...">
                <div class="carousel-caption text-black d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('slide/s3.jpg')}}"  style="height:400px"class="d-block w-100 " alt="...">
                <div class="carousel-caption text-black d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
{{--hover--}}
    <style>
        /* Icon set - http://ionicons.com */
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
        @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

        .snip1268 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 210px;
            width: 100%;
            color: #333333;
            text-align: center;
            background-color: #ffffff;
            line-height: 1.6em;
        }

        .snip1268 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.6s ease;
            transition: all 0.6s ease;
        }

        .snip1268 .image {
            position: relative;
        }

        .snip1268 img {
            max-width: 100%;
            vertical-align: top;
            -webkit-transition: opacity 0.35s;
            transition: opacity 0.35s;
        }

        .snip1268 .icons,
        .snip1268 .add-to-cart {
            position: absolute;
            left: 20px;
            right: 20px;
            opacity: 0;
        }

        .snip1268 .icons {
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
            top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .snip1268 .icons a {
            width: 32.5%;
            background: #ffffff;
        }

        .snip1268 .icons a:hover {
            background: #000000;
        }

        .snip1268 .icons a:hover i {
            color: #ffffff;
            opacity: 1;
        }

        .snip1268 .icons i {
            line-height: 46px;
            font-size: 20px;
            color: #000000;
            text-align: center;
            opacity: 0.7;
            margin: 0;
        }

        .snip1268 .add-to-cart {
            position: absolute;
            bottom: 20px;
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
            font-size: 0.8em;
            color: #000000;
            line-height: 46px;
            letter-spacing: 1.5px;
            background-color: #ffffff;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
        }

        .snip1268 .add-to-cart:hover {
            background: #000000;
            color: #ffffff;
        }

        .snip1268 figcaption {
            padding: 20px 20px 30px;
        }

        .snip1268 h2,
        .snip1268 p {
            margin: 0;
            text-align: left;
        }

        .snip1268 h2 {
            margin-bottom: 10px;
            font-weight: 700;
        }

        .snip1268 p {
            margin-bottom: 15px;
            font-size: 0.85em;
            font-weight: 500;
        }

        .snip1268 .price {
            font-size: 1.3em;
            opacity: 0.5;
            font-weight: 700;
            text-align: right;
        }

        .snip1268:hover img,
        .snip1268.hover img {
            opacity: 0.8;
        }

        .snip1268:hover .icons,
        .snip1268.hover .icons,
        .snip1268:hover .add-to-cart,
        .snip1268.hover .add-to-cart {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }

    </style>
    <div class="container">
        <div class="row ml-2">
            @foreach ($products1 as $product)
                <figure class="snip1268">
                    <div class="image">
                        <a href="{{url("productDetail/$product->id") }}">

                            <img src="/image/products1/{{ $product->image }}" alt="sq-sample4"/>
                        </a>

                        <form class="add-to-cart" action="{{ route('cart.store') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="add-to-cart">Add To Cart</button>
                        </form>

                    </div>
                    <figcaption>
                        <h2>{{ $product->name }}</h2>
                        {{--    <p>My family is dysfunctional and my parents won't empower me. Consequently I'm not self actualized.</p>--}}
                        <div class="price">{{ $product->price }}</div>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
{{--    --}}
    <div class="container px-6 mx-auto mt-4 mb-8">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <a href="{{url('allProducts')}}"><h2 style="float: right" class="opacity-50">View All</h2></a>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products->take(4) as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md"style="width:80%;>
                    <a href="{{url("productDetail/$product->id") }}">
                        <img src="/image/{{ $product->image }}" alt="" class="w-full max-h-50">
                    </a>
                    <div class="flex items-end justify-end w-full bg-cover">
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>




    <!--slide-->
    <x-slider/>
    <!--endSlide -->





    {{--slide--}}
    <div class="container px-6 mx-auto mt-4 mb-8">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        <a href="{{url('allProducts1')}}"><h2 style="float: right" class="opacity-50">View All</h2></a>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products1->take(4) as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md"style="width:80%;>
                    <a href="{{url("productDetail/$product->id") }}">
                        <img src="/image/products1/{{ $product->image }}" alt="" class="w-full max-h-50">
                    </a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    {{--endslide2--}}
@endsection
