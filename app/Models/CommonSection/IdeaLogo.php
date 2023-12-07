<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class IdeaLogo extends Model
{
    use HasFactory;

    private static $idea_logo, $idea_logos, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        try {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = "admin/images/common_section/top_menu/1idea_logo/";
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$directory.self::$imageName;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function createIdeaLogo($request)
    {
        try {
            self::$imageUrl        = self::uploadImage($request);
            self::$idea_logo       = new IdeaLogo();
            self::saveBasicInfo(self::$idea_logo, $request, self::$imageUrl);
            self::$idea_logo->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateIdeaLogo($request, $id)
    {
        try {
            self::$idea_logo = IdeaLogo::find($id);
            if($request->file('image'))
            {
                if(file_exists(self::$idea_logo->image)){
                    unlink(self::$idea_logo->image);
                }
                self::$imageUrl = self::uploadImage($request);
            }
            else{
                self::$imageUrl = self::$idea_logo->image;
            }
            self::saveBasicInfo(self::$idea_logo, $request, self::$imageUrl);
            self::$idea_logo->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteIdeaLogo($id)
    {
        try {
            self::$idea_logo = IdeaLogo::find($id);
            if (file_exists(self::$idea_logo->image))
            {
                unlink(self::$idea_logo->image);
            }
            self::$idea_logo->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($idea_logo, $request, $imageUrl)
    {
        self::$idea_logo->image        = $imageUrl;
        self::$idea_logo->alt          = $request->alt;
    }



}
