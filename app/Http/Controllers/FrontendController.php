<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index (){
        return view ('index');
    }

    public function productsDetails (){
        return view ('products-details');
    }

    public function typeProducts (){
        return view ('type-products');
    }

    public function shop(){
        return view('shop');
    }

    public function returnProcess(){
        return view('return-process');
    }

    public function categoryProducts(){
        return view('category-products');
    }

    public function subcategoryProducts(){
        return view('subcategory-products');
    }
    public function viewCart(){
        return view('view-cart');
    }
    public function checkOut(){
        return view('checkout');
    }


    // Policy Functions

    public function privacyPolicy(){
        return view('privacy-policy');
    }
    public function termsConditions(){
        return view('terms-conditions');
    }
    public function refundPolicy(){
        return view('refund-policy');
    }
    public function paymentPolicy(){
        return view('payment-policy');
    }
    public function aboutUs(){
        return view('about-us');
    }

    public function contactUs(){
        return view('contact-us');
    }

}
