<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
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
    public function destroy(User $user)
    {
        if($user->delete()) {
            $result = ' کاربر مورد نظر با موفقیت حذف شد.';
            return redirect(route('users.index'))->with('success', $result);
        } else {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید';
            return redirect(route('users.index'))->with('warning', $result);
        }
    }
    public function changeStatus(User $user)
    {
        if($user->status) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        try {
            $user->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده';
            return redirect(route('users.index'))->with('warning', $result);
        }
        $result = 'وضعیت کاربر موردنظر با موفقیت تغییر کرد';
        return redirect(route('users.index'))->with('success', $result);

    }
    public function changeRole(User $user)
    {
        if($user->role == 1) {
            $user->role = 2;
        } else {
            $user->role = 1;
        }
        try {
            $user->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده';
            return redirect(route('users.index'))->with('warning', $result);
        }
        $result = 'نقش کاربر موردنظر با موفقیت تغییر کرد';
        return redirect(route('users.index'))->with('success', $result);

    }
}
