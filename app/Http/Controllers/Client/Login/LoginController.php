<?php

namespace App\Http\Controllers\Client\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showSignUpPage(){
        return view('client.auth.sign-up');     
    }
    public function storeSignUp(Request $request){
        $data = $request->all();

        $record = new User();
        $record->name = $request->name;
        $record->email = $request->email; 
        $record->phone = $request->phone; 
        $record->password = Hash::make($request->password);
        $record->save();

        if(Auth::attempt(['email'   =>  $request->email , 'password' =>   $request->password])){
        
            return redirect()->to('client/dashboard');
        
        }else{
            return redirect()->back()->with('error',"Try Again with different email.");
        }

    }

}
