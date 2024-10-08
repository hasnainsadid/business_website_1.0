<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Clients::all();
        return view('backend.pages.client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $fileName = time() . '.' . $request->img->extension();
        $input = $request->all();
        $input['img'] = $fileName;

        if (Clients::create($input)) {
            $request->img->move('assets/img', $fileName);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Clients::findorfail($id);
        return view('backend.pages.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Clients::findorfail($id);
        return view('backend.pages.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Clients::findorfail($id);
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Clients::findorfail($id);
        $client->delete();
        return back();
    }
}
