<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Comment;
use Exception;
use Illuminate\Http\Request;


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
    public function store(Request $request)
    {
        $messages = [
            'description.required' => 'متن نظر نمیتواند خالی باشد',
        ];
        $validatedData = $request->validate([
            'description' => 'required',
        ], $messages);
        $comment = new Comment();
        try {
            $comment->create($request->all());
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            // return redirect(route('products.index'))->with('warning', $result);
            return redirect()->back()->with('warning', $result);
        }
        $result = 'محصول مورد نظر با موفقیت اضافه شد.';
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
}
