<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {   
        $clients = client::orderBy('id', 'DESC')            ->paginate(4);

        return view('admin.clients.index', compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
      
        return view('admin.clients.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $client = client::create($request->all());


 return redirect()->route('clients.edit', $client->id)->with('info', 'Entrada creada con éxito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
       
        return view('admin.clients.show', compact('client'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( client $client)
    {
         
     return view('admin.clients.edit',compact('client'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, client $client)
    {
        

        $client->update($request->all());
        
        return redirect()->route('clients.edit', $client->id)->with('info', 'Entrada actualizada con éxito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = client::find($id);
         $client = client::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
