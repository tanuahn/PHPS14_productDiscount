<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 18/02/19
 * Time: 09:34
 */

namespace App\Http\Controllers;


class ProductController
{
    public function index(Request $request){
        $description = $request->description;
        $price = $request->price;
        $discount_percent = $request->discount_percent;
        $discount_amount = ($price * $discount_percent) / 100;
        $discount_price = $price - $discount_amount;
        return view('discount', compact('description','price','discount_percent','discount_amount','discount_price'));
    }
}