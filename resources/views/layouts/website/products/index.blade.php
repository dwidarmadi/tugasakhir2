@extends('consument/components/baselayout')

@section('CSSPlace')
    <style>
        .card img {
            height: 30vh !important;
        }
    </style>
@endsection

@section('content')
    @include('consument/components/navbar')
@endsection

@section('dataproduct')
    @foreach ($barangs as $brg => $barang)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{ url('files/' . $barang->barang_details[0]->photos) }}">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $barang->name }}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>Rp. {{ number_format($barang->price) }}</h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('public.singleproduct', $barang->id) }}" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-eye text-primary mr-1"></i>View
                        Detail</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
