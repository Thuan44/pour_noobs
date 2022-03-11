<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function createOrGetCart($userID)
    {
        $cart = new Cart;
        $cartCreation = false;

        if (!$cart->where('user_id', $userID)->exists()) {
            $cartCreation = true;
        }

        $cart = $cart->firstOrCreate(['user_id' => $userID]);

        if ($cartCreation) {
            return response($cart, 201);
        } else {
            return response($cart, 200);
        }
    }
}
