<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use App\User;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function postRegister(Request $request){
      $validator = Validator::make($request->all(), [
	    'email' => 'required|email|unique:users,email', 'company_name' => 'required', 'password' => 'required',
        'phone_no' => 'required|unique:users,phone_no|phone:IN,US,mobile,fixed_line',	
	  ]);
     if ($validator->fails()) {	
          return redirect()->back()->withInput($request->only('company_name', 'email', 'phone_no'))->withErrors($validator->messages());	 
	 } else {
		 $user = new User;
		 $user->company_name = $request->input('company_name');
		 $user->phone_no = $request->input('phone_no');
		 $user->email = $request->input('email');
		 $user->password = Hash::make($request->input('password'));
		 if($user->save()){
			 return redirect()->to("auth/login");
		 } else {
		   return redirect()->back()->withInput($request->only('company_name', 'email', 'phone_no'))->withErrors("Internal Error Happened. Please try again later."); 
		 }
	 }	 
		//echo "<pre>"; print_r($request);
	}
	
	
	public function postLogin(Request $request){
      $validator = Validator::make($request->all(), [
	    'username' => 'required', 'password' => 'required',
	  ]);
     if ($validator->fails()) {	
          return redirect()->back()->withInput($request->only('username'))->withErrors($validator->messages());	 
	 } else {
		// $user = new User;
		 $username = $request->input('username');
         $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_no';
         $request->merge([$field => $request->input('username')]);

         if ($this->auth->attempt($request->only($field, 'password')))
          {  
	  		if($this->auth->user()->id == 1){
			 \Session::put('logedin_dir', 'admin');	
			 \Session::put('logedin_userid', $this->auth->user()->id); 	
			 \Session::put('logedin_useremail', $this->auth->user()->email); 	
			 return redirect()->to('admin/dashboard');	
			} else {
			 \Session::put('logedin_dir', 'users');		
			 \Session::put('logedin_userid', $this->auth->user()->id); 	
			 \Session::put('logedin_useremail', $this->auth->user()->email);				
             return redirect()->to('users/dashboard');
			}
          }

           return redirect()->back()->withInput($request->only('username'))->withErrors("Invalid Credentials. Please try again.");
	   }	 
		//echo "<pre>"; print_r($request);
	}

    public function getLogout(){
		\Session::flush();
		return redirect()->to('auth/login');
	}	
}
