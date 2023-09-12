<?php

namespace App\Http\Controllers;

use App\Models\table_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(){
        
       $cartItems = \Cart::getContent();
       return view('cart',compact('cartItems'));

       //dd($cartItems);
    }
    public function tambah_cart(Request $request,$iditem)
    {
        
        $produk = DB::select('SELECT * FROM table_items WHERE iditem= '.$iditem);
        // $cart =  $request->session()->get('cart');

       // echo $produk[0]->iditem;
      
        //  $cart[] = [
        //     'iditem'=>$produk[0]->iditem,
        //     'namaitem'=>$produk[0]->namaitem,
        //     'harga'   =>$produk[0]->harga,
        //     'jumlah'  =>1
        // ];
        \Cart::add([
            'id'=>$produk[0]->iditem,
            'name'=>$produk[0]->namaitem,
            'price'=>$produk[0]->harga,
            'quantity'=>1

        ]);
        //$request->session()->put('cart', $cart);
        //session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect('/cart');
    }

    public function updateCart(Request $request){
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        return redirect('/cart');
    }

    public function removeCart(Request $request){
        \Cart::remove($request->id);
        session()->flash('success','Item Berhasil di Delete');

        return redirect('/cart');
    
    }

    public function show(table_item $iditem)
    {
        //
        $post = table_item::findOrFail($iditem);
        return view('item_detail', compact('post'));
    }


}
