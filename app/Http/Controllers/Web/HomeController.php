<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use GuzzleHttp\Psr7\Rfc7230;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        return view('web.home.index');
    }
    public function about(){
        return view('web.about.about');
    }
    public function services(){
        return view('web.services.service');
    }
    public function contact(){
        return view('web.contact.contact');
    }
    public function storeContact(Request $request){
        // return $request;

        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();

        return redirect()->back()->with('success','Messaege has been sent.');
    }

    public function blog(){
        return view('web.blog.blog');
    }
    public function blogDetail(){
        return view('web.blog.blog_detail');
    }
}
