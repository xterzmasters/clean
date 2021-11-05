<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletMapController extends Controller
{
    /**
     * Show the outlet listing in LeafletJS map.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    // public function index(Request $request)
    // {
    //     return view('outlets.map');
    // }

        public function index(Request $request)
    {
        return view('outlets.map');
    }

    public function routing_machine(Request $request)
    {
        return view('outlets.routing_machine');
    }
}
