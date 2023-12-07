<?php

namespace App\Http\Controllers\Admin\ContactUsSection\ConatctMessage\HomeContact;

use App\Http\Controllers\Controller;
use App\Models\ContactUsSection\HomeContact\HomeContact;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.contact_us_section.contact_massages.home_contact_massages.manage',[
                'home_contacts' => HomeContact::all(),
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

//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            return view('admin.section.contact_us_section.contact_massages.home_contact_massages.detail', [
                'home_contact' => HomeContact::find($decryptId),
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
            return view('admin.section.contact_us_section.contact_massages.home_contact_massages.detail',[
                'home_contact' => HomeContact::find($decryptId),
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
            HomeContact::updateHomeContact($request, $decryptId);
            return redirect('/homeContact')->with('message','Home Contact Note update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change the specified seen or unseen in status.
     */
    public function changeStatusHomeContact($id)
    {
        $homeStatus = HomeContact::select('status')->where('id',$id)->first();
        if($homeStatus->status == 'unRead')
        {
            $status = 'Read';
        }
        elseif($homeStatus->status == 'Read')
        {
            $status = 'unRead';
        }
        HomeContact::where('id',$id)->update(['status'=>$status]);
        return back()->with('message','Home Contact Status changed successfully.');
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            HomeContact::deleteHomeContact($id);
            return redirect('/homeContact')->with('message', 'Contact content delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
