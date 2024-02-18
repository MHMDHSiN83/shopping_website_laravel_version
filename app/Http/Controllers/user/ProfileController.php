<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Exception;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profile.profile');

    }
    public function basket()
    {
        $products = Auth::user()->products;
        $number_of_products = $products->count();
        $total_price = 0;
        foreach ($products as $product)
        {
            $total_price += $product->price;
        }
        $total_price = strval($total_price);
        return view('user.profile.basket', compact('products', 'number_of_products', 'total_price'));

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
    public function show()
    {

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
    public function update(Request $request, User $user)
    {
        $messages = [
            'email.email' => 'ایمیل را به شکل درست وارد کنید',
        ];
        $validatedData = $request->validate([
            'email' => 'email',
        ], $messages);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        if(is_phone_number($request->phone_number)) {
            $user->phone_number = $request->phone_number;
        } else {
            $result = 'لطفا تلفن همراه را درست وارد نمایید';
            return redirect(route('user.profile'))->with('warning', $result);
        }
        try {
            $user->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            return redirect(route('user.profile'))->with('warning', $result);
        }
        $result = 'تغییرات مورد نظر با موفقیت اعمال شد.';
        return redirect(route('user.profile'))->with('success', $result);
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
}
