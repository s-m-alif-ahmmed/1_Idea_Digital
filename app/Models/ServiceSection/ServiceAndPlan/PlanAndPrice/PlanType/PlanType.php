<?php

namespace App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType;

use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PlanType extends Model
{
    use HasFactory;

    private static $plan_type, $plan_types;

    public static function createPlanType($request)
    {
        try {
            self::$plan_type       = new PlanType();
            self::saveBasicInfo(self::$plan_type, $request);
            self::$plan_type->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePlanType($request, $id)
    {
        try {
            self::$plan_type = PlanType::find($id);
            self::saveBasicInfo(self::$plan_type, $request);
            self::$plan_type->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePlanType($id)
    {
        try {
            self::$plan_type = PlanType::find($id);
            self::$plan_type->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($plan_type, $request)
    {
        self::$plan_type->service_id          = $request->service_id;
        self::$plan_type->name                = $request->name;
        self::$plan_type->description         = $request->description;
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
