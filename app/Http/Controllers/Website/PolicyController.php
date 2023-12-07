<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CommonSection\Privacy;
use App\Models\CommonSection\Term;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function terms()
    {
        return view('website.terms.terms',[
            'terms' => Term::all(),
        ]);
    }

    public function privacy()
    {
        return view('website.terms.privacy',[
            'privacies' => Privacy::all(),
        ]);
    }

}
