<?php

namespace App\Models\ServiceSection\Contents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceDescription extends Model
{
    use HasFactory;

    private static $service_description, $service_descriptions;

    public static function createServiceDescription($request)
    {
        try {
            self::$service_description       = new ServiceDescription();
            self::saveBasicInfo(self::$service_description, $request);
            self::$service_description->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateServiceDescription($request, $id)
    {
        try {
            self::$service_description = ServiceDescription::find($id);
            self::saveBasicInfo(self::$service_description, $request);
            self::$service_description->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteServiceDescription($id)
    {
        try {
            self::$service_description = ServiceDescription::find($id);
            self::$service_description->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($service_description, $request)
    {
        self::$service_description->name            = $request->name;
        self::$service_description->description     = $request->description;
    }

}
