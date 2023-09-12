@extends('master')
@section('content')
<div class="container-fluid py-5">
    @foreach($item as $items_detail)
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                    <img class="w-100 h-100" src="{{ url('asset/img/' . $items_detail->image) }}" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{ $items_detail->namaitem }}</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
                <h3 class="font-weight-semi-bold mb-4">{{ "Rp. " . number_format($items_detail->harga) }}</h3>
            <p class="mb-4">Type: {{ $items_detail->type }}</p>
            <div class="d-flex align-items-center mb-4 pt-2">
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>  <a href="{{ "/cart/".$items_detail->iditem }}" class="btn btn-primary px-3"> Add To Cart</a> </button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
