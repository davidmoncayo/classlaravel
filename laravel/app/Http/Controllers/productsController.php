<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use DB;
use Auth;
class productsController extends Controller
{
    
    

    public function index()
    {
        $user = Auth::id();
        $products = DB::table('products_cmp')->select('*')->where('user_pub','=',$user)->get();
        return view('Inventory/products', compact('products'));


     
     //$products = DB::table('users')
       // ->join('users.id','=', 'users.id')
        //->select('users.id')
        //->get();  
        
     
     
        //$products = DB::table('products_cmp')
        //->join('products_cmp.user_pub','=', 'users.id')
        //->select('products_cmp.*','users.id')
        //->get();  
        //return view('Inventory/products', compact('products'));
    
        
    }
    public function create()
    {
       
        return view('Inventory.create');
    }
    
    public function view()
    {
        $products = DB::table('products_cmp')->select('*')->where('user_pub','=',1)->get();
        return view('Inventory/public', compact('products'));
    }
    
    public function store(Request $request)
    {
        $products = new Product();
        $products->id = null;
        $products->name = $request->get('name');
        $products->cantidad = $request->get('cantidad');
        $products->descripcion = $request->get('descripcion');
        $products->precio = $request->get('precio');
        $products->ruta =  $request->file('ruta')->store('public');
        //$request->file('ruta')->store('public');
        
        //$products->ruta = $request->file('ruta')->store('public')->getClientOriginalName();
        
        
        
        $products->activo = $request->get('activo');
        $products->user_pub = $request->get('user_pub');
        
        
        $products->save();
        return redirect('products');
    }
    public function edit($id)
    {
        $products = Product::find($id);
        return view('Inventory.edit', compact('Product', 'id'));
    }
    public function update(Request $request, $id)
    {
        //
        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->cantidad = $request->get('cantidad');
        $products->descripcion = $request->get('descripcion');
        
        $products->precio = $request->get('precio');
        
        $products->ruta =  $request->file('ruta')->store('public');
        
        
         $products->activo = $request->get('activo');
        $products->user_pub = $request->get('user_pub');
        $products->save();
        return redirect('products');
    }
    
    public function destroy($id)
    {
       $products= Product::find($id);
        $products->delete();
        return redirect('products');
    }
    
    
}

