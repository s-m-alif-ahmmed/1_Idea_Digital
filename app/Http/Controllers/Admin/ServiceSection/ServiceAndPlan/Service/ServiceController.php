<?php

namespace App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.service_and_plan.service.manage',[
                'services' => Service::all(),
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
            return view('admin.section.service_section.service_and_plan.service.index');
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
            Service::createService($request);
            return back()->with('message','Service save successfully.');
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
            return view('admin.section.service_section.service_and_plan.service.details',[
                'service' => Service::find($decryptId),
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
            return view('admin.section.service_section.service_and_plan.service.edit',[
                'service' => Service::find($decryptId),
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
            Service::updateService($request, $decryptId);
            return redirect('/service')->with('message','Service update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusService($id){
        try {
            $service = Service::select('status')->where('id', $id)->first();
            if ($service->status == 'active'){
                $serviceStatus = 'inActive';
            } elseif ($service->status == 'inActive') {
                $serviceStatus = 'active';
            }
            Service::where('id', $id)->update(['status' => $serviceStatus]);
            return back()->with('message','Service status change successfully.');
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
            Service::deleteService($id);
            return back()->with('message','Service delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }
}
