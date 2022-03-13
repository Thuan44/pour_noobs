<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cart_Course;
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

    public function addCourseToCart($cartID, $courseID)
    {
        $cart_course = new Cart_Course;
        $courseAlreadyIntoCart = false;
        if ($cart_course
            ->where('cart_id', $cartID)
            ->where('course_id', $courseID)->exists()
        ) {
            $courseAlreadyIntoCart = true;
        }

        $cart_course = $cart_course->firstOrCreate(['cart_id' => $cartID, 'course_id' => $courseID]);

        if ($courseAlreadyIntoCart) {
            return response($cart_course, 200);
        } else {
            return response($cart_course, 201);
        }
    }

    public function destroyCourseFromCart($cartID, $courseID)
    {
        $cart_course = Cart_Course::where('cart_id', $cartID)
            ->where('course_id', $courseID);

        if ($cart_course->exists()) {
            $cart_course->delete();
            return response(['message' => 'Course deleted successfully from cart'], 200);
        } else {
            return response(['message' => 'The course does not exist'], 404);
        }
    }

    public function getCartByID($cartID)
    {
        $cart = Cart::with('courses')->find($cartID);
        $courseNumber = Cart_Course::with('courses')->where('cart_id', $cartID)->count();

        return response([
            'cart' => $cart,
            'courseNumber' => $courseNumber
        ], 200);
    }
}
