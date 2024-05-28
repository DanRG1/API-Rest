<?php 
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller{
    public function create(Request $request){ 
        // $this->validate($request,[
        //     'name' => 'required|string',
        //     'price' => 'required|interger',
        //     'color' => 'required|in:red,blue',
        //     'description' => 'string'
        // ]);
        $data = $request->all();
        $product = Product::create($data);
        return response()->json($product);
}

    public function index(){
        $product = Product::all();
        return response()->json($product);
}
}