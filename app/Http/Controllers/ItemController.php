<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Item;
use Gloudemans\Shoppingcart\Facades\Cart;

class ItemController extends Controller
{

    public function getItems()
    {
        $items = Item::all();
        return view('welcome', compact('items'));
    }

    public function getItemsInCart()
    {
        $cart = Cart::content();
        return view('cart.content', compact('cart'));
    }

    public function addItem($id)
    {
        $item = Item::find($id);
        Cart::add($item->id, $item->name, 1, $item->price);
        return redirect()->back();
    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function checkout()
    {
        $cart = Cart::content();
        $total = Cart::total();
        return view('cart.checkout', compact('cart', 'total'));
    }
}
