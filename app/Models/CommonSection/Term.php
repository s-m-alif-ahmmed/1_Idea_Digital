<?php

namespace App\Models\CommonSection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Term extends Model
{
    use HasFactory;

    private static $term, $terms;

    public static function createTerm($request)
    {
        try {
            self::$term       = new Term();
            self::saveBasicInfo(self::$term, $request);
            self::$term->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateTerm($request, $id)
    {
        try {
            self::$term = Term::find($id);
            self::saveBasicInfo(self::$term, $request);
            self::$term->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteTerm($id)
    {
        try {
            self::$term = Term::find($id);
            self::$term->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($term, $request)
    {
        self::$term->name          = $request->name;
    }

}
