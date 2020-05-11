<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;

use Redirect;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Mail;
use User;
use Validator;
use Session;


 

class maincontroller extends Controller
{
	
	
	
	
	 public function index()   
   {
	 
			   return view ('index');
		   
   }
	

  
	 public function epassform()   
   {
	 
			   return view ('form');
		   
   }	
		
	
	 public function message()   
   {
	 
			   return view ('message');
		   
   }	
 
   
 	
		
   
// ADD NEW REQUEST
	  	 public function addnewpass(Request $request)   
 
	
	    {
	$validator = Validator::make($request->all(), [
	        
		
			 
			 'Name' => 'required',
			'Parents_Name' => 'required',
			
			'Age' => 'required',
			'Mobile' => 'required',
			
			'Email' => 'required',
			
			'Service_Type' => 'required',
			'Distination' => 'required',
			'Address' => 'required',
			'Interval' => 'required',
			'passdate' => 'required',
			'Thana' => 'required',
			
			
			 ]);

        if ($validator->fails()) {
            return redirect('epassform')
                        ->withErrors($validator)
                        ->withInput();
        }
		 $rid="AYD".rand(10,99).(rand(100,10000)).rand(100,999);
		 $name=$request->input('Name');
		 $parentsname=$request->input('Parents_Name');
		 $age=$request->input('Age');
		 $mobile=$request->input('Mobile');
		 $email=$request->input('Email');
		 $servicetype=$request->input('Service_Type');
		  $dist=$request->input('Distination');
		 $address=$request->input('Address');
		 $interval=$request->input('Interval');
		  $thana=$request->input('Thana');
		  $passdate=$request->input('passdate');
		  	$dd2=date("Y/m/d");
		 //Photo Upload
          
          $photo=$request->file('photo');
	 
		
	  if($photo){
			  $gov= rand(10,99).$mobile.$request->file('photo')->getClientOriginalName();
	          $folder='assets/upload/photo';
	          $request->file('photo')->move($folder,  $gov);
			  $pic='/assets/upload/photo/'.$gov;
			 
		 }		  
		  
		  else{
			  $pic="Null";
		  }
		  
		  
		
		
		 $mdata=array('rid'=>$rid,'name'=>$name,'parentsname'=>$parentsname,'age'=>$age,'mobile'=>$mobile,'email'=>$email,
		 'service'=>$servicetype,'dist'=>$dist,'address'=> $address,'tinterval'=>$interval,'thana'=>$thana,'rdate'=>$dd2,'passdate'=>$passdate,'pic'=>$pic,);
		 
		 \DB::table('passlist')->insert($mdata);
		
		//mail notice
		$mail='adarshsinghiiit@gmail.com';
		$data = array(
        'mail' => 'adarshsinghiiit@gmail.com',
		'name' => $name,
		'rid' => $rid,
		
		
       );
	   Mail::send('emails.note', $data, function ($message) use ($mail) {

        $message->from('youngersera@gmail.com', 'E-Pass Alert');

        $message->to($mail)->subject('New E-Pass/ई-पास  Request');

           
	         
	  
           });
		  return view('message')->with(['rid'=>$rid,'name'=>$name]);
		
		
		
   }
   
   
	
 
   
  
   
   
  
   
   
   
   public function approvepass(Request $request)
	{  
	
	if(Auth::check())
	{
	
		
		$validator = Validator::make($request->all(), [
            
            'rid' => 'required',
			
			
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)
                        ->withInput();
        }
		
		
		
		$rid=$request->input('rid');   
		$comment=$request->input('comment'); 
		$interval=$request->input('timeinterval');
		$passdate=$request->input('passdate');
		
	  $name= \DB::table('passlist')->where('rid', $rid)->first()->name;
	  $service= \DB::table('passlist')->where('rid', $rid)->first()->service;
	  
	  $dist= \DB::table('passlist')->where('rid', $rid)->first()->dist;
	  $mobile= \DB::table('passlist')->where('rid', $rid)->first()->mobile;
	  $remark= \DB::table('passlist')->where('rid', $rid)->first()->comment;
	  $email= \DB::table('passlist')->where('rid', $rid)->first()->email;
	    $dd=date("d/m/Y");
	  
      
	  $data2=array('status'=>'Approved','comment'=>$comment,'tinterval'=>$interval,'passdate'=>$passdate);
	  \DB::table('passlist')->where('rid', $rid)->update($data2);
	  $mail=$email;
	  
	  //EMAIL SENT TO User
	   $data = array(
        'mail' => $mail,
		'name' => $name,
		'rid' => $rid,
		'service' => $service,
		'interval' => $interval,
		'passdate' => $passdate,

		'dist' => $dist,
		'mobile' => $mobile,
		'remark' => $comment,
		'date'=>$dd,
		
       );
	   Mail::send('emails.mail', $data, function ($message) use ($mail) {

        $message->from('youngersera@gmail.com', 'Smart Cell Ayodhya');

        $message->to($mail)->subject('E-Pass/ई-पास');

           
	         
	  
           });
	  
	    
	  return redirect('pendingpass')
                        ->withErrors("Pass Approved Successfully and Sent to User Mail");
	}			
	       else
			   return redirect ('login');
       
    } 
   
   
   
     
   public function passstatus(Request $request)
	{  
	
	
		$validator = Validator::make($request->all(), [
            
            'Request_Id' => 'required',
			
			
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)
                        ->withInput();
        }
		
		
		
		$rid=$request->input('Request_Id');   
		
	  $data= \DB::table('passlist')->where('rid', $rid)->get();
	  if(!$data){
		  
		  return Redirect::back()->withErrors("ID NOT FOUND");
                   
	  }
	 
	  else{
		  
		$rdata= \DB::table('passlist')->where('rid', $rid)->first();
	  
	  
	 return view('profile')->with('pass', $rdata);  
		  
	  }
      
	 
	    
	  return redirect('pendingpass')
                        ->withErrors("Pass Approved Successfully and Sent to User Mail");
	
       
    } 
   
   
   
   
   
   
   
