<?php

namespace App\Http\Controllers\Admin\CommonSection\Footer;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\Copyright;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CopyrightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.common_section.footer.copyright.manage',[
                'copyrights' => Copyright::all(),
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
//            return view('admin.section.common_section.footer.copyright.index');
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
            Copyright::createCopyright($request);
            return back()->with('message','Copyright save successfully.');
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
            return view('admin.section.common_section.footer.copyright.details',[
                'copyright' => Copyright::find($decryptId),
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
            return view('admin.section.common_section.footer.copyright.edit',[
                'copyright' => Copyright::find($decryptId),
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
            Copyright::updateCopyright($request, $decryptId);
            return redirect('/copyright')->with('message','Copyright update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusCopyright($id){
        try {
            $copyright = Copyright::select('status')->where('id', $id)->first();
            if ($copyright->status == 'active'){
                $copyrightStatus = 'inActive';
            } elseif ($copyright->status == 'inActive') {
                $copyrightStatus = 'active';
            }
            Copyright::where('id', $id)->update(['status' => $copyrightStatus]);
            return back()->with('message','Copyright status change successfully.');
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
//            Copyright::deleteCopyright($id);
//            return back()->with('message','Copyright delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
