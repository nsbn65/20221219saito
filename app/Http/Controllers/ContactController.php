<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
        return view('inquiry');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        if(!$inputs){
            return redirect()->route('index');
        }
        $gender = $request->input('gender');

        return view('confirm')->with([
            'inputs' => $inputs,
            'gender' => $gender,
            'request' => $request,
        ]); 
    }   

    public function send()
    {
        return view('thanks');
    }


    public function search(Request $request)
    {       
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        //$created_at = $request->input('created_at');
        $email = $request->input('email');
        $from = $request->input('from');
        $until = $request->input('until');
        $contacts = [];
        
        return view ('control.control',
        [
            'fullname' => $fullname,
            'gender' => $gender,
            'request' => $request,
            //'created_at' => $created_at,
            'from' => $from,
            'until' => $until,
            'email' => $email,
            'contacts' => $contacts,
        ]); 
    }


    public function find(Request $request)
    {
        
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $from = $request->input('from');
        $until = $request->input('until');
        $email = $request->input('email');
        
        $query = Contact::query();
        
        if (isset($fullname)) {
        $query->where('fullname', 'like binary', '%' .$fullname. '%');
        }
        if (isset($gender)) {
        $query->where('gender', $gender)->get();
        }
        if (isset($from) && isset($until)) {    
        $query->whereBetween("created_at", [$from, $until])->get();
        } else {
        $query = Contact::get();
        }
        if (isset($email)) {
        $query->where('email', 'like binary', '%' .$email. '%');
        }
        //dd($query);
        $contacts = $query->all();

    return view ('control.control',
    [
        'fullname' => $fullname,
        'gender' => $gender,
        //'request' => $request,
        //'created_at' => $created_at,
        'from' => $from,
        'until' => $until,
        'email' => $email,
        'contacts' => $contacts
    ]);
    }

    public function delete ($id)
    {       
        $form = Contact::find($id);
        $form->delete();
        return redirect('/');
    }
}
