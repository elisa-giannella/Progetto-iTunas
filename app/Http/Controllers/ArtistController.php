<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistStoreRequest;

class ArtistController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artists.collection', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // passo le categorie al form per farle mostrare dentro la select
        $categories = Category::all();
        return view('artists.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtistStoreRequest $request) // $request e' un oggetto!
    {
            //  $oggetto->metodo('parametro corrispondente a input name')
        $file = $request->file('artistImg');

        Artist::create([

            "name" => $request->artistName,
            "genre" => $request->artistGenre,
            "language" => $request->artistLang,
            "img" => $file ? $file->store('public/images') : 'public/images/default.png',
            "category_id" => $request->category,

        ]);

        return redirect()->route('artists.index')->with('success', 'Artista aggiunto con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        // la dependency injection ci permette di non dover utilizzare il metodo find

        return view('artists.detail', compact('artist'));
    }

    // public function show($id){
    //     // $artists = Artist::all();

    //     // foreach ($artists as $artist) {
    //     //     if($artist->id == $id){
    //     //         return view('artists.detail', compact('artist'));
    //     //     }
    //     // }

    //     $artist = Artist::find($id);

    //     return view('artists.detail', compact('artist'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        $categories = Category::all();
        return view('artists.edit', compact('artist'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistStoreRequest $request, Artist $artist)
    {

        $file = $request->file('artistImg');

        // lavoriamo sull'oggetto gia' istanziato quindi non chiamiamo il modello
        $artist->update([
            "name" => $request->artistName,
            "genre" => $request->artistGenre,
            "language" => $request->artistLang,
            "img" => $file ? $file->store('public/images') : $artist->img,
            // gli dico che se non viene caricata una nuova immagine deve mantenere quella precedente
            "category_id" => $request->category
        ]);

        return redirect()->route('artists.index')->with('success', 'Artista modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artists.index')->with('success','Artista eliminato');
    }

    /**
     * Filtra per categoria
     */

    public function filterByCategory(Category $category){

        return view('artists.category', compact('category'));

    }
}
