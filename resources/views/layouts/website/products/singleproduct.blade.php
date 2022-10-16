@extends('layouts.base.baselayout')

@section('CSSPlace')
    <style>
        .xxxxxx {
            display: none;
        }

        .card img {
            height: 20vh !important;
        }

        .product {
            padding: 65px;
            border-radius: 20px;
            box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
        }

        @media screen and (min-width: 768px) {
            .otherproduct {
                padding-top: 9em;
            }
        }

        @media screen and (max-width: 767px) {
            .product-container {
                padding: 0 40px !important;
            }

            .product {
                padding: 25px;
                border-radius: 20px;
                box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
            }

            .container {
                background-color: '#eff0f5';
                margin-top: 6vh;
            }

            .row {
                gap: 50px;
            }

            .buy-now {
                width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container product-container">
        <div class="row product">
            <div class="col-md-6 text-center">
                <img src="{{ url('photos/' . $product->photo) }}" width="100%" />
            </div>
            <div class="col-md-6">
                <div id="product-detail">
                    <h2>
                        {{ $product->name }}
                    </h2>
                    <h3>
                        Rp. {{ number_format($product->price) }}
                    </h3>
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg text-white buy-now">Beli Sekarang</a>
            </div>
        </div>
    </div>
@endsection
