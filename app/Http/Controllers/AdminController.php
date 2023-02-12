<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class AdminController extends Controller
{
    public function dashboard(){
        $data['messages'] = Message::paginate(10);
        return view('dashboard', $data);
    }

    public function message(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        Message::create($request->all());

        return redirect()->back()->with(['success' => 'Message has been send, we will contact you immedetly']);
    }
}
