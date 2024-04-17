<?php
    
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class WidgetController extends Controller
    {
        public function widget(){
            return view('pages/widget_page');
        }

        public function calendar(){
            return view('pages/calendar');
        }

        public function gallery(){
            return view('pages/gallery');
        }
         public function kanban(){
            return view('pages/kanban_board');
         }
    }
?>