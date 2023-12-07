<?php

namespace App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PlanTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_type.manage',[
                'plan_types' => PlanType::all(),
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_type.index',[
                'services' => Service::all(),
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
            PlanType::createPlanType($request);
            return back()->with('message','Plan type save successfully.');
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_type.details',[
                'plan_type' => PlanType::find($decryptId),
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_type.edit',[
                'plan_type' => PlanType::find($decryptId),
                'services' => Service::all(),
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
            PlanType::updatePlanType($request, $decryptId);
            return redirect('/planType')->with('message','Plan type update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPlanType($id){
        try {
            $plan_type = PlanType::select('status')->where('id', $id)->first();
            if ($plan_type->status == 'active'){
                $planTypeStatus = 'inActive';
            } elseif ($plan_type->status == 'inActive') {
                $planTypeStatus = 'active';
            }
            PlanType::where('id', $id)->update(['status' => $planTypeStatus]);
            return back()->with('message','Plan type status change successfully.');
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
            PlanType::deletePlanType($id);
            return back()->with('message','Plan type delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
