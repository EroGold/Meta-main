<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    public function invoice(){
        return view('pages/examples/invoice');
    }

    public function profile(){
        return view('pages/examples/profile');
    }

    public function Ecommerce(){
        return view('pages/examples/e-commerce');
    }

    public function projects(){
        return view('pages/examples/projects');
    }

    public function projectAdd(){
        return view('pages/examples/project-add');
    }

    public function projectEdit(){
        return view('pages/examples/project-edit');
    }

    public function projectDetail(){
        return view('pages/examples/project-detail');
    }

    public function contacts(){
        return view('pages/examples/contacts');
    }

    public function faq(){
        return view('pages/examples/faq');
    }

    public function contactUs(){
        return view('pages/examples/contact-us');
    }
}