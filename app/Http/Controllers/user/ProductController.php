<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\Favorite;
use App\Models\user\Product;
use App\Models\user\Rate;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::all();
        return view('user.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if(Auth::check()) {
            $favorites = Favorite::where('user_id', Auth::user()->id)->where('product_id', $product->id);
            if($favorites->count() == 0 ) {
                $favorites = null;
            }
        } else{
            $favorites = null;
        }
        if(Auth::check()) {
            $rate = Rate::where('user_id', Auth::user()->id)->where('product_id', $product->id)->get()->first();
        } else{
            $rate = null;
        }
        $images = explode(',', $product->images);
        $comments = $product->comments()->where('status', 1)->orderBy('id', 'DESC')->paginate(20);
        $number_of_comments = $comments->count();
        $sum = 0;
        foreach ($product->rates as $key => $rate) {
            $sum += $rate->rate;
        }
        $number_of_rates = $product->rates->count();
        if($number_of_rates == 0) {
            $rates_average = 0;
        } else {
            $rates_average = $sum / $number_of_rates;
        }
        return view('user.product', compact('product', 'comments', 'number_of_comments', 'favorites', 'rate', 'rates_average', 'number_of_rates', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addToBasket(Product $product)
    {
        $product->users()->attach(Auth::user()->id);
    }
}
