<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\Comment;
use App\Models\user\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LikeController extends Controller
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
    public function destroy($id)
    {
        //
    }
    public function likeOrDislikeComment(Request $request)
    {
        $comment_id = $request->input('comment_id');
        $position = $request->input('position');
        $status = $request->input('status');
        $user_id = Auth::user()->id;
        // $comment = Comment::where('id', $comment_id)->get();
        $like = new Like;
        if($position == 'next') {
            $type = 0;
        } else {
            $type = 1;
        }
        if($status == 'create') {
            $like->comment_id = $comment_id;
            $like->user_id = $user_id;
            $like->type = $type;
            $like->save();
            if($type == 0) {
                $like->comment->dislike = $like->comment->dislike + 1;
                $like->comment->save();
            } else {
                $like->comment->like = $like->comment->like + 1;
                $like->comment->save();

            }
        } elseif ($status == 'delete') {
            $like = Like::where('comment_id', $comment_id)->where('user_id', $user_id)->get()->first();
            if($type == 0) {
                $like->comment->dislike = $like->comment->dislike - 1;
                $like->comment->save();
            } else {
                $like->comment->like = $like->comment->like - 1;
                $like->comment->save();
            }
            $like->delete();

        } elseif($status == 'both') {
            $like = Like::where('comment_id', $comment_id)->where('user_id', $user_id)->get()->first();
            $like->type = $type;
            $like->save();
            if($type == 0) {
                $like->comment->dislike = $like->comment->dislike + 1;
                $like->comment->like = $like->comment->like - 1;
                $like->comment->save();
            } else {
                $like->comment->like = $like->comment->like + 1;
                $like->comment->dislike = $like->comment->dislike - 1;
                $like->comment->save();
            }
        }
    }
}
