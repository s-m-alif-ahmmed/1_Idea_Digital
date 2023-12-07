<?php

namespace App\Http\Controllers\Admin\BlogSection;

use App\Http\Controllers\Controller;
use App\Models\BlogSection\Blog;
use App\Models\BlogSection\Tag;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.blog_section.blog.manage',[
                'blogs' => Blog::all(),
            ]);
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $tags = Tag::all();
            return view('admin.section.blog_section.blog.index',compact('tags'));
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $blog = Blog::createBlog($request);
            if ($request->has('tags')) {
                $blog->tags()->attach($request->tags);
            }
            return back()->with('message', 'Blog saved successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            $blog = Blog::find($decryptID);

            if ($blog) {
                return view('admin.section.blog_section.blog.details', [
                    'blog' => $blog,
                ]);
            } else {
                return abort(404);
            }
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            $blog = Blog::find($decryptID);
            $tags = Tag::all();

            if ($blog) {
                return view('admin.section.blog_section.blog.edit', [
                    'blog' => $blog,
                ],compact('tags'));
            } else {
                return abort(404);
            }
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            $blog = Blog::updateBlog($request, $decryptID);
            $blog->tags()->sync($request->tags);
            return back()->with('message','Blog update successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }

    }

    /**
     * Change Status the specified resource.
     */
    public function changeBlogsStatus($id)
    {
        try {
            $blog = Blog::select('status')->where('id',$id)->first();
            if($blog->status == 'active')
            {
                $blogStatus = 'inActive';
            }
            elseif($blog->status == 'inActive')
            {
                $blogStatus = 'active';
            }
            Blog::where('id',$id)->update(['status' => $blogStatus ]);
            return back()->with('message','Selected blog status changed successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Blog::deleteBlog($id);
            return back()->with('message','Blog delete successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

}
