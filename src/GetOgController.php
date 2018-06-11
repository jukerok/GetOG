<?php

namespace Razz\GetOG;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class GetOgController extends Controller
{
    public function index(Request $request) {
       
        $url        =   $request->url;
        $OG         =   GetOG::fetch($url);

        $OG_Result  =   ['image'        =>      $OG->image,  
                         'title'        =>      $OG->title,
                         'type'         =>      $OG->type,
                         'url'          =>      $OG->url,
                         'desc'         =>      $OG->description,
                         'site_name'    =>      $OG->image_src];

        return response()->json($OG_Result);                         
}

    public function show() {
        return view('getog::form');
    }

}
