<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Kiểm tra hình ảnh đã được upload chưa
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lưu hình ảnh vào thư mục 'public/images'
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('images', $imageName, 'public');

        // Trả về thông báo thành công
        return back()->with('success', 'Hình ảnh đã được upload thành công.');
    }
}
