<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\BlogSection\Blog;
use App\Models\ContactUsSection\HomeContact\HomeContact;
use App\Models\ContactUsSection\MainContact\MainContact;
use App\Models\ServiceSection\Contents\PackageDescription;
use App\Models\ServiceSection\Contents\PackageSubHeading;
use App\Models\ServiceSection\Contents\ServiceDescription;
use App\Models\ServiceSection\PlanAndPrice\PlanContent\PlanContent;
use App\Models\ServiceSection\PlanAndPrice\PlanDetail\PlanDetail;
use App\Models\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanType;
use App\Models\ServiceSection\ServiceAndPlan\Service\Service;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('website.home.home');
        }catch (DecryptException $e){
        return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('website.home.about');
    }

    /**
     * Display the specified resource.
     */
    public function caseStudies()
    {
        return view('website.home.case-studies');
    }

    /**
     * Display the specified resource.
     */
    public function services()
    {
        return view('website.home.service',[
            'services' => Service::all(),
            'service_descriptions' => ServiceDescription::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function serviceDetails(string $id)
    {
        try {
            $decryptId = Crypt::decryptString($id);
            return view('website.home.service.details',[
                'service' => Service::find($decryptId),
                'plan_types' => PlanType::all(),
                'plan_contents' => PlanContent::all(),
                'plan_details' => PlanDetail::all(),
                'package_sub_headings' => PackageSubHeading::all(),
                'package_descriptions' => PackageDescription::all(),
            ]);
        }catch (DecryptException $e){
            return abort(404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return view('website.home.contact');
    }

    /**
     * Display the specified resource.
     */
    public function homeContactStore(Request $request)
    {
        try {
            HomeContact::createHomeContact($request);
            return back()->with('message', 'message sent successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function mainContactStore(Request $request)
    {
        try {
            MainContact::createMainContact($request);
            return back()->with('message', 'message sent successfully.');
        }catch (DecryptException $e){
            return abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function blog()
    {
        return view('website.home.blog',[
            'blogs' => Blog::all(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function caseDetails()
    {
        return view('website.home.case.details');
    }

    /**
     * Display the specified resource.
     */
    public function blogDetails($id)
    {
        $decryptID = Crypt::decryptString($id);
        $blog = Blog::find($decryptID);
        return view('website.home.blog.details',[
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            return view('website.dashboard.settings',[
                'user' => User::find($id),
            ]);
        }catch (DecryptException $e)
        {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
