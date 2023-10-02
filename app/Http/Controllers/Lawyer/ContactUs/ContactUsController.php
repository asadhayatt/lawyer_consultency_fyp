<?php

namespace App\Http\Controllers\Lawyer\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        // return $contacts;

        return view('lawyer.contactus.index',get_defined_vars());
    }

    public function delete($id){

        Contact::find($id)->delete();

        return redirect()->back()->with('success','Data deleted succssfully!');
    }
}
