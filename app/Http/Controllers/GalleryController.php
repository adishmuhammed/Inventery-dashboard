<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required_without:video',
            'video' => 'required_without:image',
            'type' => 'required'
        ]);

        $gallery = new Gallery;

        $gallery->type = $request->type;

        if ($request->type == "image") {
            $gallery->image = $request->image;
        }

        if ($request->type == "video") {
            $gallery->video = $request->video;
        }

        if ($request->has('info')) {
            $gallery->info = $request->info;
        }

        $gallery->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'required_without:video',
            'video' => 'required_without:image',
            'type' => 'required'
        ]);

        $gallery->type = $request->type;

        if ($request->type == "image") {
            $gallery->image = $request->image;
        }

        if ($request->type == "video") {
            $gallery->video = $request->video;
        }

        if ($request->has('info')) {
            $gallery->info = $request->info;
        }

        $gallery->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}