<?php

namespace App\Models\ServiceSection\Contents;

use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PackageSubHeading extends Model
{
    use HasFactory;

    private static $package_sub_heading, $package_sub_headings;

    public static function createPackageSubHeading($request)
    {
        try {
            self::$package_sub_heading       = new PackageSubHeading();
            self::saveBasicInfo(self::$package_sub_heading, $request);
            self::$package_sub_heading->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePackageSubHeading($request, $id)
    {
        try {
            self::$package_sub_heading = PackageSubHeading::find($id);
            self::saveBasicInfo(self::$package_sub_heading, $request);
            self::$package_sub_heading->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePackageSubHeading($id)
    {
        try {
            self::$package_sub_heading = PackageSubHeading::find($id);
            self::$package_sub_heading->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($package_sub_heading, $request)
    {
        self::$package_sub_heading->service_id      = $request->service_id;
        self::$package_sub_heading->name            = $request->name;
        self::$package_sub_heading->description     = $request->description;
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
