<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use MercurySeries\Flashy\Flashy;
class ContactController extends Controller
{
    public function create(){
        return view('Pages.contact');
    }
    public function store(ContactRequest $request){

        /*
        $Message=Message::create([
            'nom'=>$request->nom,
            'email'=>$request->email,
            'message'=>$request->message
        ]);*/
    
        $Message=Message::create($request->only('nom','email','message'));
        Mail::to(config('Laracarte.admin_support_email'))->send(new ContactMessageCreated($Message));
        //session()->flash('message','Message Envoye Avec Succes !!!!');
        Flashy::success( 'Message Envoye Avec Succès !!!');

        //flashy()->success ( ' Vous avez été déconnecté. ' , ' http://your-awesome-link.com ' );
        return redirect()->route('Home');
    }
}
