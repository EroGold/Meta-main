<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInfo;



class ProductController extends Controller
{
    public function create(request $request)
    {
        Product::create([
            'brand' => $request->brand,
            'count' => $request->count,
            'discount' => $request->discount,
            'image' => $request->image,
            'info' => $request->info,
            'price' => $request->price,
            'prod_status' => $request->prod_status,
            'sold' => $request->sold,
            'type' => $request->type,
        ]);

        return redirect()->route('product.index');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'brand' => 'required|string|max:255',
            'count' => 'required|integer',
            'discount' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'info' => 'required|string',
            'price' => 'required|numeric',
            'prod_status' => 'required|string|max:255',
            'sold' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        // Xử lý upload ảnh
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            // Lưu hình ảnh vào thư mục public/img
            $image->storeAs('Public/img', $imageName);
            $imagePath = 'Adminlar/storage/app/public/img/'.$imageName; // Đường dẫn lưu trữ trong cơ sở dữ liệu
        }

        // Tạo sản phẩm mới
        $product = Product::create([
            'catalog_id' => $request->catalog_id,
            'brand' => $request->brand,
            'count' => $request->count,
            'discount' => $request->discount,
            'image' => $imagePath,
            'info' => $request->info,
            'price' => $request->price,
            'prod_status' => $request->prod_status,
            'sold' => $request->sold,
            'type' => $request->type,
        ]);

        $productId = $product->prod_id;

        ProductInfo::create([
            'prod_id' => $productId,
            // Thêm các trường khác trong product_info nếu cần thiết
        ]);

        return back()->with('success', 'Product created successfully.');
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function updateProduct(Request $request)
    {
        $product = Product::find($request->input('productId'));

        if(!$product){
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        $validatedData = $request->validate([
            'productCatalog' => 'required|exists:catalog,catalog_id',
            'productDiscount' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'productName' => 'required|string|max:255',
            'productPrice' => 'required|numeric',
            'productStatus' => 'required|string|max:255',
            'productCount' => 'required|integer',
            'productType' => 'required|string|max:255',
            'productBrand' => 'required|string|max:255',
        ]);

        $product->catalog_id = $request->productCatalog;
        $product->discount = $request->productDiscount;
        $product->info = $request->productName;
        $product->price = $request->productPrice;
        $product->prod_status = $request->productStatus;
        $product->count = $request->productCount;
        $product->type = $request->productType;
        $product->brand = $request->productBrand;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            // Lưu hình ảnh vào thư mục public/img
            $image->storeAs('Public/img', $imageName);
            $imagePath = 'Adminlar/storage/app/public/img/'.$imageName; // Đường dẫn lưu trữ trong cơ sở dữ liệu
        }

        $product->save();

        return response()->json(['success' => 'Sản phẩm đã được cập nhật thành công.']);
    }

    public function destroy($prod_id)
{
    // Tìm sản phẩm theo prod_id
    Product::destroy($prod_id);
    ProductInfo::destroy($prod_id);
    // Chuyển hướng về trang danh sách sản phẩm với thông báo thành công
    return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa thành công.');
}

}
