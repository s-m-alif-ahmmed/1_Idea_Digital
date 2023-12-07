<?php

namespace App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanContent;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\PlanAndPrice\PlanContent\PlanContent;
use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PlanContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_content.manage',[
                'plan_contents' => PlanContent::all(),
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_content.index',[
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
            PlanContent::createPlanContent($request);
            return back()->with('message','Plan content save successfully.');
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_content.details',[
                'plan_content' => PlanContent::find($decryptId),
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
            return view('admin.section.service_section.service_and_plan.plan_and_price.plan_content.edit',[
                'plan_content' => PlanContent::find($decryptId),
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
            PlanContent::updatePlanContent($request, $decryptId);
            return redirect('/planContent')->with('message','Plan content update successfully,');
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
            PlanContent::deletePlanContent($id);
            return back()->with('message','Plan content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
