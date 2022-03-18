<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::all();
        return view("buku",["bukus"=>$bukus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'image' => 'image|file|max:1024',
            'image' => 'required',
            'title' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'publisher' => 'required'
        ]);
        
      
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $buku = Buku::create([
            'image'=>$imageName,
            'title'=>$request['title'],
            'author'=>$request['author'],
            'publisher'=>$request['publisher'],
            'synopsis'=>$request['synopsis']]);
            

        return redirect('/')->with('success','List buku baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findorFail($id);
        $bukus = Buku::all();
        return view("detail", ["buku"=>$buku, 'bukus'=>$bukus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findorFail($id);
        return view("edit", ["buku"=>$buku]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|file|max:1024',
            'image' => 'required',
            'title' => 'required',
            'author' => 'required',
            'synopsis' => 'required',
            'publisher' => 'required'
        ]);
        
      
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $buku = Buku::create([
            'image'=>$imageName,
            'title'=>$request['title'],
            'author'=>$request['author'],
            'publisher'=>$request['publisher'],
            'synopsis'=>$request['synopsis']]);
            return redirect("/")->with('success','Data telah diperbaharui!');
     
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect('/buku');


    }
}
