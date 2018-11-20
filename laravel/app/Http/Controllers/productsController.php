<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    
    public function activo(Request $request, $id){
        $products = Product::find($id);
        $products->activo = 0;
        
        $products->save();
        return redirect('products');
    }
    

    public function index()
    {
        $products = Product::all();
        return view('Inventory/products', compact('products'));
        
        
        $results = DB::products('select * from products_cmp
        inner join users on users.id=products_cmp.user_pub');
        var_dump($results);

    
        
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
        $products->id = null;
        $products->name = $request->get('name');
        $products->descripcion = $request->get('cantidad');
        $products->cantidad = $request->get('descripcion');
        $products->precio = $request->get('precio');
        $products->activo = $request->get('activo');
        $products->user_pub = $request->get('user_pub');
        
        
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
    
    public function destroy($id)
    {
       $products= Product::find($id);
        $products->delete();
        return redirect('products');
    }
    
    
}

