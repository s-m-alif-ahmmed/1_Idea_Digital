<?php

namespace App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanDetail;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\PlanAndPrice\PlanDetail\PlanDetail;
use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PlanDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_detail.manage',[
                'plan_details' => PlanDetail::all(),
            ]);
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_detail.index',[
                'plan_types' => PlanType::all(),
            ]);
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            PlanDetail::createPlanDetail($request);
            return back()->with('message','Plan detail save successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_detail.details',[
                'plan_detail' => PlanDetail::find($decryptId),
            ]);
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_detail.edit',[
                'plan_detail' => PlanDetail::find($decryptId),
                'plan_types' => PlanType::all(),
            ]);
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            PlanDetail::updatePlanDetail($request, $decryptId);
            return redirect('/planDetail')->with('message','Plan detail update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPlanDetail($id){
        try {
            $plan_detail = PlanDetail::select('status')->where('id', $id)->first();
            if ($plan_detail->status == 'active'){
                $planDetailStatus = 'inActive';
            } elseif ($plan_detail->status == 'inActive') {
                $planDetailStatus = 'active';
            }
            PlanDetail::where('id', $id)->update(['status' => $planDetailStatus]);
            return back()->with('message','Plan detail status change successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPlanOnDetail($id){
        try {
            $plan_on_detail = PlanDetail::select('on_status')->where('id', $id)->first();
            if ($plan_on_detail->on_status == 'active'){
                $planOnDetailStatus = 'inActive';
            } elseif ($plan_on_detail->on_status == 'inActive') {
                $planOnDetailStatus = 'active';
            }
            PlanDetail::where('id', $id)->update(['on_status' => $planOnDetailStatus]);
            return back()->with('message','Plan detail on status change successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            PlanDetail::deletePlanDetail($id);
            return back()->with('message','Plan detail delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
