<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Comment;
use App\Models\user\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Product $product)
    {
        $messages = [
            'description.required' => 'متن نظر نمیتواند خالی باشد',
        ];
        $validatedData = $request->validate([
            'description' => 'required',
        ], $messages);
        $comment = new Comment();
        try {
            $comment->description = $request->description;
            $comment->user_id = Auth::user()->id;
            $comment->product_id = $product->id;
            $comment->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            // return redirect(route('products.index'))->with('warning', $result);
            return redirect()->back()->with('warning', $result);
        }
        $result = 'نظر شما ثبت شد، بعد از تائید مدیر نمایش داده میشود.';
        // return redirect(route('products.index'))->with('success', $result);
        return redirect()->back()->with('success', $result);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function like(Comment $comment)
    {
        $comment->increment('like');
        return back();
    }

    public function dislike(Comment $comment)
    {
        $comment->increment('dislike');
        return back();
    }
}
