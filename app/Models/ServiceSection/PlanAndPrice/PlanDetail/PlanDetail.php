<?php

namespace App\Models\ServiceSection\PlanAndPrice\PlanDetail;

use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PlanDetail extends Model
{
    use HasFactory;

    private static $plan_detail, $plan_details;

    public static function createPlanDetail($request)
    {
        try {
            self::$plan_detail       = new PlanDetail();
            self::saveBasicInfo(self::$plan_detail, $request);
            self::$plan_detail->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePlanDetail($request, $id)
    {
        try {
            self::$plan_detail = PlanDetail::find($id);
            self::saveBasicInfo(self::$plan_detail, $request);
            self::$plan_detail->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePlanDetail($id)
    {
        try {
            self::$plan_detail = PlanDetail::find($id);
            self::$plan_detail->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($plan_detail, $request)
    {
        self::$plan_detail->plan_type_id          = $request->plan_type_id;
        self::$plan_detail->detail                = $request->detail;
    }

    public function planTypes()
    {
        return $this->belongsTo(PlanType::class, 'plan_type_id');
    }

}
