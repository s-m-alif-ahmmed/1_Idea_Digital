<?php

namespace App\Http\Controllers\Admin\ContactUsSection\ConatctMessage\MainContact;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSection\MainContact\MainContact;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.contact_us_section.contact_massages.main_contact_massages.manage',[
                'main_contacts' => MainContact::all(),
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
        // return view('front.home.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            return view('admin.section.contact_us_section.contact_massages.main_contact_massages.detail', [
                'main_contact' => MainContact::find($decryptId),
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
            return view('admin.section.contact_us_section.contact_massages.main_contact_massages.detail',[
                'main_contact' => MainContact::find($decryptId),
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
            MainContact::updateMainContact($request, $decryptId);
            return redirect('/mainContact')->with('message','Home Contact Note update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change the specified seen or unseen in status.
     */
    public function changeStatusMainContact($id)
    {
        $homeStatus = MainContact::select('status')->where('id',$id)->first();
        if($homeStatus->status == 'unRead')
        {
            $status = 'Read';
        }
        elseif($homeStatus->status == 'Read')
        {
            $status = 'unRead';
        }
        MainContact::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Home Contact Status changed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            MainContact::deleteMainContact($id);
            return redirect('/mainContact')->with('message', 'Contact content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
