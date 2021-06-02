<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\StoreMail;

class SendEmailController extends Controller
{
    function index() {
        return view('welcome');
    }

    function store(Request $request) {

        $this->validate($request, [
            'fname' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'memo' => 'required',
        ]);

        $data = new StoreMail();

        $data->name = request('fname');
        $data->phone = request('phone');
        $data->email = request('mail');
        $data->message = request('memo');
        
        $data->save();

        Mail::to('contact@webdev.com')->send(new SendMail($data));

        return redirect('/#');
    }
}
