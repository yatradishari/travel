<?php namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use Validator;
class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard')->with('menu', 'dashboard');
	}

	public function getTours(){
		$tour_obj = new Tour;
		$tour_obj->where('isblocked', '=', 0)->paginate(3);
		$tour_list = $tour_obj->get(['tour_title','start_date','end_date','package','isblocked']);
        return view('tours')->with(array('menu'=>'tours', 'tour_list'=>$tour_list, 'tour_count'=>sizeof($tour_list)));	
	}
	
	public function addTour(){
		return view("addtour")->with(array('menu'=>'tours'));
	}
	
	public function saveTour(Request $request){
      $validator = Validator::make($request->all(), [
	    'tour_title' => 'required', 'start_date' => 'required|date_format:Y-m-d|after:tomorrow', 'end_date' => 'required|date_format:Y-m-d|after:start_date',
        'tour_public_url' => 'required|unique:tours,tour_public_url','description'=>'required',	
	  ]);
     if ($validator->fails()) {	
	     return redirect()->back()->withInput($request->only('tour_title', 'start_date', 'end_date', 'tour_public_url', 'description'))->withErrors($validator->messages());
	 } else {
		 $tour_obj = new Tour;
		 $tour_obj->tour_title = $request->input('tour_title');
		// $start_dt_list = explode("/",$request->input('start_date'));
		 //$end_dt_list = explode("/",$request->input('end_date'));
		 //echo $request->input('start_date'); dd($start_dt_list); exit;
		 $tour_obj->start_date = $request->input('start_date');
		 $tour_obj->end_date = $request->input('end_date');		 
		 $tour_obj->package = $request->input('package');	
		 //$tour_obj->start_date = $start_dt_list[2].'-'.$start_dt_list[0].'-'.$start_dt_list[1];
		 //$tour_obj->end_date = $end_dt_list[2].'-'.$end_dt_list[0].'-'.$end_dt_list[1];
		 $tour_obj->tour_public_url = $request->input('tour_public_url');
		 $tour_obj->description = $request->input('description');
		 $tour_obj->user_id = \Session::get("logedin_userid");
		 
		 if($tour_obj->save()){
			 return redirect()->to("users/tours");
		 } else {
             return redirect()->back()->withInput($request->only('tour_title', 'start_date', 'end_date', 'tour_public_url', 'description'))->withErrors("Internal Error Happened. Please try again later."); 			 
		 }
	 }	 
	}
}
