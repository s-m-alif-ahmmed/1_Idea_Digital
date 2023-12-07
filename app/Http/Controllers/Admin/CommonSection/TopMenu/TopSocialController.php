<?php

namespace App\Http\Controllers\Admin\CommonSection\TopMenu;

use App\Http\Controllers\Controller;

use App\Models\CommonSection\TopSocial;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TopSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.common_section.top_menu.top_social.manage',[
            'top_socials' => TopSocial::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.common_section.top_menu.top_social.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            TopSocial::createTopSocial($request);
            return back()->with('message','Top social link save successfully.');
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
            $top_social = TopSocial::find($decryptID);

            if ($top_social) {
                return view('admin.section.common_section.top_menu.top_social.details', [
                    'top_social' => $top_social,
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
            $top_social = TopSocial::find($decryptID);

            if ($top_social) {
                return view('admin.section.common_section.top_menu.top_social.edit', [
                    'top_social' => $top_social,
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
            TopSocial::updateTopSocial($request, $decryptID);
            return back()->with('message','Top social link update successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }

    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusTopSocial($id)
    {
        try {
            $top_social = TopSocial::select('status')->where('id',$id)->first();
            if($top_social->status == 'active')
            {
                $socialStatus = 'inActive';
            }
            elseif($top_social->status == 'inActive')
            {
                $socialStatus = 'active';
            }
            TopSocial::where('id',$id)->update(['status' => $socialStatus ]);
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
        TopSocial::deleteTopSocial($id);
        return back()->with('message','Top social link delete successfully.');
    }

}
