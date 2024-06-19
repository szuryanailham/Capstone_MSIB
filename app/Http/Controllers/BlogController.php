<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function admin()
    {
        $blogs = Blog::all();
        return view('blogs.admin', compact('blogs'));
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
            'judul' => 'required|string|max:255',
            'id_doctor' => 'required|exists:dokter,id',
            'id_category' => 'required|exists:category,id',
            'slug' => 'required|string|max:255',
            'body' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kutipan' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);

        $coverPath = null;
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
        }

        $blog = new Blog([
            'judul' => $request->get('judul'),
            'id_doctor' => $request->get('id_doctor'),
            'id_category' => $request->get('id_category'),
            'slug' => $request->get('slug'),
            'body' => $request->get('body'),
            'cover' => $coverPath,
            'kutipan' => $request->get('kutipan'),
            'release_date' => $request->get('release_date'),
        ]);

        $blog->save();

        return redirect()->route('blogs.admin')->with('success', 'Blog post created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'id_doctor' => 'required|exists:dokter,id',
            'id_category' => 'required|exists:category,id',
            'slug' => 'required|string|max:255',
            'body' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kutipan' => 'required|string|max:255',
            'release_date' => 'required|date',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('cover')) {
            // Delete old cover if it exists
            if ($blog->cover) {
                Storage::disk('public')->delete($blog->cover);
            }
            $coverPath = $request->file('cover')->store('covers', 'public');
            $blog->cover = $coverPath;
        }

        $blog->judul = $request->get('judul');
        $blog->id_doctor = $request->get('id_doctor');
        $blog->id_category = $request->get('id_category');
        $blog->slug = $request->get('slug');
        $blog->body = $request->get('body');
        $blog->kutipan = $request->get('kutipan');
        $blog->release_date = $request->get('release_date');

        $blog->save();

        return redirect()->route('blogs.admin')->with('success', 'Blog post created successfully.');
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
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.admin')
                         ->with('success', 'Blog deleted successfully.');
    }
}
