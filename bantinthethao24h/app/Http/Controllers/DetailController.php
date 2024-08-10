<?php
// app/Http/Controllers/DetailController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class DetailController extends Controller
{
    public function show($slug)
    {
        // Tìm sản phẩm theo slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Truyền biến $product và $slug vào view
        return view('fe.detail', compact('product', 'slug'));
    }

}

