<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Cylinder;
use App\Models\Booking;
use App\Http\Requests\BookingRequest;



class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
         $this->generateParams();
        return view('front.booking');
    }
     protected function create(BookingRequest $request)
    {	
    
    	if($request->covid_status=='positive')
    	{
           $request->merge(['covid_positive'=>date("Y-m-d", strtotime($request->covid_positive))]); 
        }elseif($request->covid_status=='negative'){
    		$request->merge(['covid_positive'=>date("Y-m-d",0000-00-00)]);
    	}

        $booking= Booking::create($request->all());
         $this->cylinder_decrement($request);
       
         return redirect('booking')->with('success','Booking created successfully!');
    }
    private function cylinder_decrement($requet)
    {
         if($requet->cylinder==5)
        {
            $col="five_cylinder";
        }elseif($requet->cylinder==10)
        {
            $col="ten_cylinder";
        }elseif($requet->cylinder==15)
        {
            $col="fifteen_cylinder";
        }
        $cylinder=Cylinder::where('supplier_id',$requet->supplier_id);
        $cylinder->decrement($col, 1);
        return;
    }
    public function ajaxCityList(Request $request)
    {
    	return City::where('state_id',$request->id)->orderBy('name','asc')->pluck('name', 'id')->prepend('Select City','');
    }

     public function ajaxCylinderList(Request $request)
    {

    	$data= Cylinder::where('supplier_id',$request->id)->first();

    	$data_array = array('' => 'Not Available');
    	if($data)
    	{
    	$data_array=array(5 => "5 Ltr(Qty-".$data->five_cylinder.")" ,
    				      10 => "10 Ltr(Qty-".$data->ten_cylinder.")" ,
    				      15 =>"15 Ltr(Qty-".$data->fifteen_cylinder.")"
                      );
     }
    	return $data_array; 
    }
    private function generateParams()
    {
        $state = State::where('country_id',101)->orderBy("name", "asc")
                ->pluck('name', 'id')->prepend('Select State', '');

        $supplier = User::orderBy("name", "asc")
                ->pluck('name', 'id')->prepend('Select Supplier', '');
        
        view()->share('state', $state);
        view()->share('supplier', $supplier);
     
    }

     
}
