<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailController extends Controller
{
    public function index()
    {
        return view('page.proto');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'nama' => 'min:4',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
        );

        Mail::send('includes.user.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('reza.raihanrizki@gmail.com');
            $message->subject($data['subject']);
        });

        Alert::success('Sukses Terkirim', 'Terimakasih telah mengirimkan kritik dan sarannya untuk membuat acara ini menjadi lebih baik lagi');
        return redirect()->route('home');
    }
}
