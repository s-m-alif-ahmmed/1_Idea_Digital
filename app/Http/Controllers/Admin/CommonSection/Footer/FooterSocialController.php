<?php

namespace App\Http\Controllers\Admin\CommonSection\Footer;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\FooterSocial;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FooterSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.common_section.footer.footer_social.manage',[
            'footer_socials' => FooterSocial::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.common_section.footer.footer_social.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            FooterSocial::createFooterSocial($request);
            return back()->with('message','Footer social link save successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            $footer_social = FooterSocial::find($decryptID);

            if ($footer_social) {
                return view('admin.section.common_section.footer.footer_social.details', [
                    'footer_social' => $footer_social,
                ]);
            } else {
                return abort(404);
            }
        } catch (DecryptException $e) {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            $footer_social = FooterSocial::find($decryptID);

            if ($footer_social) {
                return view('admin.section.common_section.footer.footer_social.edit', [
                    'footer_social' => $footer_social,
                ]);
            } else {
                return abort(404);
            }
        } catch (DecryptException $e) {
            return abort(404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $decryptID = Crypt::decryptString($id);
            FooterSocial::updateFooterSocial($request, $decryptID);
            return back()->with('message','Footer social link update successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }

    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusFooterSocial($id)
    {
        try {
            $footer_social = FooterSocial::select('status')->where('id',$id)->first();
            if($footer_social->status == 'active')
            {
                $socialStatus = 'inActive';
            }
            elseif($footer_social->status == 'inActive')
            {
                $socialStatus = 'active';
            }
            FooterSocial::where('id',$id)->update(['status' => $socialStatus ]);
            return back()->with('message','Selected social link status changed successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FooterSocial::deleteFooterSocial($id);
        return back()->with('message','Footer social link delete successfully.');
    }

}
