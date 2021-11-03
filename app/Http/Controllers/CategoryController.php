<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
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
            'name.required' => 'نام دسته بندی الزامی است',
            'name.unique' => 'نام دسته بندی نباید تکراری باشد'
        ];
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ], $messages);
        $category = new Category();
        try {
            $category->create($request->all());
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            return redirect(route('categories.index'))-with('warning', $result);
        }
        $result = 'دسته بندی مورد نظر با موفقیت اضافه شد.';
        return redirect(route('categories.index'))->with('success', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function destroy(Category $category)
    {
        if($category->delete()) {
            $result = 'دسته بندی مورد نظر با موفقیت حذف شد.';
            return redirect(route('categories.index'))->with('success', $result);
        } else {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید';
            return redirect(route('categories.index'))->with('warning', $result);
        }
    }
}
