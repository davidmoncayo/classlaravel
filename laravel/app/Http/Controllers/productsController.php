<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Inventory/products', compact('products'));
        
        
    }
    public function create()
    {
       
        return view('Inventory.create');
    }
    
    public function view()
    {
        $products = Product::all();
        return view('Inventory/public', compact('products'));
    }
    
    public function store(Request $request)
    {
        $products = new Product();
        $products->name = $request->get('name');
        $products->descripcion = $request->get('cantidad');
        $products->cantidad = $request->get('descripcion');
        $products->precio = $request->get('precio');
        $products->activo = $request->get('activo');
        $products->save();
        return redirect('products');
    }
    
    public function update(Request $request, $id)
    {
        //
        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->descripcion = $request->get('cantidad');
        $products->cantidad = $request->get('descripcion');
        $products->precio = $request->get('precio');
        
        $products->save();
        return redirect('courses');
    }
}

