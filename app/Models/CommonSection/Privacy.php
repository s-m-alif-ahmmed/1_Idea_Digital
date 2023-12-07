<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Privacy extends Model
{
    use HasFactory;

    private static $privacy, $privacies;

    public static function createPrivacy($request)
    {
        try {
            self::$privacy       = new Privacy();
            self::saveBasicInfo(self::$privacy, $request);
            self::$privacy->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePrivacy($request, $id)
    {
        try {
            self::$privacy = Privacy::find($id);
            self::saveBasicInfo(self::$privacy, $request);
            self::$privacy->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePrivacy($id)
    {
        try {
            self::$privacy = Privacy::find($id);
            self::$privacy->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($privacy, $request)
    {
        self::$privacy->name          = $request->name;
    }

}
