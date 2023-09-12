<!-- menghubungkan dengan view template master -->
@extends('master')

@section('content')
 <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            
            <!-- Looping ambil data di database -->
            @forelse($item as $items)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ url('asset/img/' . $items->image) }}" alt="">

                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $items->namaitem }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{ "Kategori : ".$items->type }}</h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{ "/item_detail/". $items->iditem }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="{{ "/cart/".$items->iditem }}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
             @empty
        <div class="col-12 text-center">
            <h3>There are no item in this category.</h3>
        </div>
            @endforelse

        </div>
    </div>
    <!-- Products End -->
@endsection