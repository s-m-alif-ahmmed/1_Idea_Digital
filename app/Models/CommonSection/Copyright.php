<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Copyright extends Model
{
    use HasFactory;

    private static $copyright, $copyrights;

    public static function createCopyright($request)
    {
        try {
            self::$copyright       = new Copyright();
            self::saveBasicInfo(self::$copyright, $request);
            self::$copyright->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateCopyright($request, $id)
    {
        try {
            self::$copyright = Copyright::find($id);
            self::saveBasicInfo(self::$copyright, $request);
            self::$copyright->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteCopyright($id)
    {
        try {
            self::$copyright = Copyright::find($id);
            self::$copyright->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($copyright, $request)
    {
        self::$copyright->name          = $request->name;
    }

}
