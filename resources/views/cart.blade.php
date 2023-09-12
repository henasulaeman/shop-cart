<!-- menghubungkan dengan view template master -->
@extends('master')

@section('content')
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <h2 style="text-align: center;">LIST ITEMS</h2>
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php 
                        $datacart = session()->get('cart');   
                        $total = 0; 
                    ?>
                    @forelse ($cartItems as $item)

                    
                    <tr>
                        <td class="align-middle"><img src="asset/img/komputer.jpg" alt="" style="width: 50px;"> {{ $item['name'] }}</td>
                        <td class="align-middle">Rp {{ number_format($item['price']) }}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center quantity-input" value="{{ $item['quantity'] }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                       <td class="align-middle">
                        <form action="{{ '/cart/update' }}" method="POST">   
                            @csrf
                            <input type="hidden" name="id" value="{{ $item['quantity'] }}">
                            <input type="hidden" name="quantity" value="{{ $item['quantity'] }}"
                            <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></button>
                        </form>
                        <form action="{{ '/cart/remove' }}" method="POST">   
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </form>
                        </td>
                    </tr>
                    <?php 
                        //$total += $item['price']; 
                    ?>
                    @empty
                    <tr>
                        <td colspan="4">Tidak Ada Produk di dalam Cart</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">Rp {{ number_format(Cart::getTotal()) }}</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <a href="/checkout">
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
