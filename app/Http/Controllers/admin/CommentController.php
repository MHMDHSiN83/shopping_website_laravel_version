<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Comment;
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
        $comments = Comment::orderBy('id', 'DESC')->paginate(10);
        return view('admin.comments.index', compact('comments'));
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
    public function show($id)
    {
        //
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
    public function destroy(Comment $comment)
    {
        if($comment->delete()) {
            $result = 'نظر مورد نظر با موفقیت حذف شد.';
            return redirect(route('comments.index'))->with('success', $result);
        } else {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید';
            return redirect(route('comments.index'))->with('warning', $result);
        }
    }
    public function changeStatus(Comment $comment)
    {
        if($comment->status) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }
        try {
            $comment->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده';
            return redirect(route('comments.index'))->with('warning', $result);
        }
        $result = 'وضعیت محصول موردنظر با موفقیت تغییر کرد';
        return redirect(route('comments.index'))->with('success', $result);

    }
}
