<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $series = Serie::all();
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Serie $series)
    {
        //
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request ['slug'] = Str::slug($request->name);

        $validateDate = $request->validate([
            'name'=>'required',
            'slug' => 'required',
            'cover' => 'nullable | mimes:jpeg,jpg,png,gif | max:500',
            'description'=>'nullable',
            'total_vol' => 'nullable'
            ]);

            if ($request->cover) {

                $cover = Storage::put('cover_series_imgs', $request->cover);
                $validateDate['cover'] = $cover;
            }

            //dd($validateDate);
            Serie::create($validateDate);
        
        $serie = Serie::orderBy('id','desc')->first();
        return redirect('/admin/series')->with('success', 'Serie saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
        return view('admin.series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $series)
    {
        //
        return view('admin.series.show', compact('series'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
