<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fomrData = $request->all();

        $comic = new Comic();
        $comic->src = $fomrData['src'];
        $comic->title = $fomrData['title'];
        $comic->series = $fomrData['series'];
        $comic->price = $fomrData['price'];
        $comic->sale_date = $fomrData['sale_date'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findorfail($id);
        return view('admin.comics.show', compact('comic')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findorfail($id);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
        $comic = Comic::findorfail($id);

        $fomrData = $request->all();
        
        $comic->src = $fomrData['src'];
        $comic->title = $fomrData['title'];
        $comic->series = $fomrData['series'];
        $comic->price = $fomrData['price'];
        $comic->sale_date = $fomrData['sale_date'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findorfail($id);
        
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
