<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function create(){
        return view('Pages.contact');
    }
    public function store(ContactRequest $request){
       
    }
}
