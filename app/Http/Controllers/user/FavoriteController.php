<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $favorite = new Favorite;
        $favorite->user_id = Auth::user()->id;
        $favorite->product_id = $request->input('product_id');
        $favorite->save();

        // return response()->json([]);
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
     * @param  \App\Http\Requests\StoreFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavoriteRequest  $request
     * @param  \App\Models\user\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
    public function checkLog()
    {
        if (!(Auth::check())) {
            return redirect('/login');
        }    
    }
    public function setFavorite(Request $request)
    {
        if (!(Auth::check())) {
            ?>
            <script>alert('test');</script>
            <?php
        }else {
            $favorite = new Favorite;
            $favorite->user_id = Auth::user()->id;
            $favorite->product_id = $request->input('product_id');
            $favorite->save();
        }
    }
    
    public function deleteFavorite(Request $request)
    {
        $favorite = Favorite::where('user_id', Auth::user()->id)->where('product_id', $request->input('product_id'));
        $favorite->delete();
    }

}
