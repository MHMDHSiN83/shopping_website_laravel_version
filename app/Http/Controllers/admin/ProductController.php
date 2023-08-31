<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Category;
use App\Models\admin\Product;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(3);
        return view('admin.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $messages = [
            'name.required' => 'نام محصول الزامی است',
            'price.required' => 'قیمت محصول الزامی است',
            'warranty.required' => 'مدت زمان گارانتی محصول الزامی است',
            'weight.required' => 'وزن محصول الزامی است',
            'description.required' => 'توضیحات محصول الزامی است',
            'status.required' => 'وضعیت محصول الزامی است',
            'image.required' => 'تصویر محصول الزامی است',
            'category_id.required' => 'دسته بندی محصول الزامی است',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'warranty' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ], $messages);
        $product = new Product();
        try {
            $product->create($request->all());
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            return redirect(route('products.index'))->with('warning', $result);
        }
        $result = 'محصول مورد نظر با موفقیت اضافه شد.';
        return redirect(route('products.index'))->with('success', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product->set_image_path();
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $messages = [
            'name.required' => 'نام محصول الزامی است',
            'price.required' => 'قیمت محصول الزامی است',
            'warranty.required' => 'مدت زمان گارانتی محصول الزامی است',
            'weight.required' => 'وزن محصول الزامی است',
            'description.required' => 'توضیحات محصول الزامی است',
            'status.required' => 'وضعیت محصول الزامی است',
            'image.required' => 'تصویر محصول الزامی است',
            'category_id.required' => 'دسته بندی محصول الزامی است',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'warranty' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ], $messages);
        try {
            $product->update($request->all());
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید.';
            return redirect(route('products.index'))->with('warning', $result);
        }
        $result = 'محصول مورد نظر با موفقیت ویرایش شد.';
        return redirect(route('products.index'))->with('success', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->delete()) {
            $result = 'محصول مورد نظر با موفقیت حذف شد.';
            return redirect(route('products.index'))->with('success', $result);
        } else {
            $result = 'مشکلی پیش آمده. بعدا امتحان کنید';
            return redirect(route('products.index'))->with('warning', $result);
        }
    }
    public function changeStatus(Product $product)
    {
        if($product->status) {
            $product->status = 0;
        } else {
            $product->status = 1;
        }
        try {
            $product->save();
        } catch (Exception $exception) {
            $result = 'مشکلی پیش آمده';
            return redirect(route('products.index'))->with('warning', $result);
        }
        $result = 'وضعیت محصول موردنظر با موفقیت تغییر کرد';
        return redirect(route('products.index'))->with('success', $result);

    }
}
