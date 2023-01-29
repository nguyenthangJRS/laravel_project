<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Service\ProductService;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{

    public function __construct(ProductService $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return view('admin.product.index');
    }

    function create()
    {
        $option = $this->product->create();
        return view('admin.product.add',compact('option'));
    }
    function store(Request $req)
    {
        $file = $this->product->store_file($req);
        dd($file);

    }
}
