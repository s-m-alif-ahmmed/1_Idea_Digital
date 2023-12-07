<?php

namespace App\Models\ServiceSection\Contents;

use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PackageDescription extends Model
{
    use HasFactory;

    private static $package_description, $package_descriptions, $image, $directory, $imageName, $imageUrl;

    public static function uploadImage($request)
    {
        try {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = "admin/images/service_section/contents/";
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
            return self::$directory.self::$imageName;
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function createPackageDescription($request)
    {
        try {
            self::$imageUrl                  = self::uploadImage($request);
            self::$package_description       = new PackageDescription();
            self::saveBasicInfo(self::$package_description, $request, self::$imageUrl);
            self::$package_description->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePackageDescription($request, $id)
    {
        try {
            self::$package_description = PackageDescription::find($id);
                if($request->file('image'))
                {
                    if(file_exists(self::$package_description->image)){
                        unlink(self::$package_description->image);
                    }
                    self::$imageUrl = self::uploadImage($request);
                }
                else{
                    self::$imageUrl = self::$package_description->image;
                }
            self::saveBasicInfo(self::$package_description, $request, self::$imageUrl);
            self::$package_description->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePackageDescription($id)
    {
        try {
            self::$package_description = PackageDescription::find($id);
            if (file_exists(self::$package_description->image))
            {
                unlink(self::$package_description->image);
            }
            self::$package_description->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($package_description, $request, $imageUrl)
    {
        self::$package_description->service_id      = $request->service_id;
        self::$package_description->image           = $imageUrl;
        self::$package_description->alt             = $request->alt;
        self::$package_description->description     = $request->description;
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }


}
