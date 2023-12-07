<?php

namespace App\Http\Controllers\Admin\ServiceSection\Contents;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection\Contents\ServiceDescription;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ServiceDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.service_section.contents.service_description.manage',[
                'service_descriptions' => ServiceDescription::all(),
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
            return view('admin.section.service_section.contents.service_description.index');
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
            ServiceDescription::createServiceDescription($request);
            return back()->with('message','Service Description content save successfully.');
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
            return view('admin.section.service_section.contents.service_description.details',[
                'service_description' => ServiceDescription::find($decryptId),
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
            return view('admin.section.service_section.contents.service_description.edit',[
                'service_description' => ServiceDescription::find($decryptId),
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
            ServiceDescription::updateServiceDescription($request, $decryptId);
            return redirect('/serviceDescription')->with('message','Service Description content update successfully,');
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
            ServiceDescription::deleteServiceDescription($id);
            return back()->with('message','Service Description content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }
}
