<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function about_us(){
        return view('frontend.about_us');
    }

    public function technical_services(){
        return view('frontend.technical_services');
    }
    public function exterior_building(){
        return view('frontend.exterior_building');
    }
    public function electromechanical_work(){
        return view('frontend.electromechanical_work');
    }
    public function electromechanical_equipment(){
        return view('frontend.electromechanical_equipment');
    }
    public function plumbing(){
        return view('frontend.plumbing');
    }
    public function carpentery(){
        return view('frontend.carpentery');
    }
    public function ceiling(){
        return view('frontend.ceiling');
    }
    public function electrical_fittings(){
        return view('frontend.electrical_fittings');
    }
    public function plaster_works(){
        return view('frontend.plaster_works');
    }


    public function ac_maintenance(){
        return view('frontend.ac_maintenance');
    }
    public function contact_us(){
        return view('frontend.contact_us');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
    public function garden_maintenance(){
        return view('frontend.garden_maintenance');
    }
    public function get_a_quote(){
        return view('frontend.get_a_quote');
    }
    public function kitchen_work(){
        return view('frontend.kitchen_work');
    }
    public function marble_fixing(){
        return view('frontend.marble_fixing');
    }
    public function services(){
        return view('frontend.services');
    }
    public function swimming_pool(){
        return view('frontend.swimming_pool');
    }
    public function wall_painting(){
        return view('frontend.wall_painting');
    }
    public function testimonial_ahmed_kabir(){
        return view('frontend.testimonial.ahmed_kabir');
    }
    public function testimonial_jyothika_basu(){
        return view('frontend.testimonial.jyothika_basu');
    }
    public function testimonial_navadeep_sidd(){
        return view('frontend.testimonial.navadeep_sidd');
    }

}
