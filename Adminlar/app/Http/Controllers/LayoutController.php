<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function topNav(){
        return view('pages/layout/top_nav');
    }

    public function topNavSidebar(){
        return view('pages/layout/top_nav_sidebar');
    }

    public function boxed(){
        return view('pages/layout/boxed');
    }

    public function fixedSidebar(){
        return view('pages/layout/fixed_sidebar');
    }

    public function fixedSidebarCustom(){
        return view('pages/layout/fixed_sidebar-custom');
    }

    public function fixedNav(){
        return view('pages/layout/fixed-nav');
    }
    public function fixedFooter(){
        return view('pages/layout/fixed_footer');
    }

    public function collapsedSidebar(){
        return view('pages/layout/collapsed_sidebar');
    }
}
