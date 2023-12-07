<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FooterSocial extends Model
{
    use HasFactory;

    private static $footer_social, $footer_socials;

    public static function createFooterSocial($request)
    {
        try {
            self::$footer_social       = new FooterSocial();
            self::saveBasicInfo(self::$footer_social, $request);
            self::$footer_social->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateFooterSocial($request, $id)
    {
        try {
            self::$footer_social = FooterSocial::find($id);
            self::saveBasicInfo(self::$footer_social, $request);
            self::$footer_social->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteFooterSocial($id)
    {
        try {
            self::$footer_social = FooterSocial::find($id);
            self::$footer_social->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($footer_social, $request)
    {
        self::$footer_social->name          = $request->name;
        self::$footer_social->icon          = $request->icon;
        self::$footer_social->slug          = $request->slug;
    }



}
