<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Dokter;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    
    public function create()
    {
        $doctors = Dokter::all();
        $categories = Category::all();
        return view('blogs.create', compact('doctors', 'categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'id_doctor' => 'required|integer',
            'id_category' => 'required|integer',
            'slug' => 'required|max:255',
            'body' => 'required',
            'img' => 'nullable|image', 
            'kutipan' => 'required|max:255',
            'release_date' => 'required|date',
        ]);

        if ($request->hasFile('img')) {
            $path = $request->file('img')->storeAs(
            'public/tema_img',
            'tema_img_'.time() . '.' . $request->file('img')->extension()
            );
            $validated['cover'] = basename($path);
        }

        Blog::create($request->all());

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $doctors = Dokter::all();
        $categories = Category::all();
        return view('blogs.edit', compact('blog', 'doctors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'id_doctor' => 'required|integer',
            'id_category' => 'required|integer',
            'slug' => 'required|max:255',
            'body' => 'required',     
            'img' => 'nullable|image',
            'kutipan' => 'required|max:255',
            'release_date' => 'required|date',
        ]);

        if ($request->hasFile('img')) {
            $path = $request->file('img')->storeAs(
            'public/tema_img',
            'tema_img_'.time() . '.' . $request->file('img')->extension()
            );
            $validated['cover'] = basename($path);
        }

        $blog->update($request->all());

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog deleted successfully.');
    }
}
