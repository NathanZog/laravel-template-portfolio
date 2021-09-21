<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){
        $header = Header::all();
        $portfolio = Portfolio::all();
        $about = About::all();
        $contact = Contact::all();
        $footer = Footer::all();
        return view("/backoffice", compact('header','portfolio','about','contact','footer'));
    }
}
