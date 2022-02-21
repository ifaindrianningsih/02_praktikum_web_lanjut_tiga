<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return '<a href="https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }
}
