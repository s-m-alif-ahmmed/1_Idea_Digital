<?php

namespace App\Http\Controllers\Admin\BlogSection;

use App\Http\Controllers\Controller;
use App\Models\BlogSection\Tag;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.blog_section.tag.manage',[
                'tags' => Tag::all(),
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
            return view('admin.section.blog_section.tag.index');
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
            Tag::createTag($request);
            return back()->with('message','Tag save successfully.');
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
            $category = Tag::find($decryptID);

            if ($category) {
                return view('admin.section.blog_section.tag.details', [
                    'tag' => $category,
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
            $category = Tag::find($decryptID);

            if ($category) {
                return view('admin.section.blog_section.tag.edit', [
                    'tag' => $category,
                ]);
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
            Tag::updateTag($request, $decryptID);
            return back()->with('message','Tag update successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeTagStatus($id)
    {
        try {
            $tag = Tag::select('status')->where('id',$id)->first();
            if($tag->status == 'active')
            {
                $tagStatus = 'inActive';
            }
            elseif($tag->status == 'inActive')
            {
                $tagStatus = 'active';
            }
            Tag::where('id',$id)->update(['status' => $tagStatus ]);
            return back()->with('message','Selected tag status changed successfully.');
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
            Tag::deleteTag($id);
            return back()->with('message','Tag delete successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }
}
