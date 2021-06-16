<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Cylinder;
use auth;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('supplier.home');
    }

     public function profile()
    {
        return view('supplier.profile');
    }

     public function bookings()
    {
    	$bookings=Auth::user()->booking()->orderBy('id', 'desc')->get();
        return view('supplier.bookings',compact('bookings'));
    }

      public function ajaxBookingStatus(Request $request)
    {

        $status=$request->status;
        $id=$request->id;

       $booking=Booking::find($id);
       $booking->update(['status'=>$request->status]);
       if($status==3)
       {
       	$this->cylinder_increment($booking->supplier_id,$booking->cylinder);
       }
     return ;
    
        
    }
     private function cylinder_increment($supplier_id,$cylinder)
    {
         if($cylinder==5)
        {
            $col="five_cylinder";
        }elseif($cylinder==10)
        {
            $col="ten_cylinder";
        }elseif($cylinder==15)
        {
            $col="fifteen_cylinder";
        }
        $cylinder_obj=Cylinder::where('supplier_id',$supplier_id);
        $cylinder_obj->increment($col, 1);
        return;
    }
}
