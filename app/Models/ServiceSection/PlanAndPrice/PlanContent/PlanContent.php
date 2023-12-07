<?php

namespace App\Models\ServiceSection\PlanAndPrice\PlanContent;

use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PlanContent extends Model
{
    use HasFactory;

    private static $plan_content, $plan_contents;

    public static function createPlanContent($request)
    {
        try {
            self::$plan_content       = new PlanContent();
            self::saveBasicInfo(self::$plan_content, $request);
            self::$plan_content->save();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function updatePlanContent($request, $id)
    {
        try {
            self::$plan_content = PlanContent::find($id);
            self::saveBasicInfo(self::$plan_content, $request);
            self::$plan_content->update();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public static function deletePlanContent($id)
    {
        try {
            self::$plan_content = PlanContent::find($id);
            self::$plan_content->delete();
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    private static function saveBasicInfo($plan_content, $request)
    {
        self::$plan_content->plan_type_id          = $request->plan_type_id;
        self::$plan_content->start                 = $request->start;
        self::$plan_content->price                 = $request->price;
        self::$plan_content->time                  = $request->time;
        self::$plan_content->tax                   = $request->tax;
        self::$plan_content->button                = $request->button;
        self::$plan_content->apply                 = $request->apply;
    }

    public function planTypes()
    {
        return $this->belongsTo(PlanType::class, 'plan_type_id');
    }

}