    	 public function admin()   
   {
	 	
      if(Auth::check())
	{	

     $total= count(\DB::table('passlist')->groupBy('rid')->get());
	$pending= count(\DB::table('passlist')->where('status','Pending')->groupBy('rid')->get());
	$approved= count(\DB::table('passlist')->where('status','Approved')->groupBy('rid')->get());
	$rejected= count(\DB::table('passlist')->where('status','Rejected')->groupBy('rid')->get());
      return view('admin.admin')->with(['total'=>$total])->with(['pending'=>$pending])->with(['approved'=>$approved])->with(['rejected'=>$rejected]);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
         	 public function totalepass() 
			 
   {     
   if(Auth::check())
	{
	    
		$psdata =\DB::table('passlist')->get();
      
        return view('admin.totalpass')->with('passdata', $psdata);
	}
	 else
			   return redirect ('login');
	  
	  	   
   }
   
   
        	 public function pendingpass() 
			 
   {   
       if(Auth::check())
	{
	    
		$psdata =\DB::table('passlist')->where('status','Pending')->get();
      
        return view('admin.pendingpass')->with('passdata', $psdata);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
   
        	 public function apppass() 
			 
   {
	    if(Auth::check())
	{
		$psdata =\DB::table('passlist')->where('status','Approved')->get();
      
        return view('admin.apppass')->with('passdata', $psdata);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
 
   	 public function controlpass($pid)   
   {
	    if(Auth::check())
	{
		 $pass=\ DB::table('passlist')->where('rid',$pid)->first();
		  $mobile= \DB::table('passlist')->where('rid', $pid)->first()->mobile;
		  $log= count(\DB::table('passlist')->where('mobile',$mobile)->groupBy('rid')->get());
		 
        return view('admin.editpass')->with('pass', $pass)->with('log', $log);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
   
     	 public function viewpass($vid)   
   {
	    if(Auth::check())
	{
		 $pass=\ DB::table('passlist')->where('rid',$vid)->first();
		 
		 
        return view('record')->with('pass', $pass);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
      	 public function log($mobile)   
   {
	    if(Auth::check())
	{
		 $mdata=\ DB::table('passlist')->where('mobile',$mobile)->get();
		 $cpass= count(\DB::table('passlist')->where('mobile',$mobile)->groupBy('rid')->get());
		 
        return view('admin.log')->with('logdata', $mdata)->with('mob',$mobile)->with('cpass',$cpass);
	}
	 else
			   return redirect ('login');
	  	   
   }
   
   
   
    public function rejectpass($rid)   
   {
	   if(Auth::check())
	{ 
		  return view('rejectform')->with('rid', $rid);
		 
	}
	 else
			   return redirect ('login');
	
	  	   
   }
   
   public function reject(Request $request)   
   {
	   if(Auth::check())
	{ 

       
		$validator = Validator::make($request->all(), [
            
            'rid' => 'required',
			'reason' => 'required',
			
			
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)
                        ->withInput();
        }
		$rid=$request->input('rid');
		$reason=$request->input('reason');
		$mail= \DB::table('passlist')->where('rid', $rid)->first()->email;
		$name= \DB::table('passlist')->where('rid', $rid)->first()->name;
		

         
		 $data4=array('status'=>'Rejected','comment'=>$reason);
	  \DB::table('passlist')->where('rid', $rid)->update($data4);
	  
	   $data = array(
        'mail' => $mail,
		'name' => $name,
		'reason'=>$reason,
		
       );
	   Mail::send('emails.mail2', $data, function ($message) use ($mail) {

        $message->from('youngersera@gmail.com', 'Smart Cell Ayodhya');

        $message->to($mail)->subject('E-Pass/ई-पास');

           
	         
	  
           });
	  
	  
	  
	  
	  return redirect('pendingpass')
                        ->withErrors("Pass Rejected");
		 
	}
	 else
			   return redirect ('login');
	
	  	   
   }
   
   
    public function resendpass($rid)   
   {
	   if(Auth::check())
	{ 
		  
		
	  $name= \DB::table('passlist')->where('rid', $rid)->first()->name;
	  $service= \DB::table('passlist')->where('rid', $rid)->first()->service;
	  $interval= \DB::table('passlist')->where('rid', $rid)->first()->tinterval;
	  $dist= \DB::table('passlist')->where('rid', $rid)->first()->dist;
	  $mobile= \DB::table('passlist')->where('rid', $rid)->first()->mobile;
	  $remark= \DB::table('passlist')->where('rid', $rid)->first()->comment;
	  $email= \DB::table('passlist')->where('rid', $rid)->first()->email;
	    $dd=date("d/m/Y");
	  
      
	 
	  $mail=$email;
	  
	  //EMAIL SENT TO User
	   $data = array(
        'mail' => $mail,
		'name' => $name,
		'rid' => $rid,
		'service' => $service,
		'interval' => $interval,
		'dist' => $dist,
		'mobile' => $mobile,
		'remark' => $remark,
		'date'=>$dd,
		
       );
	   Mail::send('emails.mail', $data, function ($message) use ($mail) {

        $message->from('youngersera@gmail.com', 'Smart Cell Ayodhya');

        $message->to($mail)->subject('E-Pass/ई-पास');

           
	         
	  
           });
	  
	    
	  return redirect('apppass')
                        ->withErrors("Pass Resend Successfully to User Mail");
		 
	}
	 else
			   return redirect ('login');
	
	  	   
   }
   
        public function invalidpass($pid)   
   {
		 
		 $data3=array('status'=>'Invalid'); 
	  \DB::table('passlist')->where('rid', $pid)->update($data3);
	  
	  
	return Redirect::back()->withErrors('Pass Invalid');
		 
	
	
	  	   
   }
   
   
   
   
     public function checkpass($mid)   
   {
		 
		 
	 $pdata= \DB::table('passlist')->where('rid', $mid)->first();
	  
	  
	 return view('profile')->with('pass', $pdata);
		 
	
	
	  	   
   }
 
   
   
   
  
   
  
   
   
  	 
  
  
 
	
   //ADMIN AUTH
   
   	 // For register
	public function adminsignup(Request $request)
	{
		
		$validator = Validator::make($request->all(), [
            'email' => 'unique:users|required',
            'password' => 'required',
			'mobile' => 'required',
			'name' => 'required',
			
			
        ]);

        if ($validator->fails()) {
            return redirect('adminregister')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		 $mob4=$request->input('mobile');   
	  $mail4=$request->input('email');  
	  $name4=$request->input('name');
	
	 
	  $pass4=hash::make($request->input('password'));  
      
	  $data4=array('mobile'=>$mob4,'email'=>$mail4,'password'=>$pass4,'name'=>$name4);
	  \DB::table('users')->insert($data4);
	 
	  
	  return redirect('login')
                        ->withErrors("Registered Successfully.Please Login");
       
    }
	
	
	
	
	
	
	
	
	
	
	// Admin Login check
	
	public function adminlogincheck(Request $request)
	{
		 $auth=Auth::attempt(['email'=>$request->input('email'),
		 'password'=>$request->input('password')]);
		 if($auth){
			
			return redirect('admin');
			 
		 }
		 else
		 {
			 
			return redirect('login')
                        ->withErrors("Invalid ID or Password or may be You have not admin access");
		 }
       
    }
	
   public function logout()
	{
		 Auth::logout();
		 return redirect ('login');
       
    }
   
   
   
	
	
	
   
}
