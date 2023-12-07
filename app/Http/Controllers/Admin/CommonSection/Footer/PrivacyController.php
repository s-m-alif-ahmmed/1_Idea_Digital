<?php

namespace App\Http\Controllers\Admin\CommonSection\Footer;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\Privacy;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.common_section.footer.privacy.manage',[
                'privacies' => Privacy::all(),
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
            return view('admin.section.common_section.footer.privacy.index');
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
            Privacy::createPrivacy($request);
            return back()->with('message','Privacy save successfully.');
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
            return view('admin.section.common_section.footer.privacy.details',[
                'privacy' => Privacy::find($decryptId),
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
            return view('admin.section.common_section.footer.privacy.edit',[
                'privacy' => Privacy::find($decryptId),
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
            Privacy::updatePrivacy($request, $decryptId);
            return redirect('/privacy')->with('message','Privacy update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusPrivacy($id){
        try {
            $privacy = Privacy::select('status')->where('id', $id)->first();
            if ($privacy->status == 'active'){
                $privacyStatus = 'inActive';
            } elseif ($privacy->status == 'inActive') {
                $privacyStatus = 'active';
            }
            Privacy::where('id', $id)->update(['status' => $privacyStatus]);
            return back()->with('message','Privacy status change successfully.');
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
            Privacy::deletePrivacy($id);
            return back()->with('message','Privacy delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
