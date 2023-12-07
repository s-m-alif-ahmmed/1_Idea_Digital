<?php

namespace App\Http\Controllers\Admin\CommonSection\Footer;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\Term;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.section.common_section.footer.terms.manage',[
                'terms' => Term::all(),
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
            return view('admin.section.common_section.footer.terms.index');
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
            Term::createTerm($request);
            return back()->with('message','Terms save successfully.');
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
            return view('admin.section.common_section.footer.terms.details',[
                'term' => Term::find($decryptId),
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
            return view('admin.section.common_section.footer.terms.edit',[
                'term' => Term::find($decryptId),
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
            Term::updateTerm($request, $decryptId);
            return redirect('/term')->with('message','Term update successfully,');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Change Status the specified resource.
     */
    public function changeStatusTerm($id){
        try {
            $term = Term::select('status')->where('id', $id)->first();
            if ($term->status == 'active'){
                $termStatus = 'inActive';
            } elseif ($term->status == 'inActive') {
                $termStatus = 'active';
            }
            Term::where('id', $id)->update(['status' => $termStatus]);
            return back()->with('message','Term status change successfully.');
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
            Term::deleteTerm($id);
            return back()->with('message','Term delete successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

}
