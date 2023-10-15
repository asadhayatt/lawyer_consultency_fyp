<?php

namespace App\Http\Controllers\Client\Login;

use App\Http\Controllers\Controller;
use App\Mail\forgotPassMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showSignUpPage(){
        return view('client.auth.sign-up');     
    }
    public function storeSignUp(Request $request){
        $data = $request->all();

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required | email | unique:users,email',
            'phone' => 'required | min:11 | numeric',
            'password' => 'required | min:8'
        ]);

        if($validate->fails()){
            return redirect()->back()->with('error',$validate->errors()->all()[0]);
        }

        $record = new User();
        $record->name = $request->name;
        $record->email = $request->email; 
        $record->phone = $request->phone; 
        $record->role = 'client'; 
        $record->password = Hash::make($request->password);
        $record->save();

        if(Auth::attempt(['email'   =>  $request->email , 'password' =>   $request->password , 'role' => 'client'])){
        
            return redirect()->to('client/dashboard');
        
        }else{
            return redirect()->back()->with('error',"Try Again with different email.");
        }

    }

    public function checklogin(Request $request){

        $validate = Validator::make($request->all(),[
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);

        if($validate->fails()){
            return redirect()->back()->with('error',$validate->errors()->all()[0]);
        }

        if(Auth::attempt(['email'   =>  $request->email , 'password' =>   $request->password])){
        
            if(Auth::user()->role == 'client'){
                return redirect()->to('client/dashboard');
            }else{
                return redirect()->to('admin/dashboard');
            }
        
        }else{
            return redirect()->back()->with('error',"Email & Password is incorrect. Try Again with correct one.");
        }

    }

    public function forgotPage(){
        return view('client.auth.forgot-pass');
    }
    public function sendCode(Request $request){
        $code = rand(0,999999);
        $email = $request->email;
        // return $request->email;
        $user = User::where('email',$request->email)->first();
        // return $user;
        if(!$user){
            return redirect()->back()->with('error','No record found!. Please enter correct email.')->withInput();
        }
        $user->forgot_code = $code;
        $user->save();

        Mail::to($request->email)->send(new forgotPassMail($code));
        return view('client.auth.enter-code',compact('email'));
    }

    public function verifyCode(Request $request){
        // return $request;
        $validate = Validator::make($request->all(),[
            'password'  =>  'required | min:8'
        ]);
        if($validate->fails()){
            return redirect()->back()->with('error',$validate->errors()->all()[0]);
        }
        $user = User::where('email',$request->email)->first();
        if($user->forgot_code == $request->code){
            $user->password = Hash::make($request->password);
            $user->save();
            return view('client.auth.changed');
        }else{
            return redirect()->back()->with('error','Code is incorrect!');
        }
    }

}
