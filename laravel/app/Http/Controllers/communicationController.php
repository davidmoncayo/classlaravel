<?php

namespace App\Http\Controllers;
use App\Communication;
use Illuminate\Http\Request;
use DB;

class communicationController extends Controller
{
    public function index()
    {
        
      return view('communication/bridge');
      
    
      
    }
    
    public function consulta($id)
    {
      //envie ala vista con el parametro alado si funciona//
      return view('communication/bridge',['post_id' => $id], compact('communication'));
    }
    
    
     public function create()
    {
      
      
    }
    
    
    public function store(Request $request)
    {
       $communication = new Communication();
       
        $communication->mensaje = $request->get('mensaje');
        $communication->id_user = $request->get('id_user');
        $communication->id_fab = $request->get('id_fab');
        $communication->id_publicador = $request->get('id_publicador');
        $id = $request->get('id_fab');
      
        
        
        $communication->save();

       
        
        
       return view('communication/bridge',['post_id' => $id]);
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
       
        
    }
}
