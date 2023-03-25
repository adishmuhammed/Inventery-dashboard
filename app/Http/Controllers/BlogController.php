<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs')->with('blogs', Blogs::paginate(12));
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_image' => 'required',
            'blog_content' => 'required',
            'blog_tags' => 'required'
        ]);
        // store product_image via storage facade/ store product_image via storage facade
        $image = $request->file('blog_image');
        $name = Str::random(5) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/images', $name);


        // fill blog model with request
        $blog = new Blogs();
        $blog->blog_title = $request->blog_title;
        $blog->blog_content = $request->blog_content;
        $blog->blog_tags = $request->blog_tags;
        $blog->blog_image = $path;
        $blog->save();

        // return to products.create
        return redirect()->route('products.create')->with('success', 'Blog created successfully.');
    }

    public function show(Blogs $blog)
    {
        $tags = explode(“, ”, $blog->blog_tags);
        // make $tags a list consisted of words inside $tags separated by ',' comma

        return view('blog', compact('blog', 'tags'));
    }


    //destroy
    public function destroy(Blogs $blog)
    {
        $blog->delete();
        return redirect()->route('products.create')->with('success', 'Blog deleted successfully.');
    }
}
