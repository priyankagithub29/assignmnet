<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\State;
use App\Models\Cylinder;
use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
         $this->generateParams();
        return view('auth.register');
    }
    /**
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(UserRequest $request)
    {
       
        $user= User::create($request->all());
       
        $data=[
                'supplier_id' =>$user->id,
                'five_cylinder'=>5,
                'ten_cylinder'=>10,
                'fifteen_cylinder'=>15
            ];
        $Cylinder= Cylinder::create($data);

        return redirect('login');
    }


    private function generateParams()
    {
        $state = State::where('country_id',101)->orderBy("name", "asc")
                ->pluck('name', 'id')->prepend('Select State', '');
        
        view()->share('state', $state);
     
    }
}
