<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\Cylinder;


class WelcomeController extends Controller
{
      public function __construct()
    {
        $this->middleware('guest');
    }

     public function index()
    {
    	 $this->generateParams();
        return view('front.welcome');
    }
        public function ajaxOxygenList(Request $request)
    {
         $data= User::where('state',$request->id)->with('cylinder')->get();
        $content='<div class="flex items-center">
                              <table class="table">
                                  <th>Supplier Name</th>
                                  <th>5 Ltr</th>
                                  <th>10 Ltr</th>
                                  <th>15 Ltr</th>
                              
                              <tbody>';
                              foreach ($data as $key => $value) {
                              	# code...
	                              foreach ($data[$key]->cylinder as  $val) {
	                                $content.=  '<tr><td>'.$val->supplier->name.'</td><td>'.$val->five_cylinder. 'Ltr</td><td>'.$val->ten_cylinder. 'Ltr</td><td>'.$val->fifteen_cylinder. 'Ltr</td></tr>';
	                              }
                              }
                             $content.= '</tbody></table></div>';
                            return $content;
    }
     private function generateParams()
    {
        $state = State::where('country_id',101)->orderBy("name", "asc")
                ->pluck('name', 'id')->prepend('Select State', '');
        
        view()->share('state', $state);
     
    }
}
