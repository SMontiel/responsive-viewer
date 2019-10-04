<?php

namespace Smontiel\ResponsiveViewer\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Display the Responsive Viewer view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('responsive-viewer::layout');
    }
}

