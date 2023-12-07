<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TopSocial extends Model
{
    use HasFactory;

    private static $top_social, $top_socials;

    public static function createTopSocial($request)
    {
        try {
            self::$top_social       = new TopSocial();
            self::saveBasicInfo(self::$top_social, $request);
            self::$top_social->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateTopSocial($request, $id)
    {
        try {
            self::$top_social = TopSocial::find($id);
            self::saveBasicInfo(self::$top_social, $request);
            self::$top_social->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteTopSocial($id)
    {
        try {
            self::$top_social = TopSocial::find($id);
            self::$top_social->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($top_social, $request)
    {
        self::$top_social->name          = $request->name;
        self::$top_social->icon          = $request->icon;
        self::$top_social->slug          = $request->slug;
    }


}
