<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function rateProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $rate = $request->input('rate');
        $user_id = Auth::user()->id;
        $existing_rate = Rate::where('product_id', $product_id)->where('user_id', $user_id)->get()->first();
        if(empty($existing_rate)) {
            $data = new Rate;
            $data->user_id = $user_id;
            $data->product_id = $product_id;
            $data->rate = $rate;
            $data->save();
        } else {
            $existing_rate->rate = $rate;
            $existing_rate->save();
        }
    }
}
