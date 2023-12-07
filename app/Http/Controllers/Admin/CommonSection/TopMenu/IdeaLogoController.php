<?php

namespace App\Http\Controllers\Admin\CommonSection\TopMenu;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\IdeaLogo;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IdeaLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.section.common_section.top_menu.idea_logo.manage',[
            'idea_logos' => IdeaLogo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section.common_section.top_menu.idea_logo.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            IdeaLogo::createIdeaLogo($request);
            return back()->with('message','IdeaLogo save successfully.');
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
            $idea_logo = IdeaLogo::find($decryptID);

            if ($idea_logo) {
                return view('admin.section.common_section.top_menu.idea_logo.details', [
                    'idea_logo' => $idea_logo,
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
            $idea_logo = IdeaLogo::find($decryptID);

            if ($idea_logo) {
                return view('admin.section.common_section.top_menu.idea_logo.edit', [
                    'idea_logo' => $idea_logo,
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
            IdeaLogo::updateIdeaLogo($request, $decryptID);
            return back()->with('message','1Idea Logo update successfully.');
        } catch (DecryptException $e) {
            return abort(404);
        }

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        IdeaLogo::deleteIdeaLogo($id);
        return back()->with('message','1Idea Logo delete successfully.');
    }
}
