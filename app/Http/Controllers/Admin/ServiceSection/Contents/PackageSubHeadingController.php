<?php

namespace App\Http\Controllers\Admin\ServiceSection\Contents;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\Contents\PackageSubHeading;
use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PackageSubHeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.contents.package_sub_heading.manage',[
                'package_sub_headings' => PackageSubHeading::all(),
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
            return view('admin.section.service_section.contents.package_sub_heading.index',[
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
            PackageSubHeading::createPackageSubHeading($request);
            return back()->with('message','Package sub heading content save successfully.');
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
            return view('admin.section.service_section.contents.package_sub_heading.details',[
                'package_sub_heading' => PackageSubHeading::find($decryptId),
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
            return view('admin.section.service_section.contents.package_sub_heading.edit',[
                'package_sub_heading' => PackageSubHeading::find($decryptId),
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
            PackageSubHeading::updatePackageSubHeading($request, $decryptId);
            return redirect('/packageSubHeading')->with('message','Package sub heading content update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPackageSubHeading($id){
        try {
            $package_sub_heading = PackageSubHeading::select('status')->where('id', $id)->first();
            if ($package_sub_heading->status == 'active'){
                $packageSubHeadingStatus = 'inActive';
            } elseif ($package_sub_heading->status == 'inActive') {
                $packageSubHeadingStatus = 'active';
            }
            PackageSubHeading::where('id', $id)->update(['status' => $packageSubHeadingStatus]);
            return back()->with('message','Package sub heading content status change successfully.');
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
            PackageSubHeading::deletePackageSubHeading($id);
            return back()->with('message','Package sub heading content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }
}
