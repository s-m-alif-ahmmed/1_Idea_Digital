<?php

namespace App\Http\Controllers\Admin\ServiceSection\Contents;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\Contents\PackageDescription;
use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PackageDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.contents.package_description.manage',[
                'package_descriptions' => PackageDescription::all(),
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
            return view('admin.section.service_section.contents.package_description.index',[
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
            PackageDescription::createPackageDescription($request);
            return back()->with('message','Package description content save successfully.');
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
            return view('admin.section.service_section.contents.package_description.details',[
                'package_description' => PackageDescription::find($decryptId),
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
            return view('admin.section.service_section.contents.package_description.edit',[
                'package_description' => PackageDescription::find($decryptId),
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
            PackageDescription::updatePackageDescription($request, $decryptId);
            return redirect('/packageDescription')->with('message','Package description content update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPackageDescription($id){
        try {
            $package_description = PackageDescription::select('status')->where('id', $id)->first();
            if ($package_description->status == 'active'){
                $packageDescriptionStatus = 'inActive';
            } elseif ($package_description->status == 'inActive') {
                $packageDescriptionStatus = 'active';
            }
            PackageDescription::where('id', $id)->update(['status' => $packageDescriptionStatus]);
            return back()->with('message','Package description content status change successfully.');
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
            PackageDescription::deletePackageDescription($id);
            return back()->with('message','Package description content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }
}
