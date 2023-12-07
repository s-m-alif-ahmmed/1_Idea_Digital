<?php

namespace App\Models\BlogSection;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $blogs, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        try {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = "admin/images/blog_section/";
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$directory.self::$imageName;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function createBlog($request)
    {
        try {
            self::$imageUrl        = self::uploadImage($request);
            self::$blog            = new Blog();
            self::saveBasicInfo(self::$blog, $request, self::$imageUrl);
            self::$blog->save();
            return self::$blog;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateBlog($request, $id)
    {
        try {
            self::$blog = Blog::find($id);
            if($request->file('image'))
            {
                if(file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                }
                self::$imageUrl = self::uploadImage($request);
            }
            else{
                self::$imageUrl = self::$blog->image;
            }
            self::saveBasicInfo(self::$blog, $request, self::$imageUrl);
            self::$blog->save();
            return self::$blog;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }


    public static function deleteBlog($id)
    {
        try {
            self::$blog = Blog::find($id);
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$blog->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($blog, $request, $imageUrl)
    {
        self::$blog->image                  = $imageUrl;
        self::$blog->meta_author            = $request->meta_author;
        self::$blog->meta_description       = $request->meta_description;
        self::$blog->meta_keyword           = $request->meta_keyword;
        self::$blog->alt                    = $request->alt;
        self::$blog->heading                = $request->heading;
        self::$blog->short_description      = $request->short_description;
        self::$blog->description            = $request->description;
        self::$blog->description            = $request->description;
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }

}
