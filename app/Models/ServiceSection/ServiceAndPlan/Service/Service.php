<?php

namespace App\Models\ServiceSection\ServiceAndPlan\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Service extends Model
{
    use HasFactory;

    private static $service, $services;

    public static function createService($request)
    {
        try {
            self::$service       = new Service();
            self::saveBasicInfo(self::$service, $request);
            self::$service->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updateService($request, $id)
    {
        try {
            self::$service = Service::find($id);
            self::saveBasicInfo(self::$service, $request);
            self::$service->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deleteService($id)
    {
        try {
            self::$service = Service::find($id);
            self::$service->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($service, $request)
    {
        self::$service->icon          = $request->icon;
        self::$service->name          = $request->name;
        self::$service->detail        = $request->detail;
    }

}
