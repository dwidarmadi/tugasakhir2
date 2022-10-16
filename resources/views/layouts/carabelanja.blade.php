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
            <table>
                <thead>
                    <tr>
                        <th>1.</th>
                        <td>Lakukan proses pendaftaran dengan klik tombol <b>Daftar</b> untuk pembeli yang belum mempunyai
                            akun.</td>
                    </tr>
                    <tr>
                        <th>2.</th>
                        <td>Bagi pembeli yang sudah mempunyai akun silakan masuk ke sistem penjualan Kain Tenun Songket
                            dengan klik tombol <b>Masuk</b>.</td>
                    </tr>
                    <tr>
                        <th>3.</th>
                        <td>Pilihlah produk yang ingin dibeli.</td>
                    </tr>
                    <tr>
                        <th>4.</th>
                        <td>Produk akan masuk kedalam keranjang belanja.</td>
                    </tr>
                    <tr>
                        <th>5.</th>
                        <td>Klik bayar untuk membeli produk.</td>
                    </tr>
                    <tr>
                        <th>6.</th>
                        <td>Isilah data yang diperlukan saat check out, kemudian klik tombol <b>Proses Pesanan</b>.</td>
                    </tr>
                    <tr>
                        <th>7.</th>
                        <td>Transfer ke bank yang sudah dipilih.</td>
                    </tr>
                    <tr>
                        <th>8.</th>
                        <td>Upload bukti pembayaran anda.</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
